<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotBite</title>

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
            height:650px;
            border-top-left-radius:220px;
            border-top-right-radius:220px;
            padding-top:150px;
        }

        .promo{
            color:#ffe600;
            font-weight:bold;
        }

        .btn-white{
            background:white;
            border-radius:30px;
            padding:15px 45px;
            text-decoration:none;
            color:black;
            display:inline-block;
            font-weight:bold;
            margin-top:30px;
        }

        .btn-yellow{
            background:#ffe600;
            border-radius:30px;
            padding:15px 55px;
            text-decoration:none;
            color:red;
            display:inline-block;
            font-weight:bold;
            margin-top:25px;
        }

    </style>

</head>
<body>

<div class="phone">

    <img src="{{ asset('images/logo.png') }}" class="logo">

    <h1 class="title">Welcome to HotBite</h1>

    <p class="tagline">Dare to taste the heat!</p>

    <div class="red-box">

        <h2 class="promo">GO TRY OUT NOW!</h2>

        <div class="btn-white">
    GET STARTED
</div>

        <a href="/login" class="btn-yellow">LOGIN</a>

    </div>

</div>

</body>
</html>