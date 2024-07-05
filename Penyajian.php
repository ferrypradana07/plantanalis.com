<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tanaman</title>
    <link rel="icon" href="gambar/pngwing.com (1).png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>

body{
        height: auto;
        margin: 0%;
        width: 100vw;
        max-width: 100vw;
    }

    .login>a{
        position: absolute;
        padding-top: 1.11vw;
        font-size: 1.48vw;
        top: 1.48vw;
        right: 2.22vw;
        color: antiquewhite;
    }
    
    .login>a:hover {
        color:white;
    }
    .icon{
        width: 7.41%;
        height: auto;
        position: absolute;
        top: 0px;
        left: 0%;
        margin: 1.481%;
        z-index: 4;
    }
    .title{
        position: absolute;
        font-size: 2.93vw;
        margin-top: 3.9%;
        margin-left: 8.896%;
        color: wheat;
    }
    .title a{
        text-decoration: none;
        color: wheat;
        font-size: 2.93vw;
    }
    .header{
        width: 100%;
        height: 10.37vw;
        top: 0%;
        background: linear-gradient(to bottom, rgba(0, 128, 0,8),rgba(72, 110, 72,1));
        position: absolute;
        z-index: 2;
    }  
    .nav-search{
        display: flex;
        width: 100%;
        margin-top: 10.37vw;
        background-color: rgb(255, 255, 255);
        border-bottom: 0.14vw solid rgb(214, 207, 207);
        height: auto;
        box-shadow: 0.14vw 0.28vw 0.28vw rgba(0, 0, 0, 0.1);
        font-size: 1.4vw;
    }
    .back{
        background-color: rgba(255, 255, 255, 0.8);
        margin-top: 1.48vw;
        margin-bottom: 1.48vw;
        margin-left: 1.48vw;
        padding: 0.88vw;
        border: 0.07vw solid rgb(167, 160, 160);
        font-size: 1.48vw;
        text-align: center;
        float: left;
        align-self: flex-start;
        text-decoration: none;
    }
    .query{
        border: 0px;
        background-color: rgba(246, 245, 250, 0.5);
        border: 0.28vw solid rgb(161, 157, 157);
        width: 29.65vw;
        height: 3.33vw;
        margin: 1.48vw;
        font-size: 2.22vw;
        margin-left: 29.65vw;
        padding-left: 0.5vw;
    }
    .query:hover{
        border: 0px;
        background-color: rgba(246, 245, 250, 0.5);
        border: 0.28vw solid rgb(223, 213, 213);
        width: 29.65vw;
        height: 3.33vw;
        margin: 1.48vw;
        font-size: 2.22vw;
        margin-left: 29.65vw;
    }
    .button{
        background-color: rgba(3, 199, 134, 0.8);
        margin-top: 1.48vw;
        margin-bottom: 1.48vw;
        padding: 0.88vw;
        font-size: 1.48vw;
        text-align: center;
        transition: color;
    }
    .button:hover  {
        background-color: rgba(40, 139, 106, 0.8);
    }
    .button>a{
        text-decoration: none;
        color: black;
    }

    .header nav {
        margin-left: 33.35vw;
        display: flex;
        position: absolute;
        z-index: 2;
        height: 1.48vw;
        top: 5.96vw;
        right: 0%;
        width: fit-content;
        
    }
    .header nav>ul{
        margin-top: 0.431vw;
        padding: 2.23vw;
        padding-bottom: 0%;
        padding-top: 0.23vw;
        font-size: 1.4vw;
    }
    .header nav ul>a{
        color: antiquewhite;
        

    }
    .header nav ul>a:hover{
        color: white;
    }
    .content{
        font-size: 1.4vw;
        height: fit-content;
        margin: 1.48vw;
        background-color: #7ac98f; 
        box-shadow: 0.14vw 0.28vw 0.28vw rgba(0, 0, 0, 0.3);
    }
    
    .h-title{
        margin-top: 2vw;
        font-size: 2.48vw;
        padding-top: 2vw
    }
    .div-deskripsi {
        display: flex;
        background-color: rgba(255, 255, 255, 0.8);
    }
    .div-teks-deskripsi{
        border-radius: 40px;
        width: 55vw;
    }
    .head-deskripsi{
        display: flex;
    }
    .h-deskripsi {
        font-size: 2vw;
        box-sizing: border-box;
        height: fit-content;
        margin: 1.8vw;
        align-items: center;
        
    }
    .bookmark1 ,.bookmark2{
        margin-left: 40vw;
        width: 2vw;
        height: 2vw;
        align-self: center;
        float: right;
        cursor: pointer;
    }
    .p-deskripsi {
        width: auto;
    }
    .p-deskripsi::first-letter{
        font-size: 2vw;
    }
    .img-deskripsi {
        width: 30vw;
        height: 30vw;
        margin: 2vw;
        margin-left: 4vw;
        margin-top: 0%;
        float: right;
        padding: 2vw;
        border-radius: 2vw;
    }
    .content div>p{

        background-color: rgba(255, 255, 255, 0.8);
        padding: 1vw;
        margin :0;
        width: auto;


    }
    div>h3{
        margin-left: 1.8vw;
        font-size: 2vw;
    }

    .footer{
        background-color: rgb(39, 36, 36);
        
    }
    .footer>.gambar{
        justify-content: center;
        display: flex;
        
    }
    
    .footer .gambar a{
        background-color: rgb(255, 255, 255);
        padding: 1.48vw;
        border-radius: 100%;
        background-color: #d7eedd;
        align-items: center;
        display: flex;
        margin: 1.48vw;
        margin-top: 2.223vw;

    }
    .footer .gambar a>img{
        width: 1.85vw;
        height: 1.85vw;
    }


    .nav-scrol{
        right: 5%;
        bottom: 10%;
        position: fixed;
    }
    .nav-scrol>a>img{
        width: 3.71vw;
        height: 3.71vw;
        color: rgba(0, 0, 0,0.5);
        opacity: 0.5;
    }
    .nav-scrol>a>img:hover{
        opacity: 1;
        width: 3.71vw;
        height: 3.71vw;
        color: rgba(0, 0, 0,0.5);
    }
    .overlay{
        width: 100%;
        min-height: 100%;
        background-color: rgba(0, 0, 0, 0.2);
        backdrop-filter: blur(2px);
        position: fixed;
        align-items: center;
        justify-content: center;
        z-index: 59;
        top:0vw;
        display: none;

    }
    .alert1{
        top: 20vw;
        width:22.22vw;
        height: 11.11vw;
        position:absolute;
        border-radius: 1.11vw;
        background-color: rgb(255, 255, 255);
        z-index: 6;
        padding: 1.11vw;
        font-size: 1.11vw;
        font-family: Arial, Helvetica, sans-serif;
        box-shadow: 0px 10px 2.96vw rgb(0, 0, 0,0.3);
        display: none;
    }
    .alert1 div:nth-child(3){
        width: 4.44VW;
        height: 1.11VW;
        right: 0%;
        bottom: 0%;
        padding: 1.11VW;
        text-align: center;
        position: absolute;
        margin: 1.11VW;
        background-color: rgb(193, 216, 158);
        z-index: 6;
        font-size: 1.11VW;
        border-radius: 100px;
        border:  0.14vw solid gray;
        cursor: pointer;
    }
    .alert1 div:nth-child(2){
        width: 4.44VW;
        height: 1.11vw;
        right: 0%;
        bottom: 0%;
        padding: 1.11VW;
        text-align: center;
        position: absolute;
        margin: 1.11VW;
        margin-right: 10.37vw;
        background-color: rgb(255, 255, 255);
        z-index: 6;
        font-size: 1.11VW;
        border-radius: 100px;
        border: 0.14vw solid gray;
        cursor: pointer;
    }
    .alert1 div:nth-child(3):hover{
        width: 4.44VW;
        height: 1.11VW;
        right: 0%;
        bottom: 0%;
        padding: 1.11VW;
        text-align: center;
        position: absolute;
        margin: 1.11VW;
        background-color: rgb(193, 216, 158);
        z-index: 6;
        font-size: 1.11VW;
        border-radius: 100px;
        border:  0.14vw solid rgb(190, 189, 189);
        cursor: pointer;
    }
    .alert1 div:nth-child(2):hover{
        width: 4.44VW;
        height: 1.11VW;
        right: 0%;
        bottom: 0%;
        padding: 1.11VW;
        text-align: center;
        position: absolute;
        margin: 1.11VW;
        margin-right: 10.37vw;
        background-color: rgb(255, 255, 255);
        z-index: 6;
        font-size: 1.11VW;
        border-radius: 100px;
        border: 0.14vw solid  rgb(190, 189, 189);
        cursor: pointer;
    }    
    .copyright{
        font-size: 1.48vw;
    }
    .content>ul li , ol li, ul , ol{
        font-size: 1.4vw;
        padding: 0%;
        margin: 0%;
    }
    .content div>ol, .content div>ul{
        padding-left: 4vw;
        padding-top: 2vw;
        padding-bottom: 0%;
        margin-top: 0%; 
        font-size: 1.4vw;
        background-color: rgba(255, 255, 255, 0.8);
    }
    hr{
        padding: 0%;
        border: yellow;
    }
    .content div p{
        margin-top: 0vw;
        padding-top: 1vw;
        padding-bottom: 1vw;
        background-color: rgba(255, 255, 255, 0.8);
        text-align: justify;
        font-size: 1.4vw;
    }

    .content div{
        font-size:1vw;
    }
    .content div h3{
        font-size: 2vw;
        max-height: 1vw;
        padding-top: 0.5vw;
        padding-bottom: 0.1vw;
        margin-top: 0;
        justify-self: center;
    }
    p::first-letter{
        margin-left: 2vw;
    }
    .content>p{
        text-align: justify;
    }
    
    @media screen and (min-height : 95vw){
        .content{
            height: auto;
            min-height: calc(100vh - 30vw);
        }
    }
    
</style>
</head>
<body >
    <div class="overlay">
        <div class="alert1">
            <span>Apa anda yakin ingin keluar?</span>
            <div class="button-notif">Ya</div>
            <div class="button-notif">Tidak</div>
        </div>
    </div>
    <a href="home"><img class="icon" src="gambar/pngwing.com (1).png" alt=""></a>
    <div class="header">
        <div class="title"><a href="home">Plantanalis</a></div>
        <div class="login"><a class="loged"  href="Login" style="text-decoration: none;">Login</a></div>
        <div class="login"><a class="logout" type="submit" style="text-decoration: none;cursor: 
        pointer;">Logout</a></div>
        <nav>
            <ul><a href="favorit" style="text-decoration: none; display :flex;font-size:1.4vw" class="log">Tanaman Favorit</a></ul>
            <ul><a href="kalkulasi"  style="text-decoration: none; display :flex;font-size:1.4vw">Kalkulasi & Prediksi</a></ul>
            <ul><a href="list_tanaman"  style="text-decoration: none; display :flex;font-size:1.4vw">List Tanaman</a></ul>
            <ul><a href="rekomendasi"  style="text-decoration: none; display :flex ;font-size:1.4vw">Rekomendasi</a></ul>
        </nav>
    </div>
        <div class="nav-search">
            <a href="home" class="back">Kembali</a>
            <input class="query" type="text" >
            <div class="button"><a>Search</a></div>
        </div>
    
    <div class="content" >
        <h3 class="h-title" style="text-align: center;">(<i>Solanum  Lycopersicum</i>)</h3>
        <div class="div-deskripsi">
            <div class="div-teks-deskripsi" ><hr>
                <div class="head-deskripsi">
                    <h3 class="h-deskripsi">Deskripsi</h3>
                    <img class="bookmark1" src="icon/bookmark-star-fill.svg" style="display: none;" alt="" onclick="removefav()">
                    <img class="bookmark2" src="icon/bookmark-star (1).svg" alt=""  onclick="addfav()"   ><br>
                </div>
                <p class="p-deskripsi" style="background-color:rgba(1,1,1,0);font-size:1.4vw">
                </p><hr>
            </div>
            <img class="img-deskripsi" style="width: 30vw;height: 30vw;" src="gambar/bg.jpg" alt="" >
        </div>
        <div class="div-umur">
            <h3>Umur Tanaman</h3>
            <p id="deskripsi-umur">
            
            </p>
        </div>
        <div class="div-musim">
            <h3>Musim Penanaman</h3>
            <p id="deskripsi-musim" >
            
            </p>
            <ul id="listmusim" style="margin-top: 0%; background-color: rgba(255, 255, 255, 0.8);list-style-type:square; ">
                
            </ul>  
        </div>
        <div class="div-suhu">
            <h3>Suhu Optimal</h3>
            <p id="deskripsi-suhu">

            </p>
            <ul id="listsuhu" style="margin-top: 0%; background-color: rgba(255, 255, 255, 0.8);list-style-type:square; ">
                
            </ul>  
        </div>
        <div class="div-kelembapan">
            <h3>Kelembapan</h3>
            <p id="deskripsi-kelembapan">

            </p>
            <ul id="listkelembapan" style="margin-top: 0%; background-color: rgba(255, 255, 255, 0.8);list-style-type:square; ">
                
            </ul>  
        </div>
        <div class="div-kualitas">
            <h3 style="font-size :2vw" >Kualitas Tanah</h3>
            <p id="deskripsi-tanah">
            </p>
            <ul id="listtanah" style="margin-top: 0%; background-color: rgba(255, 255, 255, 0.8);list-style-type:square; ">
                
            </ul>   
        </div>
        <div class="div-nutrisi">
            <h3>Nutrisi</h3>
            <p id="p-nutrisi"></p>
            <ol id="listnutrisi">

            </ol>            
        </div>
        <div class="div-pupuk">
            <h3>Pupuk</h3>
            <p id="p-pupuk">

            </p>
            <ul id="listpupuk" style="margin-top: 0%; background-color: rgba(255, 255, 255, 0.8); ">

            </ul>
        </div>
        <div class="div-hama">
            <h3>Hama Tanaman</h3>
            <p id="p-hama"></p>
            <ul id="listhama"></ul>
            
        </div>
        <div class="div-penyakit">
            <h3>Penyakit Tanaman</h3>
            <p id="p-penyakit"></p>
            <ul id="listpenyakit"></ul>
        </div>
        <div class="div-metode">
            <h3>Metode Penanaman</h3>
            <p id="p-metode" style="margin-top: 0%"></p>
            <ol id="listmetode" style="margin-top: 0%; background-color: rgba(255, 255, 255, 0.8);margin-bottom: 0%; " >

            </ol>
        </div>
        <div class="div-perawatan">
            <h3>Perawatan</h3>
            <p id="p-perawatan"></p>
            <ul id="listperawatan"></ul>
        </div>
        <div class="div-referensi">
            <h3>Referensi</h3>
            <p id="p-referensi">

            </p>
            <ul id="listreferensi" style="margin-top: 0%; background-color: rgba(255, 255, 255, 0.8);">

            </ul>
        </div>
    </div>

    <div class="footer">
        <div class="gambar">
                <a href="" ><img src="gambar/instagram.svg" alt=""></a>
                <a href=""><img src="gambar/twitter-x.svg" alt=""></a>
                <a href=""><img src="gambar/facebook.svg" alt=""></a>
            </div> <br> 
        <div class="copyright" style="color: aliceblue;text-align: center;padding-bottom:2vw">
          Copyright © 2023
        </div>
    </div>
    <div class="nav-scrol">
        <a href=""><img src="icon/arrow-up-circle-fill.svg" alt=""></a>
    </div>
    <div id="like" >

    </div>
</body>
</html>

<script>
    let login = localStorage.getItem("login");
    let logout = document.getElementsByClassName("logout")[0];
    let masuk = document.getElementsByClassName("loged")[0];
    let fav = document.getElementsByClassName("log")[0];
    let query = document.getElementsByClassName("query")[0];
    let button = document.getElementsByClassName("button")[0];
    let overlay = document.getElementsByClassName("overlay")[0];
    let alert1 = document.getElementsByClassName("alert1")[0]; 
    let buttontidak = document.getElementsByClassName("button-notif")[1];
    let buttonya = document.getElementsByClassName("button-notif")[0];
    
    //innerHTML
    const divumur = document.getElementsByClassName("div-umur")[0]
    const divmusim = document.getElementsByClassName("div-musim")[0]
    const divkelembapan = document.getElementsByClassName("div-kelembapan")[0]
    const divsuhu = document.getElementsByClassName("div-suhu")[0]
    const divtanah = document.getElementsByClassName("div-kualitas")[0]
    const divnutrisi = document.getElementsByClassName("div-nutrisi")[0]  
    const divpupuk = document.getElementsByClassName("div-pupuk")[0]   
    const divmetode = document.getElementsByClassName("div-metode")[0]
    const divreferensi = document.getElementsByClassName("div-referensi")[0]
    const divpenyakit = document.getElementsByClassName("div-penyakit")[0]
    const divhama = document.getElementsByClassName("div-hama")[0]
    const divperawatan = document.getElementsByClassName("div-perawatan")[0]

    
    let htitle = document.getElementsByClassName("h-title")[0];
    let pdeskripsi = document.getElementsByClassName("p-deskripsi")[0];
    let imgdeskripsi = document.getElementsByClassName("img-deskripsi")[0];
    let pumur = document.getElementById("deskripsi-umur");
    let pmusim =  document.getElementById("deskripsi-musim");
    let psuhu =  document.getElementById("deskripsi-suhu");
    let pkelembapan =  document.getElementById("deskripsi-kelembapan");
    let ptanah = document.getElementById("deskripsi-tanah");
    const listtanah = document.getElementById("listtanah");
    let pnutrisi = document.getElementById("p-nutrisi");
    const listnutrisi = document.getElementById("listnutrisi");
    let ppupuk = document.getElementById("p-pupuk");
    const listpupuk = document.getElementById("listpupuk");
    let pmetode = document.getElementById("p-metode");
    const listmetode = document.getElementById("listmetode");
    let phama = document.getElementById("p-hama")
    const listhama = document.getElementById("listhama")
    let pperawatan = document.getElementById("p-perawatan")
    const listperawatan = document.getElementById("listperawatan")
    let ppenyakit = document.getElementById("ppenyakit")
    const listpenyakit = document.getElementById("listpenyakit")
    let preferensi = document.getElementById("p-referensi");
    const listreferensi = document.getElementById("listreferensi");
    const bookmark1 = document.getElementsByClassName("bookmark1")[0];
    const bookmark2 = document.getElementsByClassName("bookmark2")[0];
    let id = "";
    let accounts = localStorage.getItem("accounts")
    function addfav(){
        const request = "addfav"
        console.log(id)
        let pass = ""
        let user = ""
        const parseaccounts = JSON.parse(accounts)
        if (parseaccounts){
            user = parseaccounts["user"]
            pass = parseaccounts["pass"]
        } else {
            user = ""
            pass = ""
        }
        console.log(user)
        console.log(id)
        $.ajax({
            url : "connection.php",
            type : "POST",
            data : {
                request : request,
                id : id,
                user : user,
                pass : pass
            }, success : function(response){
                console.log(response)
                const hasil = JSON.parse(response)
                if (hasil["status"] === "true"){
                    bookmark1.style.display = "flex";
                    bookmark2.style.display = "none";
                } else {
                    bookmark1.style.display = "none";
                    bookmark2.style.display = "flex";
                }
            }
        })
    }
    
    function removefav(){
        const request = "removefav"
        let pass = ""
        let user = ""
        const parseaccounts = JSON.parse(accounts)
        if (parseaccounts){
            user = parseaccounts["user"]
            pass = parseaccounts["pass"]
        } else {
            user = ""
            pass = ""
        }
        console.log(user)
        console.log(id)
        $.ajax({
            url : "connection.php",
            type : "POST",
            data : {
                request : request,
                id : id,
                user : user,
                pass : pass
            }, success : function(response){
                const hasil = JSON.parse(response)
                console.log(response)
                if (hasil["status"] === "true"){
                    bookmark1.style.display = "none";
                    bookmark2.style.display = "flex";
                } else {
                    bookmark1.style.display = "flex";
                    bookmark2.style.display = "none";
                }
            }
        })
    }
    function check(){
    if (login === "true") {
        logout.style.display = "flex";
        masuk.style.display = "none";
        fav.style.display = "flex";
    } 
    else {
        logout.style.display = "none";
        masuk.style.display = "flex";
        fav.style.display = "none";
    }}
logout.addEventListener("click",function(){
    overlay.style.display = "flex";
    alert1.style.display = "flex";
    buttontidak.addEventListener("click", function(){
        overlay.style.display = "none";
        alert1.style.display = "none";
    })
    buttonya.addEventListener("click",function(){
        
        overlay.style.display = "none";
        alert1.style.display = "none";
        localStorage.setItem("login","false");
        localStorage.removeItem('accounts');
        login = localStorage.getItem("login");
        check();
    })
})
    button.addEventListener("click", function(){    
        let query = document.getElementsByClassName("query")[0].value;


        fetch(url)
        .then(response => response.json())
        .then(data => {
            // Mendapatkan data koordinat dari hasil pencarian
            if (data && data.length > 0) {
            const latitude = data[0].lat;
            const longitude = data[0].lon;
            console.log(`Koordinat ${cityName}: Latitude ${latitude}, Longitude ${longitude}`);
            } else {
            console.log(`Kota ${cityName} tidak ditemukan`);
            }
        })
        .catch(error => {
            console.error('Terjadi kesalahan:', error);
  });
});
function searchparam(){
    const searchparam = new URLSearchParams(window.location.search);
    const name = searchparam.get('name');
    const request = "readbyname";
    let pass = ""
    let user = ""
    const parseaccounts = JSON.parse(accounts)
    if (parseaccounts){
        user = parseaccounts["user"]
        pass = parseaccounts["pass"]
    } else {
        user = ""
        pass = ""
    }
    console.log("search " + name + pass);
    $.ajax({
        url : "connection.php",
        type : "POST",
        data : {
            request : request,
            nama : name,
            user : user,                
            pass : pass
        }, 
        success : function(response){
            console.log(response)
            let hasil = JSON.parse(response);
            if (hasil.status = "success"){            
                id = hasil["id"];     
                htitle.innerHTML = hasil["nama"];
                if (hasil["favcheck"] === "false"){
                    bookmark1.style.display = "none";
                    bookmark2.style.display = "flex";
                } 
                if (hasil["favcheck"] === "true"){
                    bookmark1.style.display = "flex"; //sudah tersedia di fav atau telah tertambahkan di list fav
                    bookmark2.style.display = "none";
                } else {
                    bookmark1.style.display = "none";
                    bookmark2.style.display = "flex";
                }
                pdeskripsi.innerHTML = ` ${hasil["deskripsi"]}`;
                imgdeskripsi.src = hasil["gambar"];

                if  (jsoncheck(hasil["umur"]) === "Bukan json"){
                    console.log("umur=============")
                    if (checkvalue(hasil["umur"]) ==="ada value"){
                        pumur.innerHTML = hasil["umur"]
                    } else {
                        divumur.style.display = "none"
                    }
                } if (jsoncheck(hasil["umur"]) === "json"){
                    console.log("umur===============")
                    const liumur = JSON.parse(hasil["umur"])
                    pumur.innerHTML =  ` ${liumur["deskripsi"]}`
                    for (const key in liumur["umur"]){
                        listumur.innerHTML += `<li><b>${key}</b></li>
                        &nbsp&nbsp&nbsp&nbsp${liumur["umur"][key]}<br><br>`
                    } if (checkvalue(liumur["deskripsi2"]) === "ada value"){
                        divumur.innerHTML +=  `<p> ${liumur["deskripsi2"]}<p/>`
                    } if (checkvalue(liumur["deskripsi2"]) === "tidak ada") {
                    
                    } 
                }


                if  (jsoncheck(hasil["musim"]) === "Bukan json"){
                    console.log("musim=============")
                    if (checkvalue(hasil["musim"]) ==="ada value"){
                        pmusim.innerHTML = hasil["musim"]
                    } else {
                        divmusim.style.display = "none"
                    }
                } if (jsoncheck(hasil["musim"]) === "json"){
                    console.log("musim===============")
                    const limusim = JSON.parse(hasil["musim"])
                    pmusim.innerHTML =  ` ${limusim["deskripsi"]}`
                    for (const key in limusim["musim"]){
                        listmusim.innerHTML += `<li><b>${key}</b></li>
                        &nbsp&nbsp&nbsp&nbsp${limusim["musim"][key]}<br><br>`
                    } if (checkvalue(limusim["deskripsi2"]) === "ada value"){
                        divmusim.innerHTML +=  `<p> ${limusim["deskripsi2"]}<p/>`
                    } if (checkvalue(limusim["deskripsi2"]) === "tidak ada") {
                    
                    } 
                }

                if  (jsoncheck(hasil["suhu"]) === "Bukan json"){
                    console.log("suhu============0=")
                    if (checkvalue(hasil["suhu"]) ==="ada value"){
                        console.log("suhu============1=")
                        psuhu.innerHTML = hasil["suhu"]
                    } else {
                        divsuhu.style.display = "none"
                    }
                } if (jsoncheck(hasil["suhu"]) === "json"){
                    console.log("suhu===============")
                    const lisuhu = JSON.parse(hasil["suhu"])
                    psuhu.innerHTML =  ` ${lisuhu["deskripsi"]}`
                    for (const key in lisuhu["suhu"]){
                        listsuhu.innerHTML += `<li><b>${key}</b></li>
                        &nbsp&nbsp&nbsp&nbsp${lisuhu["suhu"][key]}<br><br>`
                    } if (checkvalue(lisuhu["deskripsi2"]) === "ada value"){
                        divsuhu.innerHTML +=  `<p> ${lisuhu["deskripsi2"]}<p/>`
                    } if (checkvalue(lisuhu["deskripsi2"]) === "tidak ada") {
                    
                    } 
                }

                if  (jsoncheck(hasil["kelembapan"]) === "Bukan json"){
                    console.log("kelembapan=============")
                    if (checkvalue(hasil["kelembapan"]) ==="ada value"){
                        pkelembapan.innerHTML = hasil["kelembapan"]
                    } else {
                        divkelembapan.style.display = "none"
                    }
                } if (jsoncheck(hasil["kelembapan"]) === "json"){
                    console.log("kelembapan===============")
                    const likelembapan = JSON.parse(hasil["kelembapan"])
                    pkelembapan.innerHTML =  ` ${likelembapan["deskripsi"]}`
                    for (const key in likelembapan["kelembapan"]){
                        listkelembapan.innerHTML += `<li><b>${key}</b></li>
                        &nbsp&nbsp&nbsp&nbsp${likelembapan["kelembapan"][key]}<br><br>`
                    } if (checkvalue(likelembapan["deskripsi2"]) === "ada value"){
                        divkelembapan.innerHTML +=  `<p> ${likelembapan["deskripsi2"]}<p/>`
                    } if (checkvalue(likelembapan["deskripsi2"]) === "tidak ada") {
                    
                    } 
                }

                if  (jsoncheck(hasil["tanah"]) === "Bukan json"){
                    console.log("tanah=============")
                    if (checkvalue(hasil["tanah"]) ==="ada value"){
                        ptanah.innerHTML = hasil["tanah"]
                    } else {
                        divtanah.style.display = "none"
                    }
                } if (jsoncheck(hasil["tanah"]) === "json"){
                    console.log("tanah===============")
                    const litanah = JSON.parse(hasil["tanah"])
                    ptanah.innerHTML =  ` ${litanah["deskripsi"]}`
                    for (const key in litanah["tanah"]){
                        listtanah.innerHTML += `<li><b>${key}</b></li>
                        &nbsp&nbsp&nbsp&nbsp${litanah["tanah"][key]}<br><br>`
                    } if (checkvalue(litanah["deskripsi2"]) === "ada value"){
                        divtanah.innerHTML +=  `<p> ${litanah["deskripsi2"]}<p/>`
                    } if (checkvalue(litanah["deskripsi2"]) === "tidak ada") {
                    
                    } 
                }

                if  (jsoncheck(hasil["pupuk"]) === "Bukan json"){
                    console.log("pupuk=============")
                    if (checkvalue(hasil["pupuk"]) ==="ada value"){
                        ppupuk.innerHTML = hasil["pupuk"]
                    } else {
                        divpupuk.style.display = "none"
                    }
                } if (jsoncheck(hasil["pupuk"]) === "json"){
                    console.log("pupuk===============")
                    const lipupuk = JSON.parse(hasil["pupuk"])
                    ppupuk.innerHTML =  ` ${lipupuk["deskripsi"]}`
                    for (const key in lipupuk["pupuk"]){
                        listpupuk.innerHTML += `<li><b>${key}</b></li>
                        &nbsp&nbsp&nbsp&nbsp${lipupuk["pupuk"][key]}<br><br>`
                    } if (checkvalue(lipupuk["deskripsi2"]) === "ada value"){
                        divpupuk.innerHTML +=  `<p> ${lipupuk["deskripsi2"]}<p/>`
                    } if (checkvalue(lipupuk["deskripsi2"]) === "tidak ada") {
                    
                    } 
                }

                if  (jsoncheck(hasil["hama"]) === "Bukan json"){
                    console.log("hama=============")
                    if (checkvalue(hasil["hama"]) ==="ada value"){
                        phama.innerHTML = hasil["hama"]
                    } else {
                        divhama.style.display = "none"
                    }
                } if (jsoncheck(hasil["hama"]) === "json"){
                    console.log("hama===============")
                    const lihama = JSON.parse(hasil["hama"])
                    phama.innerHTML =  ` ${lihama["deskripsi"]}`
                    for (const key in lihama["hama"]){
                        listhama.innerHTML += `<li><b>${key}</b></li>
                        &nbsp&nbsp&nbsp&nbsp${lihama["hama"][key]}<br><br>`
                    } if (checkvalue(lihama["deskripsi2"]) === "ada value"){
                        divhama.innerHTML +=  `<p> ${lihama["deskripsi2"]}<p/>`
                    } if (checkvalue(lihama["deskripsi2"]) === "tidak ada") {
                    
                    } 
                }
 
                if  (jsoncheck(hasil["penyakit"]) === "Bukan json"){
                    console.log("penyakit=============")
                    if (checkvalue(hasil["penyakit"]) ==="ada value"){
                        ppenyakit.innerHTML = hasil["penyakit"]
                    } else {
                        divpenyakit.style.display = "none"
                    }
                } if (jsoncheck(hasil["penyakit"]) === "json"){
                    console.log("penyakit===============")
                    const lipenyakit = JSON.parse(hasil["penyakit"])
                    ppenyakit.innerHTML =  ` ${lipenyakit["deskripsi"]}`
                    for (const key in lipenyakit["penyakit"]){
                        listpenyakit.innerHTML += `<li><b>${key}</b></li>
                        &nbsp&nbsp&nbsp&nbsp${lipenyakit["penyakit"][key]}<br><br>`
                    } if (checkvalue(lipenyakit["deskripsi2"]) === "ada value"){
                        divpenyakit.innerHTML +=  `<p> ${lipenyakit["deskripsi2"]}<p/>`
                    } if (checkvalue(lipenyakit["deskripsi2"]) === "tidak ada") {
                    
                    } 
                }
                //==============================
                if  (jsoncheck(hasil["nutrisi"]) === "Bukan json"){
                    if (checkvalue(hasil["nutrisi"]) ==="ada value"){
                    pnutrisi.innerHTML = hasil["nutrisi"]
                    } else {
                        divnutrisi.style.display = "none"
                }
                } if (jsoncheck(hasil["nutrisi"]) === "json"){
                    const linutrisi = JSON.parse(hasil["nutrisi"])
                    pnutrisi.innerHTML =  ` ${linutrisi["deskripsi"]}`
                    for (const key in linutrisi["nutrisi"]){
                        listnutrisi.innerHTML += `<li><b>${key}</b></li>
                        &nbsp&nbsp&nbsp&nbsp${linutrisi["nutrisi"][key]}<br><br>`
                    } if (checkvalue(linutrisi["deskripsi2"]) === "ada value"){
                        divnutrisi.innerHTML +=  `<p> ${linutrisi["deskripsi2"]}<p/>`
                    } if (checkvalue(linutrisi["deskripsi2"]) === "tidak ada") {
                        
                    } 
                }

                //=========== METODE =========
                if  (jsoncheck(hasil["metode"]) === "Bukan json"){
                    console.log("metode=============")
                    if (checkvalue(hasil["metode"]) ==="ada value"){
                        pmetode.innerHTML = hasil["metode"]
                    } else {
                        divmetode.style.display = "none"
                    }
                } if (jsoncheck(hasil["metode"]) === "json"){
                    console.log("metode===============")
                    const limetode = JSON.parse(hasil["metode"])
                    pmetode.innerHTML =  ` ${limetode["deskripsi"]}`
                    for (const key in limetode["langkah"]){
                        listmetode.innerHTML += `<li><b>${key}</b></li>
                        &nbsp&nbsp&nbsp&nbsp${limetode["langkah"][key]}<br><br>`
                    } if (checkvalue(limetode["deskripsi"]) === "ada value"){
                        divmetode.innerHTML +=  `<p> ${limetode["deskripsi2"]}<p/>`
                    } if (checkvalue(limetode["deskripsi2"]) === "tidak ada") {
                        return
                    } 
                }

                if  (jsoncheck(hasil["perawatan"]) === "Bukan json"){
                    console.log("perawatan=============")
                    if (checkvalue(hasil["perawatan"]) ==="ada value"){
                        pperawatan.innerHTML = hasil["perawatan"]
                    } else {
                        divperawatan.style.display = "none"
                    }
                } if (jsoncheck(hasil["perawatan"]) === "json"){
                    console.log("perawatan===============")
                    const liperawatan = JSON.parse(hasil["perawatan"])
                    pperawatan.innerHTML =  ` ${liperawatan["deskripsi"]}`
                    for (const key in liperawatan["perawatan"]){
                        listperawatan.innerHTML += `<li><b>${key}</b></li>
                        &nbsp&nbsp&nbsp&nbsp${liperawatan["perawatan"][key]}<br><br>`
                    } if (checkvalue(liperawatan["deskripsi2"]) === "ada value"){
                        divperawatan.innerHTML +=  `<p> ${liperawatan["deskripsi2"]}<p/>`
                    } if (checkvalue(liperawatan["deskripsi2"]) === "tidak ada") {
                    
                    } 
                }
                //=========== METODE =========
                if (jsoncheck(hasil["referensi"]) === "Bukan json") {
                    if (checkvalue(hasil["perawatan"]) ==="ada value"){
                        listreferensi.innerHTML = hasil["referensi"]
                    }
                    else {
                        divreferensi.style.display = "none" 
                    }
                } if (jsoncheck(hasil["referensi"]) === "json") {
                    const lireferensia = JSON.parse(hasil["referensi"])
                    const lireferensi = hasil["referensi"]
                    listreferensi.innerHTML = hasil["referensi"]
                    for (let index = 0; index < lireferensia.length; index++) {
                        listreferensi.innerHTML += `<li> <i>${lireferensia[index]}</i> </li><br>`    
                    }
                   
                } 
                
            } else {
                
            }


        }
    })
    return name ;

};

searchparam();
check();
function jsoncheck(json){
    try {
        let jsoncheckstatus = JSON.parse(json) 
        if(jsoncheckstatus === undefined) return "Bukan json";
        console.log(json)
    
        if (jsoncheckstatus) return "json" ;
        console.log("berhasil")
    } catch (error){
        console.log("bukan json" + error)
        return "Bukan json"
    }
}
function checkvalue(value){
    try {
        if(value.length > 0) return "ada value";
        if(value === undefined) return "tidak ada";
    } catch (error){
        console.log(error)
        return "tidak ada"
    }
}
console.log(window.location.href)
</script>
