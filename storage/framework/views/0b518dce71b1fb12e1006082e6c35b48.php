<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Products</title>

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

<h3>Data Produk</h3>

<table class="table table-bordered">

<thead>

<tr>
<th>Produk</th>
<th>Harga</th>
<th>Level</th>
<th>Stok</th>
<th>Aksi</th>
</tr>

</thead>

<tbody id="produkTable">

<tr>
<td>Mie Goreng</td>
<td>15000</td>
<td>LEVEL 1</td>
<td>10</td>
<td>

<button onclick="editBaris(this)" class="btn btn-warning btn-sm">
Edit
</button>

<button onclick="hapusBaris(this)" class="btn btn-danger btn-sm">
Delete
</button>

</td>
</tr>

<tr>
<td>Nasi Goreng</td>
<td>18000</td>
<td>LEVEL 2</td>
<td>8</td>
<td>

<button onclick="editBaris(this)" class="btn btn-warning btn-sm">
Edit
</button>

<button onclick="hapusBaris(this)" class="btn btn-danger btn-sm">
Delete
</button>

</td>
</tr>

<tr>
<td>Ayam Goreng</td>
<td>20000</td>
<td>LEVEL 3</td>
<td>5</td>
<td>

<button onclick="editBaris(this)" class="btn btn-warning btn-sm">
Edit
</button>

<button onclick="hapusBaris(this)" class="btn btn-danger btn-sm">
Delete
</button>

</td>
</tr>

</tbody>

</table>

</div>

</div>

</div>

<script>

function editBaris(button){

    let row = button.parentElement.parentElement;

    let nama = prompt(
        "Edit Nama Produk",
        row.cells[0].innerHTML
    );

    let harga = prompt(
        "Edit Harga",
        row.cells[1].innerHTML
    );

    let level = prompt(
        "Edit Level",
        row.cells[2].innerHTML
    );

    let stok = prompt(
        "Edit Stok",
        row.cells[3].innerHTML
    );

    row.cells[0].innerHTML = nama;
    row.cells[1].innerHTML = harga;
    row.cells[2].innerHTML = level;
    row.cells[3].innerHTML = stok;

}

function hapusBaris(button){

    button.parentElement.parentElement.remove();

    localStorage.removeItem("products");

}

let products = JSON.parse(localStorage.getItem("products")) || [];

if(products.length > 0){
    products.forEach(function(produk){

    document.getElementById("produkTable").innerHTML += `

    <tr>
        <td>${produk.nama}</td>
        <td>${produk.harga}</td>
        <td>${produk.level}</td>
        <td>${produk.stok}</td>

        <td>

        <button onclick="editBaris(this)"
        class="btn btn-warning btn-sm">

        Edit

        </button>

        <button onclick="hapusBaris(this)"
        class="btn btn-danger btn-sm">

        Delete

        </button>

        </td>

    </tr>

    `;

});
}
   

</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\hotbite\resources\views/admin/products.blade.php ENDPATH**/ ?>