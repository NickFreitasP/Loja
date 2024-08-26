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
                        <div class=" ml-4 footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

    <script src ="js/mascara.js"></script>


</body>

</html>