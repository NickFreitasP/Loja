<?php  require_once("config/config.php")   ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Descubra o seu estilo com a nossa coleção de roupas e calçados masculinos e femininos. Oferecemos uma variedade de peças casuais e esportivas para todas as estações, com preços acessíveis e promoções imperdíveis. Nossa missão é trazer inovação e estilo para todas as idades, garantindo qualidade e confiança em cada escolha. Encontre o look perfeito que reflete seu estilo único e aproveite uma experiência de compra excepcional.">
    <meta name="keywords" content="Tênis masculinos e femininos
                                    Camisetas casuais e esportivas
                                    Calças jeans e confortáveis
                                    Leggings para mulheres
                                    Roupas casuais para todas as estações
                                    Calçados estilosos e confortáveis
                                    Moda casual e esportiva online
                                    Peças de vestuário para todas as idades
                                    Estilo e inovação em roupas e calçados
                                    Coleção de camisetas e tênis
                                    Calças e leggings para todos os estilos
                                    Roupas de qualidade e moda acessível
                                    Moda feminina e masculina moderna
                                    Estilo e conforto em calçados e roupas
                                    Tendências em tênis, camisetas e calças">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php  echo $name_loja ?> </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="index.php"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
            
                <li><a href="carrinho.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            
            <div class="header__top__right__auth ml-2">
                <a href="sistema/index.php"><i class="fa fa-user"></i> Login</a>
             </div>
        </div>
       
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Início</a></li>
                <li><a href="./categorias.php">Categorias</a></li>
                <li><a href="#">Produtos</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="todos_produtos.php">Todos Os Produtos </a></li>                        
                        <li><a href="./produto.php">Shop Details</a></li>
                        <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                        <li><a href="./checkout.php">Check Out</a></li>
                        <li><a href="./blog-details.php">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.php">Blog</a></li>
                <li><a href="./contact.php">Contatos</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
        <a target="_blank"  href="https://api.whatsapp.com/send?phone=5551998448811&text=Ol%C3%A1%20Nicholas%20,%20Tudo%20bem%20?!%20Vim%20atrav%C3%A9s%20do%20seu%20portif%C3%B3lio"><i  class="text-success fa fa-whatsapp"></i></a>                        
            <a target="_blank"  href="https://www.linkedin.com/in/nicholas-freitas-4290ba228/"><i class=" text-info fa fa-linkedin"></i></a>
            <a target = "_blank"  href="https://www.instagram.com/nicholas.panonko?igsh=aXYxempzbGlkNHVt"><i class=" text-danger fa fa-instagram"></i></a>

        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> <?php echo $email_contato  ?></li>
                <li> <?php  echo $msg_inicial ?></li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> <?php echo $email_contato  ?></li>
                                <li> <?php  echo $msg_inicial ?> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                            <a target="_blank"  title="Chamar no Whatsapp" href="https://api.whatsapp.com/send?phone=5551998448811&text=Ol%C3%A1%20Nicholas%20,%20Tudo%20bem%20?!%20Vim%20atrav%C3%A9s%20do%20seu%20portif%C3%B3lio"><i class=" text-success  fa fa-whatsapp"></i></a>            
                            <a target="_blank"  title= " ir para o linkedin" href="https://www.linkedin.com/in/nicholas-freitas-4290ba228/"><i class="text-info fa fa-linkedin"></i></a>
                            <a target = "_blank" title = "Ir para o Instragram" href="https://www.instagram.com/nicholas.panonko?igsh=aXYxempzbGlkNHVt"><i class=" text-danger fa fa-instagram"></i></a>

                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="header_logo_div  col-lg-3">
                    <div class="header__logo">
                        <a href="index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.php">Roupas</a></li>
                            <li><a href="./categorias.php">Calçados</a></li>
                            <li><a href="#">Marcas</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="todos_produtos.php">Todos Os Produtos </a></li>    
                                    <li><a href="./produto.php">Shop Details</a></li>
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                    <li><a href="./blog-details.php">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="./blog.php">Blog</a></li>
                            <li><a href="./contact.php">Contatos</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                           
                            <li><a href="carrinho.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                      
                        <div class="header__top__right__auth ml-4">
                                <a href="sistema/index.php"><i class="fa fa-user"></i> Login</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Categorias</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="Pesquise por produtos ">
                                <button type="submit" class="site-btn">Buscar</button>
                            </form>
                        </div>
                        <div class="hero__search__phone ">
                            <div class="hero__search__phone__icon">
                               <a target="_blank" href="https://api.whatsapp.com/send?phone=5551998448811&text=Ol%C3%A1%20Nicholas%20,%20Tudo%20bem%20?!%20Vim%20atrav%C3%A9s%20do%20seu%20portif%C3%B3lio"> <i class=" text-success fa fa-whatsapp"></i> </a>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5> <?php  echo $whatsapp  ?> </h5>
                                <span> <?php  echo $horario_funcionamento ?> </span>
                            </div>
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
