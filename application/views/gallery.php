<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Profil Admin</title>
    <style>
    body {
        background-color:#E4E5E6;
    }
    h2 {
        text-align: center;
        margin-top: 30px;
    }
    .container {
    position:relative;
    width:1200px;
    height:600px;
    margin:30px 100px;
}
.container .box {
    position:relative;
    width:calc(400px - 60px);
    height:calc(300px - 30px);
    background:#000;
    float:left;
    margin:15px;
    box-sizing:border-box;
    overflow:hidden;
    box-shadow:0 5px 10px rgba(0,0,0,.8);
}
.container .box:before {
    content:'';
    position:absolute;
    top:10px;
    left:10px;
    right:10px;
    bottom:10px;
    border-top:1px solid #fff;
    border-bottom:1px solid #fff;
    box-sizing:border-box;
    transition:0.5s;
    transform: scaleX(0);
    opacity:0;
}
.container .box:hover:before {
    transform:scaleX(1);
    opacity:1;
}
.container .box:after {
    content:'';
    position:absolute;
    top:10px;
    left:10px;
    right:10px;
    bottom:10px;
    border-left:1px solid #fff;
    border-right:1px solid #fff;
    box-sizing:border-box;
    transition:0.5s;
    transform: scaleY(0);
    opacity:0;
}
.container .box:hover:after {
    transform:scaleY(1);
    opacity:1;
}
.container .box .imgBox {
    position:relative;
}
.container .box .imgBox img {
    width:100%;
    transition:0.5s;
}
.container .box:hover .imgBox img {
    opacity:.2;
    transform:scale(1.2);
}
.container .box .content {
    position:absolute;
    width:100%;
    top:50%;
    transform:translateY(-50%);
    z-index:2;
    padding:20px;
    box-sizing:border-box;
    text-align:center;
}
.container .box .content h2 {
    margin: 0 0 10px;
    padding:0;
    color:#fff;
    transition:0.5s;
    transform:translateY(-50px);
    opacity:0;
    visibility:hidden;
}
.container .box .content p {
    margin:0;
    padding:0;
    color:#fff;
    transform:translateY(50px);
    opacity:0;
    visibility:hidden;
}
.container .box:hover .content h2,
.container .box:hover .content P {
    opacity:1;
    visibility:visible;
    transform:translateY(0px);
}
    </style>
</head>
<body>
    <h2 class="judul" style="font-family:cursive;">Koleksi Sepeda Malang Gowes</h2>

<div class="container">
    <div class="box">
        <div class="imgBox">
            <img src="<?=base_url()?>assets/1.jpg">
        </div>
        <div class="content">
            <h2>America Style</h2>
        </div>
    </div>   
    
    <div class="box">
        <div class="imgBox">
            <img src="<?=base_url()?>assets/2.jpg">
        </div>
        <div class="content">
            <h2>Strip Blue</h2>
        </div>
    </div>    
    
    <div class="box">
        <div class="imgBox">
            <img src="<?=base_url()?>assets/3.jpg">
        </div>
        <div class="content">
            <h2>Donker Style</h2>
        </div>
    </div>    
    
    <div class="box">
        <div class="imgBox">
            <img src="<?=base_url()?>assets/4.jpg">
        </div>
        <div class="content">
            <h2>Blue Style</h2>
        </div>
    </div>
</div>
  <div class="card-footer">
    <a style="float:left;" href="http://localhost/Latihanpraktikum/index.php/welcome/dashboard/Hendik/BICcycle"><i class="fas fa-chevron-left"></i> Kembali</a>
  </div>

</body>
</html>