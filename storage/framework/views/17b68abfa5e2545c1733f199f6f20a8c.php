<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#222;
    font-family:Arial;
}

.phone{
    width:390px;
    height:844px;
    background:#ffe600;
    margin:20px auto;
    border:12px solid black;
    border-radius:40px;
    overflow-y:auto;
    overflow-x:hidden;
}

.header{
    background:orange;
    border-bottom-left-radius:120px;
    border-bottom-right-radius:120px;
    padding:20px;
    text-align:center;
}

.logo{
    width:80px;
}

.search{
    border-radius:30px;
    margin-top:20px;
    height:50px;
}

.top-btn{
    background:#d50000;
    color:#ffe600;
    border:none;
    padding:10px 20px;
    border-radius:20px;
    font-weight:bold;
}

.food-card{
    background:#d50000;
    border-radius:30px;
    padding:15px;
    margin-top:20px;
    color:#ffe600;
    display:flex;
    gap:15px;
    position:relative;
}

.food-img{
    width:120px;
    border-radius:20px;
}

.cart{
    position:absolute;
    right:20px;
    bottom:20px;
    font-size:30px;
    text-decoration:none;
}

.bottom-nav{
    background:orange;
    padding:10px;
    margin-top:30px;
    display:flex;
    justify-content:space-around;
}

.nav-btn{
    background:#d50000;
    width:50px;
    height:50px;
    border-radius:50%;
    text-align:center;
    line-height:50px;
    text-decoration:none;
    font-size:24px;
}

</style>

</head>
<body>

<div class="phone">

<div class="header">

<img src="<?php echo e(asset('images/logo.png')); ?>" class="logo">

<h2>
Welcome,<br>
<span id="namaUser"></span>
</h2>

</div>

<div class="container">

<input 
type="text" 
class="form-control search" 
placeholder="Search"
id="searchInput"
onkeyup="cariMenu(event)"
>

<div class="d-flex justify-content-between mt-3">

<span class="top-btn">FOOD MENU</span>

<a href="/profile" class="top-btn text-decoration-none">
PROFILE
</a>

<a href="/login" class="top-btn text-decoration-none">
LOGOUT
</a>

</div>

<div class="food-card" id="ayamCard">

<img src="<?php echo e(asset('images/ayam.png')); ?>" class="food-img">

<div>
<h4>AYAM GORENG</h4>

LEVEL ORI<br>
LEVEL 1<br>
LEVEL 2<br>
LEVEL 3
</div>

<a href="/detailayam" class="cart">🛒</a>

</div>

<div class="food-card" id="mieCard">

<img src="<?php echo e(asset('images/mie.png')); ?>" class="food-img">

<div>
<h4>MIE GORENG</h4>

LEVEL ORI<br>
LEVEL 1<br>
LEVEL 2<br>
LEVEL 3
</div>

<a href="/detailmie" class="cart">🛒</a>

</div>

<div class="food-card" id="nasiCard">

<img src="<?php echo e(asset('images/nasgor.png')); ?>" class="food-img">

<div>
<h4>NASI GORENG</h4>

LEVEL ORI<br>
LEVEL 1<br>
LEVEL 2<br>
LEVEL 3
</div>

<a href="/detailnasi" class="cart">🛒</a>

</div>

<div class="bottom-nav">

<a href="/menu" class="nav-btn">🏠</a>

<div class="nav-btn">❤</div>

<div class="nav-btn">🛒</div>

<div class="nav-btn">🔔</div>

</div>

</div>

</div>

<script>

let nama = localStorage.getItem("namaUser");

document.getElementById("namaUser").innerHTML = nama;

function cariMenu(event){

    if(event.key === "Enter"){

        let keyword = document.getElementById("searchInput")
        .value
        .toLowerCase();

        let ayam = document.getElementById("ayamCard");
        let mie = document.getElementById("mieCard");
        let nasi = document.getElementById("nasiCard");

        ayam.style.display = "none";
        mie.style.display = "none";
        nasi.style.display = "none";

        if(keyword == ""){
            ayam.style.display = "flex";
            mie.style.display = "flex";
            nasi.style.display = "flex";
        }

        else if(keyword.includes("ayam")){
            ayam.style.display = "flex";
        }

        else if(keyword.includes("mie")){
            mie.style.display = "flex";
        }

        else if(keyword.includes("nasi")){
            nasi.style.display = "flex";
        }

        else{
            alert("Menu tidak ditemukan");
        }

    }

}

</script>

</body>
</html><?php /**PATH C:\xampp\htdocs\hotbite\resources\views/hotbite/menu.blade.php ENDPATH**/ ?>