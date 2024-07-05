<?php
$url_db = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "plac3986_plantanalis";

$conn = new mysqli( $url_db, $username_db, $password_db, $dbname);
if ($conn -> connect_error){
    die("". $conn -> connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $request = $_GET["request"];
    if($request === "recommend"){
        $elevation = $_GET["elevation"];
        $sql = "SELECT nama, tinggi";
        $response["status"] = "success";
        $response["elevation"] = $elevation;
        echo json_encode($response);
    }
};

if ($_SERVER["REQUEST_METHOD"] == "POST"){   
    $request = $_POST["request"];

    if ($request === "login" ){
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $sql = "SELECT * FROM accounts WHERE email = '$user' and password = '$pass'";
        $result = $conn -> query($sql);

        if ($result -> num_rows > 0 ){
            $response["status"] = "success";
            $response["user"] = $user;
            $response["pass"] = $pass;
            echo json_encode($response);
        }
        else {
            $response["status"] = "gagal";
            $response["message"] = "Username atau password salah";
            $response["user"] = $user;
            $response["pass"] = $pass;
            echo json_encode($response);
        }
        $conn -> close();
        exit();
    // Menghentikan eksekusi skrip PHP setelah mengirim respons
    };

    if ($request === "signup"){
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $sql = "SELECT * FROM accounts WHERE email ='$user'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0){
            $response["status"] = "gagal";
            $response["message"] = "Username atau Email sudah terpakai" . $conn->error;
            echo json_encode($response);
            // ... bagian yang sama seperti sebelumnya ...
        } else {
            $sql = "INSERT INTO accounts (email, password ,fav) VALUES ('$user', '$pass', '[]')";
            if ($conn->query($sql) === TRUE) {
                // Jika query berhasil dieksekusi
                $response["status"] = "success";
                $response["message"] = "Bagus";
                $response["user"] = $user;
                $response["pass"] = $pass;
                echo json_encode($response);
            } else {
                // Jika terjadi kesalahan saat menjalankan query
                $response["status"] = "gagal";
                $response["message"] = "Error: " . $conn->error;
                echo json_encode($response);
            }
        }
    }

    if ($request === "recommend"){
        $elevasia = $_POST["elevasi"];
        $elevasi = (int)$elevasia;
        $sql = "SELECT nama, `tinggi tanah min`, `tinggi tanah max`,attribute FROM plantdb WHERE `tinggi tanah min` < $elevasi and `tinggi tanah max` > $elevasi";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            $response["status"] = "success";
            $response["message"] = "ditemukan";
            while ($row = $result->fetch_assoc()) {
                $response["nama"][] = $row["nama"];
                $response["tinggi tanah min"][] = $row["tinggi tanah min"];
                $response["tinggi tanah max"][] = $row["tinggi tanah max"];
                $response["attribute"][] = $row["attribute"];
        }
        } else {
            $response["status"] = "gagal";
            $response["message"] = "tidak ditemukan'$elevasi'";
        }
        echo json_encode($response);
    }

    if($request === "getname"){
        $sql = "SELECT nama FROM plantdb";
        $result = $conn -> query($sql);
        if ($result -> num_rows > 0){
            $response["status"] = "success";
            while ($row = $result -> fetch_assoc()){ 
                $response["nama"][] = $row["nama"];
            }
        } else {
            $response["status"] = "failed";
        }
        echo json_encode($response);
    }

    if ($request === "getattribute"){
        $nama = $_POST["nama"];
        $sql = "SELECT attribute FROM plantdb WHERE nama = '$nama'";
        $result = $conn -> query($sql);
        if ($result ->num_rows > 0){
            $response["status"] = "success";
            $row = $result -> fetch_assoc();
            $response["attribute"] = $row["attribute"];
        } else{
            $response["status"] = "failed";
        }
        echo json_encode($response);
    }
    if ($request === "fav"){
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $sql = "SELECT fav FROM accounts WHERE email = '$user' and password = '$pass'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
            if($row["fav"] === "[]"){
                $response["status"] = "false";
                $response["message"] = "belum terdapat list favorite";
            } else {
                $fav = json_decode($row["fav"] ,true);
                $fav = implode(",", $fav);
                $sql = "SELECT nama, gambar ,deskripsi FROM plantdb WHERE id IN ($fav)";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    $response["status"] = "true";
                    while ($row = $result -> fetch_assoc()){
                        $response["nama"][] = $row["nama"];
                        $response["gambar"][] = $row["gambar"];
                        $response["deskripsi"][] = $row["deskripsi"];
                    }
                } else {
                    $response["status"] = "false";
                    $response["message"] = "belum terdapat list favorite";
            }
            }
            echo json_encode($response);    
        }
    }

    if ($request === "favsearch"){
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $query = $_POST["query"];
        $sql = "SELECT fav FROM accounts WHERE email = '$user' and password = '$pass'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $fav = json_decode($row["fav"] ,true);
            $fav = implode(",", $fav);
            $sql = "SELECT nama, gambar ,deskripsi FROM plantdb WHERE id IN ($fav) AND nama LIKE '%$query%'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
                $response["status"] = "true";
                while ($row = $result -> fetch_assoc()){
                    $response["nama"][] = $row["nama"];
                    $response["gambar"][] = $row["gambar"];
                    $response["deskripsi"][] = $row["deskripsi"];
                }
                
            } else {
                $response["status"] = "false";
                $response["message"] = "belum terdapat list favorite";
            }
            echo json_encode($response);
        }
    }

    if ($request === "readlist"){
        $sql = "SELECT nama, gambar, deskripsi FROM plantdb";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            $response["status"] = "true";
           while ($row = $result->fetch_assoc()){
               $response["nama"][] = $row["nama"];
               $response["gambar"][] = $row["gambar"]; 
               $response["deskripsi"][] = $row["deskripsi"]; 
           };
        } else {
            $response["status"] = "false";
        }
        echo json_encode($response);
    }

    if ($request === "listsearch"){
        $query = $_POST["query"];
        $sql = "SELECT nama, gambar ,deskripsi FROM plantdb WHERE nama LIKE '%$query%'";
        $result = $conn -> query($sql);
        $data = array(); 
        if($result -> num_rows > 0){     
            $response["status"] = "success";      
            while ($row = $result -> fetch_assoc()){
                $response["nama"][] = $row["nama"] ; 
                $response["gambar"][] = $row["gambar"] ;
                $response["deskripsi"][] = $row["deskripsi"];
            };
            
        } else {
            $response["status"] = "gagal";
            $response["message"] = "Tidak ditemukan";
        }
        echo json_encode($response);
    }

    if ($request === "addfav"){
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $id = $_POST["id"];
        $sql = "SELECT fav FROM accounts WHERE email = '$user' and password = '$pass'";
        $idint = (int)$id;
        $result = $conn->query($sql);
        if ($result -> num_rows > 0){
            $row = $result -> fetch_assoc();
            $fav = json_decode($row["fav"] ,true);
            $check = array_search($idint, $fav);
            $fav[] = $idint;
            if ($check !== false){
                $response["status"] = "false";
                $response["message"] = "tidak ditemukan '$idint'";
            } 
            if ($check === false){ 
                $favbaru = json_encode($fav);
                $sql = "UPDATE accounts SET fav = '$favbaru' WHERE email = '$user' and password = '$pass'";
                $conn -> query($sql);
                $response["status"] = "true";
                $response["message"] = "Berhasil menambah '$idint'";
                
            }
        } else {
            $response["status"] = "false";
            $response["message"] = "tidak ditemukan '$idint'";
        }
        echo json_encode($response);
    }   

    if ($request === "removefav") {
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $id = $_POST["id"];
        
        $sql = "SELECT fav FROM accounts WHERE email = '$user' AND password = '$pass'";
        $idint = (int)$id;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) { 
            $row = $result->fetch_assoc();
            $fav = json_decode($row["fav"], true);

            $check = array_search($idint, $fav);

            if ($check !== false) {
                unset($fav[$check]); // Menghapus elemen dengan index yang sesuai
                $favbaru = json_encode(array_values($fav)); // Reset kembali index array
                $sql = "UPDATE accounts SET fav = '$favbaru' WHERE email = '$user' AND password = '$pass'";
                $conn->query($sql);
                $response["status"] = "true";
                $response["message"] = "Berhasil menghapus '$idint'";
            } else {
                $response["status"] = "false";
                $response["message"] = "Tidak ditemukan '$idint'";
            }
        } else {
            $response["status"] = "false";
            $response["message"] = "Akun tidak valid atau tidak ditemukan";
        }

        echo json_encode($response);
}


    if ($request === "insertdb"){                                      //insert db
        $id = $_POST["id"];
        $nama = $_POST["nama"]; 	
        $gambar = $_POST["gambar"]; 	
        $deskripsi = $_POST["deskripsi"];
        $umur = $_POST["umur"];
        $musim = $_POST["musim"];
        $suhu = $_POST["suhu"];	
        $tanah = $_POST["tanah"];
        $kelembapan = $_POST["kelembapan"];
        $tinggi_tanah_min = $_POST["tinggi_tanah_min"];
        $tinggi_tanah_max = $_POST["tinggi_tanah_max"];
        $nutrisi = $_POST["nutrisi"];
        $pupuk = $_POST["pupuk"];
        $hama = $_POST["hama"];
        $metode = $_POST["metode"];
        $referensi = $_POST["referensi"];
        $perawatan = $_POST["perawatan"];
        $penyakit = $_POST["penyakit"];
        $attribute = $_POST["attribute"];
        $sql = "INSERT INTO plantdb( id, nama, gambar, deskripsi, umur, musim, suhu, kelembapan, tanah, `tinggi tanah min`, `tinggi tanah max`, nutrisi, pupuk, hama, penyakit, metode, perawatan, referensi, attribute) VALUES ('$id', '$nama',	'$gambar', '$deskripsi', '$umur', '$musim',	'$suhu', '$kelembapan', '$tanah', '$tinggi_tanah_min',	'$tinggi_tanah_max', '$nutrisi', '$pupuk', '$hama', '$penyakit','$metode',''$perawatan,	'$referensi','$attribute')";
        $conn -> query($sql);
        if($conn -> affected_rows > 0){
            $response["status"] = "success";
            $response["message"] = "berhasil menyimpan di database dengan id = $id";
            echo json_encode($response);
        } else {
            $response["status"] = "error";
            $response["message"] = "gagal insert ke database";
            echo json_encode($response);
        }
    }
    if($request === "deletedb"){
        $id =  $_POST["id"];
        $sql = "DELETE FROM plantdb WHERE id = '$id'";
        $conn -> query($sql);
        if ($conn -> query($sql) === true){
            $response["status"] = "success";
            $response["message"] = "Berhasil menghapus record dengan id = '$id'";
        } else {
            $response["status"] = "gagal";
            $response["message"] = "gagal menghapus record dengan id = '$id'";
        }
        echo json_encode($response);
    }

    if ($request === "updatedb"){                                                               //insert db
        $id = $_POST["id"];
        $nama = $_POST["nama"]; 	
        $gambar = $_POST["gambar"]; 	
        $deskripsi = $_POST["deskripsi"];
        $umur = $_POST["umur"];
        $musim = $_POST["musim"];
        $suhu = $_POST["suhu"];	
        $tanah = $_POST["tanah"];
        $kelembapan = $_POST["kelembapan"];
        $tinggi_tanah_min = $_POST["tinggi_tanah_min"];
        $tinggi_tanah_max = $_POST["tinggi_tanah_max"];
        $nutrisi = $_POST["nutrisi"];
        $pupuk = $_POST["pupuk"];
        $hama = $_POST["hama"];
        $metode = $_POST["metode"];
        $referensi = $_POST["referensi"];
        $perawatan = $_POST["perawatan"];
        $penyakit = $_POST["penyakit"];
        $attribute = $_POST["attribute"];
        $sql = "UPDATE `plantdb` SET `id`='$id',`nama`='$nama',`gambar`='$gambar',`deskripsi`='$deskripsi',`umur`='$umur',`musim`='$musim',`suhu`='$suhu',`kelembapan`='$kelembapan',`tanah`='$tanah',`tinggi tanah min`='$tinggi_tanah_min',`tinggi tanah max`='$tinggi_tanah_max',`nutrisi`='$nutrisi',`pupuk`='$pupuk',`hama`='$hama',`penyakit`= '$penyakit',`metode`='$metode',`perawatan`='$perawatan',`referensi`='$referensi',`attribute`='$attribute' WHERE id = '$id'";
        if($conn -> query($sql) === true){
            $response["status"] = "success";
            $response["message"] = "berhasil update database dengan id = $id";
            echo json_encode($response);
        } else {
            $response["status"] = "error";
            $response["message"] = "gagal update database dengan id = $id";
            echo json_encode($response);
        }
    }

    if ($request === "readbyname"){
        $nama = $_POST["nama"];
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $sql = "SELECT * FROM plantdb WHERE nama = '$nama'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            $row = $result -> fetch_assoc();
            $response["status"] = "success";
            $response["message"] = "berhasil read database dengan nama = '$nama'";
            $response["id"] = $row["id"];
            $response["nama"] = $row["nama"]; 	
            $response["gambar"] =$row["gambar"]; 	
            $response["deskripsi"] = $row["deskripsi"];
            $response["umur"] = $row["umur"];
            $response["musim"] = $row["musim"];
            $response["suhu"] = $row["suhu"];	
            $response["tanah"] = $row["tanah"];
            $response["kelembapan"] = $row["kelembapan"];
            $response["tinggi tanah min"] = $row["tinggi tanah min"];
            $response["tinggi tanah max"] = $row["tinggi tanah max"];
            $response["nutrisi"] = $row["nutrisi"];
            $response["pupuk"] = $row["pupuk"];
            $response["hama"] = $row["hama"];
            $response["metode"] = $row["metode"];
            $response["referensi"] = $row["referensi"];
            $response["perawatan"] = $row["perawatan"];
            $response["penyakit"] = $row["penyakit"];
            $response["attribute"] = $row["attribute"];

            $sqlfav = "SELECT fav FROM accounts WHERE email = '$user' and password = '$pass'";
            $favresult = $conn->query($sqlfav);
            if ($favresult -> num_rows > 0) {
                $row = $favresult -> fetch_assoc();
                $fav = json_decode($row["fav"] ,true);
                $idint = (int)$response["id"];
                $check = array_search($idint, $fav);
                if ($check !== false){
                    $response["favcheck"] = "true";
                } 
                if ($check === false){ 
                    $response["favcheck"] = "false" ;
                } 
            } else {
                $response["favcheck"] = "false" ;
            }
        } else {
            $response["status"] = "gagal";
            $response["message"] = "id = $nama tidak tersedia di database";
            
        }
        echo json_encode($response);
    }
    if ($request === "readdblimit"){
        $limit = $_POST["rowloopstart"];
        $limitmaks = $limit + 30;
        $sql = "SELECT id FROM plantdb WHERE id <= $limitmaks AND id >= $limit LIMIT $limitmaks OFFSET 0";
        $result = $conn -> query($sql);

        if ($result -> num_rows > 0){
            $response["status"] = "success";
            while ($row = $result -> fetch_assoc()){
                $response["id"][] = $row["id"];
            }
        } else {
            $response["status"] = "failed";
        }
        echo json_encode($response);
    }
    if ($request === "searchdbname"){
        $nama = $_POST["query"];
        $sql = "SELECT * FROM plantdb WHERE nama = '$nama'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            $row = $result -> fetch_assoc();
            $response["status"] = "success";
            $response["message"] = "berhasil read database dengan nama = '$nama'";
            $response["id"] = $row["id"];
            $response["nama"] = $row["nama"]; 	
            $response["gambar"] =$row["gambar"]; 	
            $response["deskripsi"] = $row["deskripsi"];
            $response["umur"] = $row["umur"];
            $response["musim"] = $row["musim"];
            $response["suhu"] = $row["suhu"];	
            $response["tanah"] = $row["tanah"];
            $response["kelembapan"] = $row["kelembapan"];
            $response["tinggi tanah min"] = $row["tinggi tanah min"];
            $response["tinggi tanah max"] = $row["tinggi tanah max"];
            $response["nutrisi"] = $row["nutrisi"];
            $response["pupuk"] = $row["pupuk"];
            $response["hama"] = $row["hama"];
            $response["metode"] = $row["metode"];
            $response["referensi"] = $row["referensi"];
            $response["perawatan"] = $row["perawatan"];
            $response["penyakit"] = $row["penyakit"];
            $response["attribute"] = $row["attribute"];
        } else {
            $response["status"] = "failed";
        }
        echo json_encode($response);
    }
    if ($request === "readbyid"){
        $id = $_POST["id"];
        $sql = "SELECT * FROM plantdb WHERE id = '$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            $row = $result -> fetch_assoc();
            $response["status"] = "success";
            $response["message"] = "berhasil read database dengan id = '$id'";
            $response["id"] = $row["id"];
            $response["nama"] = $row["nama"]; 	
            $response["gambar"] =$row["gambar"]; 	
            $response["deskripsi"] = $row["deskripsi"];
            $response["umur"] = $row["umur"];
            $response["musim"] = $row["musim"];
            $response["suhu"] = $row["suhu"];	
            $response["tanah"] = $row["tanah"];
            $response["kelembapan"] = $row["kelembapan"];
            $response["tinggi tanah min"] = $row["tinggi tanah min"];
            $response["tinggi tanah max"] = $row["tinggi tanah max"];
            $response["nutrisi"] = $row["nutrisi"];
            $response["pupuk"] = $row["pupuk"];
            $response["hama"] = $row["hama"];
            $response["metode"] = $row["metode"];
            $response["referensi"] = $row["referensi"];
            $response["perawatan"] = $row["perawatan"];
            $response["penyakit"] = $row["penyakit"];
            $response["attribute"]= $row["attribute"];
            echo json_encode($response);

        } else {
            $response["status"] = "gagal";
            $response["message"] = "id = $id tidak tersedia di database";
            echo json_encode($response);

        }
    }

    if($request === "searchdb"){ //search
        $query = $_POST["query"];
        $sql = "SELECT nama, gambar FROM plantdb WHERE nama LIKE '%$query%'";
        $result = $conn -> query($sql);
        $data = array(); 
        if($result -> num_rows > 0){     
            $response["status"] = "success";      
            while ($row = $result -> fetch_assoc()){
                $response["nama"][] = $row["nama"] ; 
                $response["gambar"][] = $row["gambar"] ;
            };
            
        } else {
            $response["status"] = "gagal";
            $response["message"] = "Tidak ditemukan";
        }
        echo json_encode($response);
    }
    if ($request === "visited"){
        $sql = "SELECT SUM FROM visited WHERE ID = 'GUESS'";
        $result = $conn -> query($sql);
        if ( $result -> num_rows > 0){
            $row = $result -> fetch_assoc();
            $sum = $row["SUM"];
            $sumint = (int)$sum;
            $sumint += 1;
            $sql = "UPDATE `visited` SET `SUM` = '$sumint'";
            $conn -> query($sql);
            $response = "success '$sumint'";
        
        } else {
            $response = "gagal'$sumint'";
        }
        echo $response;
        }
        $conn -> close();
}

// nutrisi : {"langkah1":"copy", "langkah2": "paste"}
?>