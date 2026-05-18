<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#222;
            font-family:Arial;
        }

        .phone{
            width:390px;
            height:844px;
            background:#e6db00;
            margin:20px auto;
            border:12px solid black;
            border-radius:40px;
            overflow-y:auto;
            overflow-x:hidden;
            text-align:center;
        }

        .logo{
            width:120px;
            margin-top:40px;
        }

        .title{
            font-weight:bold;
            margin-top:20px;
        }

        .tagline{
            color:red;
            font-size:24px;
        }

        .red-box{
            background:#d50000;
            margin-top:40px;
            height:700px;
            border-top-left-radius:220px;
            border-top-right-radius:220px;
            padding:40px;
        }

        .label{
            color:#ffe600;
            font-weight:bold;
            text-align:left;
            display:block;
            margin-top:30px;
        }

        .form-control{
            height:50px;
        }

        .btn-yellow{
            background:#ffe600;
            border-radius:30px;
            padding:15px 55px;
            color:red;
            font-weight:bold;
            margin-top:40px;
        }

    </style>

</head>
<body>

<div class="phone">

    <img src="{{ asset('images/logo.png') }}" class="logo">

    <h1 class="title">Welcome to HotBite</h1>

    <p class="tagline">Dare to taste the heat!</p>

    <div class="red-box">

        <h3 class="text-warning">LOGIN</h3>

        <label class="label">EMAIL</label>

        <input type="email" id="email" class="form-control">

        <label class="label">PASSWORD</label>

        <input type="password" id="password" class="form-control">

        <button onclick="login()" class="btn-yellow border-0">
            LOGIN
        </button>

        <br>

    <a href="/" class="btn-yellow d-inline-block mt-3">
    KEMBALI
</a>

    </div>

</div>

<script>

function login(){

    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    if(email == "" || password == ""){

        alert("Email dan Password wajib diisi!");

        return;
    }

    if(!email.includes("@") || !email.includes(".com")){

        alert("Email harus menggunakan @ dan .com");

        return;
    }

    // LOGIN ADMIN
    if(email == "admin@gmail.com" && password == "12345"){

        window.location.href = "/admin";

        return;
    }

    // LOGIN USER
    let nama = email.split("@")[0];

    localStorage.setItem("namaUser", nama);

    window.location.href = "/menu";

}

</script>

</body>
</html>