<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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

        .tagline{
    color:red;
    font-size:24px;
    text-align:center;
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
            display:block;
            margin-top:30px;
            text-align:center;
        }

        .form-control{
            width:30%;
    margin:auto;
    height:50px;
     text-align:center;
            
        }

        .btn-yellow{
            background:#ffe600;
            border-radius:30px;
            padding:15px 55px;
            color:red;
            font-weight:bold;
            display:inline-block;
margin-top:40px;
            
        }

    </style>

</head>
<body>

<div class="phone">

<div class="content"></div>


    <img src="{{ asset('images/logo.png') }}" class="logo">

    <h1 class="title">Welcome to HotBite</h1>

    <p class="tagline">Dare to taste the heat!</p>

    <div class="red-box">
        <div style="text-align:center;">
        <h3 class="text-warning">LOGIN</h3>
        </div>
        <label class="label">EMAIL</label>

        <input type="email" id="email" class="form-control">

        <label class="label">PASSWORD</label>

        <input type="password" id="password" class="form-control">

        <div style="text-align:center;">

        <button onclick="login()" class="btn-yellow border-0">
            LOGIN
        </button>

         </div>

         <div style="text-align:center; margin-top:15px;">

<a href="/register"
class="btn-yellow text-dark text-decoration-none d-inline-block"
style="margin-top:10px;">
Register
</a>

</div>
        <br>

        <div style="text-align:center;">
    <a href="/" class="btn-yellow d-inline-block mt-3">
    KEMBALI
</a>
    </div>
    </div>

</div>

<script>

function login(){

    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    let users = JSON.parse(localStorage.getItem("users")) || [];

    if(email == "admin@gmail.com" && password == "12345"){

        localStorage.setItem("namaUser", "admin");
        localStorage.setItem("emailUser", email);

        window.location.href = "/admin";

        return;
    }
    if(email == "miko@gmail.com" && password == "12345"){

    localStorage.setItem("namaUser", "miko");
    localStorage.setItem("emailUser", email);

    window.location.href = "/menu";

    return;
}
    let userFound = users.find(user =>
        user.email == email &&
        user.password == password
    );

    if(userFound){

        let nama = email.split("@")[0];

        localStorage.setItem("namaUser", nama);
        localStorage.setItem("emailUser", email);

        window.location.href = "/menu";

    }else{

        alert("Akun tidak ditemukan!");

    }

}

</script>

</body>
</html>