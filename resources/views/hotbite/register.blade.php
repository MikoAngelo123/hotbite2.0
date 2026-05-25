<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#ffe600;
    font-family:Arial;
}

.phone{
    width:100%;
    min-height:100vh;
    background:#ffe600;
}

.content{
    padding:40px;
    text-align:center;
}

.red-box{
    background:#c40000;
    width:60%;
    margin:auto;
    padding:30px;
    border-radius:30px;
}

.label{
    color:#ffe600;
    font-weight:bold;
    display:block;
    text-align:center;
    margin-top:15px;
}

.form-control{
    width:50%;
    margin:auto;
    height:50px;
    text-align:center;
}

.btn-yellow{
    background:#ffe600;
    padding:12px 40px;
    border:none;
    border-radius:30px;
    font-weight:bold;
    margin-top:25px;
}

</style>
</head>

<body>

<div class="phone">

<div class="content">

<h1>HOTBITE</h1>

<div class="red-box">

<h3 class="text-warning">REGISTER</h3>

<label class="label">EMAIL</label>
<input type="email" id="email" class="form-control">

<label class="label">PASSWORD</label>
<input type="password" id="password" class="form-control">

<button onclick="register()" class="btn-yellow">
REGISTER
</button>

<div style="text-align:center; margin-top:15px;">

<a href="/login" class="btn-yellow text-dark text-decoration-none d-inline-block">
Back
</a>

</div>
</div>

</div>

</div>

<script>

function register(){

    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    if(email == "" || password == ""){

        alert("Isi semua data!");

        return;
    }

    let users = JSON.parse(localStorage.getItem("users")) || [];

    let cek = users.find(user => user.email == email);

    if(cek){

        alert("Email sudah terdaftar!");

        return;
    }

    users.push({
        email: email,
        password: password,
        role: "user"
    });

    localStorage.setItem("users", JSON.stringify(users));

    alert("Register berhasil!");

    window.location.href = "/login";

}

</script>

</body>
</html>