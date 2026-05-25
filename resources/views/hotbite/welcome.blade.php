<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotBite</title>

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
            height:650px;
            border-top-left-radius:220px;
            border-top-right-radius:220px;
            padding-top:150px;
        }

        .promo{
            color:#ffe600;
            font-weight:bold;
            text-align:center;
        }

        .btn-white{
            background:white;
            border-radius:30px;
            padding:15px 45px;
            text-decoration:none;
            color:black;
            display:inline-block;
            font-weight:bold;            
            display:inline-block;
margin-top:25px;
            
        }

        .btn-yellow{
            background:#ffe600;
            border-radius:30px;
            padding:15px 55px;
            text-decoration:none;
            color:red;
            display:inline-block;
            font-weight:bold;
            display:inline-block;
margin-top:25px;
            
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

        <h2 class="promo">GO TRY OUT NOW!</h2>

        <div style="text-align:center;">
        <div class="btn-white">
    GET STARTED
</div>
        </div>

        <div style="text-align:center;">
        <a href="/login" class="btn-yellow">LOGIN</a>
        </div>
    </div>

</div>

</body>
</html>