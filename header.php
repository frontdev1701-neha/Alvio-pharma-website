<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alvio Pharma</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome (icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- Project fonts (preload main woff to improve rendering) -->
    <link rel="preload" href="font/BeVietnam-SemiBold.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="font/BeVietnam-Medium.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="font/BeVietnam-Light.woff" as="font" type="font/woff" crossorigin>

    <!-- External font declarations (all @font-face rules are in font/font.css) -->
    <link rel="stylesheet" href="font/font.css">

    <!-- Google Fonts: Geist (paragraph text) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Local CSS  -->
    <link rel="stylesheet" href="css/variable.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/pages/index.css">
    <link rel="stylesheet" href="css/pages/our-company.css">
    <link rel="stylesheet" href="css/pages/board-directors.css">
    <link rel="stylesheet" href="css/pages/heritage.css">

    <!-- Responsive Styles -->
    <link rel="stylesheet" href="css/responsive.css">
</head>
<header>
    <div class="Alvio-logo">
        <img src="images/logo.svg" alt="Alvio Pharma Logo">
    </div>
    <div>
        <a href="#" class="commo-btn">Contact Us</a>
        <img src="images/menu-icon.png" alt="Menu Icon" class="menu-icon" id="menu-toggle">
         <button class="mega-menu-close" id="menu-close">&times;</button>
    </div>
    <!-- Mega Menu -->

</header>

<nav class="mega-menu" id="mega-menu">
    <div class="container">
    <div class="mega-menu-content">
       <p class="common-para text--white text-start">Expertise</p>
        <ul class="mega-menu-list">
            <li><a href="#home">Home</a></li>
            <li class="has-submenu">
                <button class="submenu-toggle" aria-expanded="false">Who We Are <i class="fa-solid fa-angle-right"></i></button>
                <div class="submenu" aria-hidden="true">
                    <h3 class="submenu-title">About</h3>
                    <ul class="submenu-list">
                        <li><a href="#team">Our Company</a></li>
                        <li><a href="#mission">Board of Directors</a></li>
                        <li><a href="#history">Our Heritage</a></li>
                        <li><a href="#careers">Sustainability & Responsibility</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#services">Therapeutic Areas</a></li>
            <li><a href="#products">Our Science & Innovation</a></li>
            <li><a href="#manufacturing">Manufacturing & Quality</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
    </div>
    <div class="mega-menu-footer">
        <div class="social-icons">
            <a href="#"><img src="./images/linkedin-icon.svg" alt="LinkedIn" class="me-3"></a>
             <a href="#"><img src="./images/insta-icon.svg" alt="Instagram" class="me-3"></a>
            <a href="#"  ><img src="./images/facebook-icon.svg" alt="Facebook" class="me-3"></a>
            <a href="#"><img src="./images/whatsapp-icon.svg" alt="WhatsApp" class="me-3"></a>   
        </div>
        <div class="footer-content">
            <p class="common-para text--white" >Privacy Policy</p> <p class="common-para text--white">|</p>
            <p class="common-para text--white">Terms & Conditions</p>

        </div>

    </div>
    </div>
</nav>
<body>
    
