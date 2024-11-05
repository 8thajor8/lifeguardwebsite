<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    $auth = $_SESSION['login'] ?? false ;
    

    if(!isset ($inicio)){
        $inicio = false;
    }
    if(!isset ($appFormulario)){
        $appFormulario = false;
    }
    if(!isset ($mensaje)){
        $mensaje = false;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="LifeGuard Costa Rica provides 24/7 urgent care, medical transportation, and telemedicine consultations. Services include sea, air, and ground ambulance evacuations, clinical laboratory, X-ray imaging, emergency medical consultations, medical prescriptions, chronic disease control, and more. Contact us for immediate medical assistance.">
    <meta name="keywords" content="urgent care, medical transportation, telemedicine, sea doctor, air evacuation, ground ambulance, clinical laboratory, X-ray imaging, emergency medical consultation, medical prescriptions, chronic disease control, Nosara Clinic, Lifeguard Medical Center, Santa Teresa Clinic, Cobano Clinic, Monteverde Doctor, Langosta Doctor, Costa Rica healthcare, medical services, emergency services, teleconsultation, medical evacuation, ambulance services">
    <meta property="og:url" content="https://lifeguardcostarica.com/">
    <meta property="og:site_name" content="Lifeguard Costa Rica">
    <meta property="og:title" content="Lifeguard Costa Rica">
    <meta property="og:description" content="24/7 Urgent Care, Evacuations and Telemedicine Consultations">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://i.imgur.com/pvTvcl0.png">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Lifeguard Costa Rica">
    <meta name="twitter:description" content="24/7 Urgent Care, Evacuations and Telemedicine Consultations">
    <meta name="twitter:image" content="https://i.imgur.com/pvTvcl0.png">
    <meta name="twitter:image:alt" content="Lifeguard Costa Rica">

    <link rel="icon" href="/build/img/favicon.svg" />
    <title>Lifeguard Costa Rica</title>
    <link rel="stylesheet" href="/build/css/app.css">
    <script src="https://kit.fontawesome.com/55d940ec4a.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <header class="header <?php echo $inicio ? "inicio" : ""; ?>">
        <?php if($inicio) { ?> 
        
        <div id="video-loader" class="loader"></div>
        <div class="video-container">
            <video autoplay muted loop playsinline id="background-video">
                <source src="/build/img/video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
                       
            <?php echo $inicio ? "<div class='titulo-header'><h1>24/7 Urgent Care, Evacuations and Telemedicine Consultations</h1></div>" : "" ?>
        </div>
        
        
        <?php } ?>
        <div class="contenedor contenido-header">
            <div class="barra">
                
                <div class="barra-interna">
                    <a href="/">
                        <img src="/build/img/logo.svg" alt="Logotipo de Lifeguard">
                    </a>

                    <div class="barra-interna__tel">
                        <a href="tel:+50685129111">
                            <div class="barra-interna__tel__content">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 phone__icon">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>

                                
                                <p class="barra__numero">+506 8512-9111</p>
                            </div>
                           
                        </a>

                    </div>
                    <div class="mobile-menu">
                        <img src="/build/img/barras.svg" alt="icono menu responsive">
                    </div>
                </div>

               

                <nav class="navegacion navegacion-index">
                    <a href="<?php echo $inicio ? "#aboutus" : "/#aboutus" ?>" class="scroll">About Us</a>
                    <a href="<?php echo $inicio ? "#technology" : "/#technology" ?>" class="scroll">Medical Technology</a>
                    <a href="<?php echo $inicio ? "#clinicas" : "#" ?>" class="scroll">Our Clinics</a>
                    <a href="<?php echo $inicio ? "#servicios" : "/#servicios" ?>" class="scroll">Services</a>
                    <a href="<?php echo $auth ? "/logout" : "/login" ?>" class="<?php echo $auth ? "logueado" : "deslogueado" ?>"><?php echo $auth ? "Log Out" : "Log In" ?></a>
                    <?php if($auth){ ?>
                        <a href="/configuracion" class="deslogueado">Portal</a>
                    <?php } ?>
                    
                </nav>
                
            </div>

            
        </div>
    </header>

    
    <?php echo $contenido; ?>

    <footer class="footer ">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="<?php echo $inicio ? "#telemedicine" : "/#telemedicine" ?>" class="scroll">Telemedicine Now</a>
                <a href="<?php echo $inicio ? "#aboutus" : "/#aboutus" ?>" class="scroll">About Us</a>
                <a href="<?php echo $inicio ? "#technology" : "/#technology" ?>" class="scroll">Medical Technology</a>
                <a href="<?php echo $inicio ? "#clinicas" : "#" ?>" class="scroll">Our Clinics</a>
                
                
                <a href="<?php echo $inicio ? "#contactus" : "/#contactus" ?>" class="scroll">Contact</a>
                <a href="<?php echo $inicio ? "#servicios" : "/#servicios" ?>" class="scroll">Services</a>
                <a href="<?php echo $auth ? "/logout" : "/login" ?>"><?php echo $auth ? "Log In" : "Log Out" ?></a>
                
            </nav>
        </div>
        <p class="copyright">Todos los derechos reservados 2024 &copy;</p>
    </footer>

    <script>
        var inicio = <?php echo $inicio ? 'true' :'false'; ?>;
    </script>
    <script>
        var appFormulario = <?php echo $appFormulario ? 'true' :'false'; ?>;
    </script>

     <script>
        var appointment = <?php echo $mensaje ? 'true' : 'false'; ?>
    </script>

    <script src="/build/js/bundle.min.js"></script>
</body>
</html>