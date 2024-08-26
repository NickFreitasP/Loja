<?php  require_once("../config/config.php") ?>
<!DOCTYPE html>
<html lang="pt">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<title> <?php  echo $name_loja ?> </title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

<!-- Css Styles -->
<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="../css/nice-select.css" type="text/css">
<link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="../css/style.css" type="text/css">
</head>


<!-- Page Preloder -->
<!-- <div id="preloder">
	<div class="loader"></div>
</div> -->
<body>
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
			<a href="index.php"><i class="fa fa-user"></i> Login</a>
		 </div>
	</div>
   
	<nav class="humberger__menu__nav mobile-menu">
		<ul>
			<li class="active"><a href="./index.php">Início</a></li>
			<li><a href="./categorias.php">Categorias</a></li>
			<li><a href="#">Produtos</a>
				<ul class="header__menu__dropdown">
					<li><a href="../todos_produtos.php">Todos Os Produtos </a></li>                        
					<li><a href="../produto.php">Shop Details</a></li>
					<li><a href="../shoping-cart.php">Shoping Cart</a></li>
					<li><a href="../checkout.php">Check Out</a></li>
					<li><a href="../blog-details.php">Blog Details</a></li>
				</ul>
			</li>
			<li><a href="../blog.php">Blog</a></li>
			<li><a href="../contact.php">Contatos</a></li>
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
					<ul style="font-family: 'Cairo', sans-serif;">
						<li><a href="../index.php">Roupas</a></li>
						<li><a href="../categorias.php">Calçados</a></li>
						<li><a href="#">Marcas</a>
							<ul class="header__menu__dropdown">
								<li><a href="../todos_produtos.php">Todos Os Produtos </a></li>    
								<li><a href="../produto.php">Shop Details</a></li>
								<li><a href="../shoping-cart.php">Shoping Cart</a></li>
								<li><a href="../checkout.php">Check Out</a></li>
								<li><a href="../blog-details.php">Blog Details</a></li>
							</ul>
						</li>
						<li class="active"><a href="../blog.php">Blog</a></li>
						<li><a href="../contact.php">Contatos</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-lg-3">
				<div class="header__cart">
					<ul>
					   
						<li><a href="carrinho.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
					</ul>
				  
					<div class="header__top__right__auth ml-4">
							<a href="index.php"><i class="fa fa-user"></i> Login</a>
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

	
	<div style="background-color:#f2f2f2;  border:1px solid #f2f2f2;" class="limiter  " >
		<div class="container-login100" style="margin-top: 100px; margin-bottom : 100px;">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Cadastro
					</span>
					
                    <div class="row">
                        <div class="wrap-input100 validate-input col-lg-5 mr-5" data-validate = "Valid email is: a@b.c">
						    <input class="input100" type="text" name="email">
						    <span class="focus-input100" data-placeholder="Nome"></span>
					    </div>

					
                         <div class="wrap-input100 validate-input col-lg-5 float-right" data-validate = "Valid email is: a@b.c">
						    <input class="input100" type="text" name="email">
						    <span class="focus-input100" data-placeholder="Sobrenome"></span>
					    </div>
					

                  
					
                    
                        <div class="wrap-input100 validate-input " data-validate = "Valid email is: a@b.c">
						    <input class="input100" type="text" name="email">
						    <span class="focus-input100" data-placeholder="Email"></span>
					    </div>
             
                        <div class="wrap-input100 validate-input " data-validate = "Valid email is: a@b.c">
						    <input class="input100" type="text" name="email">
						    <span class="focus-input100" data-placeholder="Telefone"></span>
					    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Senha"></span>
			        </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Confimar senha"></span>
					</div>
            
                </div>   
                    <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Registrar
							</button>
						</div>
					</div>

				
					<div class="text-center p-t-50">
						<span class="txt1">
							Já possui uma conta?
						</span>

						<a class="txt2" href="index.php">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

  <!-- Footer Section Begin -->
  <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.php"><img src="img/logo.png" alt=""></a>
                        </div>
                           
                        <ul>
                           
                            <li>Endereço: <?php echo $endereco ?> </li>
                            <li>Telefone: <?php  echo $whatsapp  ?></li>
                            <li>Email: <?php  echo $email_contato ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Principais Links</h6>
                        <ul>
                            <li><a href="contact.php">Contatos</a></li>
                            <li><a href="sobre.php">Sobre</a></li>
                            <li><a href="carrinho.php">Carrinho</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="#">Lista de Produtos</a></li>
                            <li><a href="categorias.php">Categorias</a></li>
                        </ul>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Ainda não possui Cadastro ?</h6>
                        <p>Insira seu email para se cadastrar em nosso site!!</p>
                        <form action="cadastro.php">
                            <input  required type="email" placeholder="Digite seu email">
                            <button type="submit" class="site-btn">Cadastrar</button>
                        </form>
                        <div class="footer__widget__social">
                            
                            <a target="_blank"  title="Chamar no Whatsapp" href="https://api.whatsapp.com/send?phone=5551998448811&text=Ol%C3%A1%20Nicholas%20,%20Tudo%20bem%20?!%20Vim%20atrav%C3%A9s%20do%20seu%20portif%C3%B3lio"><i class=" text-success  fa fa-whatsapp"></i></a>            
                            <a target="_blank"  title= " ir para o linkedin" href="https://www.linkedin.com/in/nicholas-freitas-4290ba228/"><i class="text-info fa fa-linkedin"></i></a>
                            <a target = "_blank" title = "Ir para o Instragram" href="https://www.instagram.com/nicholas.panonko?igsh=aXYxempzbGlkNHVt"><i class=" text-danger fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os Produtos são Demonstrativos | Loja Vitual Demo  by Nicholas Freitas
                        <div class=" ml-4 footer__copyright__payment"><img src="../img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>
    <script type="../text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

    <script src ="../js/mascara.js"></script>


</body>

</html>