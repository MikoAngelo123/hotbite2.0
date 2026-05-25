<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#222;
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

.header{
    background:#c40000;
    color:white;
    padding:25px;
    text-align:center;
    border-bottom-left-radius:40px;
    border-bottom-right-radius:40px;
}

.header h2{
    color:#ffe600;
}

.menu{
    display:flex;
    justify-content:space-around;
    margin-top:20px;
    flex-wrap:wrap;
    gap:10px;
}

.menu a{
    background:#c40000;
    color:white;
    text-decoration:none;
    padding:10px 20px;
    border-radius:15px;
    font-weight:bold;
}

.content{
    padding:20px;
}

.card-box{
    background:white;
    padding:20px;
    border-radius:20px;
    margin-top:20px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
}

.table th{
    background:#c40000;
    color:white;
}

.btn-danger{
    background:#c40000;
    border:none;
}

.btn-warning{
    background:#ffe600;
    border:none;
    color:black;
}

</style>

</head>
<body>

<div class="phone">

<div class="header">

<h2>HOTBITE ADMIN</h2>

<div class="menu">

<a href="/admin">Dashboard</a>

<a href="/admin/products">Products</a>

<a href="/admin/users">Users</a>

<a href="/admin/tambah">Tambah</a>

<a href="/">HotBite</a>

</div>

</div>

<div class="content">

<div class="card-box">

<h3>Total Produk</h3>

<h1>3</h1>

</div>

<div class="card-box">

<h3>Total User</h3>

<h1>2</h1>

</div>

<div class="card-box">

<h3>Status</h3>

<p>Semua sistem berjalan normal.</p>

</div>

</div>

</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\hotbite\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>