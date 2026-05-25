<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Tambah Produk</title>

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

<script>

function tambahProduk(){

    let nama = document.getElementById("nama").value;
    let harga = document.getElementById("harga").value;
    let level = document.getElementById("level").value;
    let stok = document.getElementById("stok").value;

    if(nama == "" || harga == "" || stok == ""){

        alert("Data harus diisi!");

        return;
    }

    let deskripsi = document.getElementById("deskripsi").value;

let gambar = "food.png";

let produk = {
    nama: nama,
    harga: harga,
    level: level,
    stok: stok,
    deskripsi: deskripsi,
    gambar: gambar
};

    let products = JSON.parse(localStorage.getItem("products")) || [];

products.push(produk);

localStorage.setItem("products", JSON.stringify(products));

    alert("Produk berhasil ditambahkan!");

    window.location.href = "/admin/products";

}

</script>

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

<h3>Tambah Produk</h3>

<label>Nama Produk</label>
<input type="text" id="nama" class="form-control mb-3">

<label>Harga</label>
<input type="number" id="harga" class="form-control mb-3">

<label>Level Pedas</label>
<select id="level" class="form-control mb-3">
    <option>ORI</option>
    <option>LEVEL 1</option>
    <option>LEVEL 2</option>
    <option>LEVEL 3</option>
</select>

<label>Stok Tersedia</label>
<input type="number" id="stok" class="form-control mb-3">

<label>Deskripsi</label>
<textarea id="deskripsi" class="form-control mb-3"></textarea>

<label>Upload Gambar</label>
<input type="file" class="form-control mb-3">

<button onclick="tambahProduk()" class="btn btn-danger w-100">
Simpan Produk
</button>

</div>

</div>

</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\hotbite\resources\views/admin/tambah.blade.php ENDPATH**/ ?>