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
    font-family:sans-serif;
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
}


    </style>
</head>
<body>
    <nav class=" mb-3 navbar navbar-expand-lg navbar-dark unique-color-dark">
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
                            <a class="nav-link waves-effect waves-light" href="<?=base_url('')?>Index.php/welcome/event"><i class="fas fa-globe"></i> World</a>
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
    </body>
</html>