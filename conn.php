<?php
$url_db = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "plantanalis";

$conn = new mysqli( $url_db, $username_db, $password_db, $dbname);
if ($conn -> connect_error){
    die("". $conn -> connect_error);
}
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $request = $_GET["request"];
    if($request === "recommend"){
        $response = $_GET["elevasi"];
        $sql = "SELECT nama, ketinggian min, ketinggian max, musim FROM plantdb WHERE ketinggian min < '$elevasi' and ketinggian max > '$elevasi'";
        $result = $conn -> query($sql);
        if($result -> num_rows > 0){ 
            echo json_encode($response) ; 
            
        } else{
             
        }
    }
    
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $request = $_POST["request"];
    if($request === "readfav"){                                        //read list fav tanaman
        $id = $_POST["id"];
        $sql = "SELECT * FROM plantdb WHERE id = '$id'";
        $result = $conn -> query($sql);
        if($result -> num_rows > 0){
          

        } else {
            $response["status"] = "gagal";
            $response["message"] = "Tidak ditemukan database";
            echo json_encode($response);
        }
        
    }
    if($request === "search"){ //search
        $query = $_GET["query"];
        $sql = "SELECT nama, gambar FROM plantdb WHERE nama LIKE  '$query'%";
        $result = $conn -> query($sql);
        $data = array(); 
        if($result -> num_rows > 0){           
            while ($row = $result -> fetch_assoc()){
                $data[] = $row ; 
            };
            
        } else {
            $response["status"] = "gagal";
            $response["message"] = "Tidak ditemukan";
        }
    }
    if($request == "update"){                                       //update
        $id = $_POST["id"];
        $sql = "UPDATE plantdb WHERE ";
    }
    if($request == "insert"){                                       // insert
        $id = $_POST["id"];
        $name = $_POST["name"];
        $deskripsi = $_POST["deskripsi"];
        $umur = $_POST["umur"];
        $musim = $_POST["musim"];
        $kelembapan = $_POST["kelembapan"];
        $tanah = $_POST["tanah"];
        $nutrisi = $_POST["nutrisi"];
        $pupuk = $_POST["pupuk"];
        $hama = $_POST["hama"];
        $langkah = $_POST["langkah"];
        $referensi = $_POST["referensi"];
        $sql = "INSERT INTO plantdb(name, gambar, deskripsi, umur, musim, kelembapan, tanah, nutrisi, pupuk, hama, langkah penanaman, referensi) VALUES ($name, $gambar, $deskripsi, $umur, $musim, $kelembapan, $tanah, $nutrisi, $pupuk, $hama, $langkah, $referensi)";
        $result = $conn -> query($sql);
    }
};


?>