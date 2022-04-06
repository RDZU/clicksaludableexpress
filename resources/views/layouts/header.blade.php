
  
    
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800&amp;subset=latin-ext">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Footer-Dark.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Navigation-Clean.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Social-Icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
  
</head>

<body>
    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-2 col-xl-2 text-center">
                    <a href="https://www.facebook.com/clicksaludableexpress-107186111415243" target="_blank">
                        <i class="fab fa-facebook-square top-header"></i>
                    </a>
                    <a href="https://www.instagram.com/clicksaludableexpress/" target="_blank">
                        <i class="fab fa-instagram top-header"></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=584248164599" target="_blank">
                        <i class="fab fa-whatsapp top-header"></i>
                    </a>
                </div>
                <div
                    class="col-md-12 col-lg-5 col-xl-5 offset-0 offset-md-0 offset-lg-0 text-center"><i class="fa fa-envelope top-email"></i><a class="text-success" data-bs-hover-animate="bounce" href="mailto:clicksaludableexpress@gmail.com" target="_blank"><span class="cabecera-correo"><strong>&nbsp; clicksaludableexpress@gmail.com</strong></span></a></div>
            <div
                class="col-md-12 col-lg-5 col-xl-5 text-center"><i class="fa fa-map-marker top-lugar"></i><span id="cabezera-lugar"><strong>&nbsp; Lecheria, Edo. Anzoátegui. Venezuela</strong></span></div>
        </div>
        </div>
    </section>
    <header>
        <nav class="navbar navbar-light navbar-expand-lg mobile">
            <div class="container"> 
                <a href="{{route('inicio')}}"><img id="logo"  class="img-fluid" src="{{asset('assets/img/logo-clicksaludableexpress.webp')}}"></a><a class="navbar-brand" href=""><br>
                </a>
                <button data-toggle="collapse" class="navbar-toggler .menu" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mx-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link text-success" href="{{route('inicio')}}" style="font-size: 18px;"><strong>Inicio</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-success" href="{{route('productos')}}" style="font-size: 18px;"><strong>Productos</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-success" href="{{route('marcas')}}" style="font-size: 18px;"><strong>Marcas</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-success border-secondary" href="{{route('about')}}" style="font-size: 18px;"><strong>Nosotros</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-success" href="{{route('contacto')}}" style="font-size: 18px;"><strong>Contacto</strong></a></li>
                    </ul>
            </div>
            </div>
        </nav>
    </header>
