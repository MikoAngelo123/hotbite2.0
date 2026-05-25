<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
    background:#ffe600;
    font-family:Arial;
    margin:0;
    padding:0;
}


        .phone{
     width:100%;
    min-height:100vh;
    background:#ffe600;

    
}

.content{
    padding:20px;
    text-align:center;
    max-width:1200px;
    margin:auto;
}

        .logo{
    width:120px;
    margin-top:40px;
    display:block;
    margin-left:auto;
    margin-right:auto;
}

        .title{
    font-weight:bold;
    margin-top:20px;
    text-align:center;
}

        .red-box{
            background:#d50000;
            margin-top:30px;
            min-height:750px;
            border-top-left-radius:220px;
            border-top-right-radius:220px;
            padding:30px;
        }

        .profile-img{
            width:180px;
    height:180px;
    border-radius:50%;
    object-fit:cover;
    margin-top:20px;
    display:block;
    margin-left:auto;
    margin-right:auto;
        }

        .label{
            color:#ffe600;
            font-weight:bold;            
            display:block;
            margin-top:25px;
            text-align:center;
        }

        .info-box{
            background:white;
    padding:12px;
    border-radius:10px;
    font-weight:bold;
    width:30%;
    margin:auto;
    text-align:center;
        }

        .home-btn{
            background:#ffe600;
            border-radius:30px;
            padding:15px 60px;
            text-decoration:none;
            color:red;
            display:inline-block;
            font-weight:bold;
            display:inline-block;
margin-top:40px;
            
        }

        .bottom-nav{
            background:orange;
            padding:10px;
            display:flex;
            justify-content:space-around;
            margin-top:40px;
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

<div class="content"></div>

    <img src="{{ asset('images/logo.png') }}" class="logo">

    <h1 class="title">Profile Details</h1>

    <div class="red-box">

        <img src="{{ asset('images/profile.jpg.png') }}" class="profile-img">

        <label class="label">NAMA</label>

        <div class="info-box">
            <span id="namaUser"></span>
        </div>

        
        <label class="label">EMAIL</label>

        <div class="info-box" id="emailUser"></div>

        <label class="label">ALAMAT</label>

        <div class="info-box">
            Taman Modern Blok B4 No.20
        </div>

        <label class="label">FAVORITE MENU</label>

        <div class="info-box">
            MIE GORENG LEVEL 1
        </div>

        <div style="text-align:center;">
        <a href="/menu" class="home-btn">
            HOME
        </a>

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
let email = localStorage.getItem("emailUser");

document.getElementById("namaUser").innerHTML = nama;

document.getElementById("emailUser").innerHTML = email;

</script>

</body>
</html>