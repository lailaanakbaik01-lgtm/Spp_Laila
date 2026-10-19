<html lang="id">
<head><link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap" rel="stylesheet">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login SPP</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Cherry Bomb One', cursive;
}

body{
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    overflow:hidden;

    background-image:url("img/cuking.JFIF");
    background-size:cover;
    background-position:center;
}

/* ===== STROBERRY ===== */

.strawberry{
    position:absolute;
    width:90px;
    animation:float 4s ease-in-out infinite;
    z-index:1;
    pointer-events:none;
}

.s1{
    top:3%;
    left:5%;
}

.s2{
    top:12%;
    right:6%;
    animation-delay:1s;
}

.s3{
    bottom:10%;
    left:8%;
    animation-delay:2s;
}

.s4{
    bottom:12%;
    right:10%;
    animation-delay:3s;
}

.s5{
    top:45%;
    left:3%;
    width:70px;
    animation-delay:1.5s;
}

.s6{
    top:55%;
    right:3%;
    width:70px;
    animation-delay:2.5s;
}

.s7{
    top:28%;
    left:82%;
    width:80px;
    animation-delay:4s;
}

.s8{
    top:72%;
    left:42%;
    width:65px;
    animation-delay:3s;
}

@keyframes float{

0%,100%{
transform:translateY(0px) rotate(-8deg);
}

50%{
transform:translateY(-25px) rotate(8deg);
}

}

/* ===== LOGIN ===== */

.login{
    

position:relative;

z-index:10;

width:370px;

padding:35px;

background:rgba(255,255,255,.93);

border-radius:30px;

box-shadow:0 15px 40px rgba(0,0,0,.25);

text-align:center;

}

.login img{

width:90px;
margin-bottom:10px;

}

.login h1{

color:#d62828;
margin-bottom:5px;

}

.login p{

color:#666;
margin-bottom:25px;

}

input{

width:100%;
padding:15px;

margin:10px 0;

border:none;

border-radius:15px;

background:#fff3f3;

font-size:15px;

}

input:focus{

outline:none;

border:2px solid #ff6b81;

background:white;

}

button{

width:100%;

padding:15px;

margin-top:15px;

background:#d62828;

color:white;

border:none;

border-radius:15px;

font-size:16px;

font-weight:bold;

cursor:pointer;

transition:.3s;

}

button:hover{

background:#b71c1c;

transform:scale(1.03);

}

.alert{

background:#ffdada;

padding:12px;

border-radius:10px;

color:red;

margin-bottom:15px;

}

.footer{
 margin-top:20px;
    font-family:'Fredoka', sans-serif;
    font-size:16px;
    font-weight:600;
    color:#d62828;
    letter-spacing:1px;

}

</style>

</head>

<body>

<!-- Strawberry Mengambang -->

<img src="img/six sepen.png" class="strawberry s1">
<img src="img/bando.png" class="strawberry s2">
<img src="img/jual struberi.png" class="strawberry s3">
<img src="img/santai.png" class="strawberry s4">
<img src="img/jenius.png" class="strawberry s5">
<img src="img/mantap.png" class="strawberry s6">
<img src="img/duit.png" class="strawberry s7">
<img src="img/isnak.png" class="strawberry s8">

<div class="login">

<img src="img/profile.png">

<h1>SPP ONLINE</h1>

<p>🍓 Selamat Datang 🍓</p>

<?php

if(isset($_GET['pesan'])){

if($_GET['pesan']=="gagal"){

echo "<div class='alert'>
Username atau Password Salah!
</div>";

}

}

?>

<form action="login_validasi.php" method="POST">

<input
type="text"
name="username"
placeholder="👤 Username"
required>

<input
type="password"
name="password"
placeholder="🔒 Password"
required>

<button type="submit">

🍓 LOGIN

</button>

</form>
<tr>
    <td></td>
    <td></td>
</tr>

<tr>
    <td colspan="2" align="center">
        <a href="bayar.php">CEK PEMBAYARAN</a>
    </td>
</tr>
<div class="footer">

Selamat Mengisi!!

</div>

</div>

</body>
</html>