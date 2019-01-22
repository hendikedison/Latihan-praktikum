<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beranda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style>
        @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);
@import url(https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.3/css/mdb.min.css);

h1 {
    font-family:fantasy;
    margin-top: -170px;
}
.hm-gradient {
    background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
}
.darken-grey-text {
    color: #2E2E2E;
}

.darken-grey-text {
    color: #2E2E2E;
}
.jumbotron {
    background-color: #E4E5E6;
    margin-bottom:0;
}
button {
    outline:black;
}
.tombol {
    position:absolute;
    top:50%;
    left:23%;
    transform:translate(-50%,-50%);
    width:105px;
    height:60px;
    padding:0 1rem;
    line-height:60px;
    text-align:center;
    border:2px solid #fff;
    font-size:10px;
    text-decoration:none;
    text-transform:uppercase;
    font-family:sans-serif;
    color:#fff;
    overflow:hidden;
}
.tombol span  {
    display:inline-block;
    transition:0.5s;
}
.tombol span:nth-child(odd):before {
    content:attr(data-text);
    position:absolute;
    transform:translateY(100%);
}
.tombol span:nth-child(odd){
    transform:translateY(-100%);
}
.tombol:hover span:nth-child(odd){
    transform:translateY(0);
    color:blue;
}
.tombol span:nth-child(even):before {
    content:attr(data-text);
    position:absolute;
    transform:translateY(-100%);
}

.tombol span:nth-child(even){
    transform:translateY(100%);
}
.tombol:hover span:nth-child(even){
    transform:translateY(0);
    color:blue;
}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark unique-color-dark">
                <a class="navbar-brand" href="#"><img src="<?=base_url()?>assets/logo.png" height="30" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url('')?>Index.php/welcome/utama"><i class="fas fa-home"></i> Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="<?=base_url('')?>Index.php/welcome/event"><i class="fas fa-globe"></i> Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="<?=base_url('')?>Index.php/welcome/gallery"><i class="fas fa-image"></i> Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="<?=base_url('')?>Index.php/welcome/contact"><i class="fas fa-phone"></i> Contact</a>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="<?=base_url('')?>Index.php/welcome/profil">Profil</a>
                        </li>                        
                    </ul>
                </div>
        </nav>
            <!--/.Navbar -->

            <header>
            <div class="jumbotron">  
                    <img style="width: 300px; margin-left: 520px; margin-top:0px" src="<?= base_url()?>assets/back.png" alt="">
                <h1 align="left" >Selamat Datang <?= $nama_lengkap ?>
                <br>Web ini bernama <?= $jenis_kelamin ?></h1>
                <a class="tombol" href="<?=base_url('')?>Index.php/welcome/utama">
                    <span data-text="M">M</span>
                    <span data-text="O">O</span>
                    <span data-text="R">R</span>
                    <span data-text="E">E</span>
                </a>
                <p><br>
                <br>
                <br>
                <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi consequat, arcu nec sodales varius, augue tellus mollis eros, non dignissim dui lacus ut neque. Aenean suscipit sem a lectus pretium aliquet. Curabitur tempor dolor ac ante molestie, sed volutpat massa imperdiet. Morbi leo nibh, sagittis vel eros eget, dictum pharetra neque. 
                Integer dictum ultricies auctor. Quisque condimentum, orci et tincidunt tristique, lorem mi placerat magna, a auctor mi odio eu augue. Morbi in neque pretium mi fringilla hendrerit. Proin vitae ullamcorper tortor. Nulla eu sodales felis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi consequat, arcu nec sodales varius, augue tellus mollis eros, non dignissim dui lacus ut neque.</p>
            </div>
            </header>
        </body>

</html>