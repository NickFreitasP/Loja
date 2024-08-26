<?php     
    require_once("header.php");
?>
 


    <!-- Contact Section Begin -->
    <section class="contact spad bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><i class="fa fa-whatsapp"></i> </span>
                        <h4>Whatsapp</h4>
                        <p> <?php echo $whatsapp ?> </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="">  <i class=" fa fa-phone ">  </i>  </span>
                        <h4>Telefone</h4>
                        <p> <?php echo $telefone  ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span > <i class="fa fa-clock-o"></i></span>
                        <h4>Horário Atendimento </h4>
                        <p> <?php  echo $horario_funcionamento  ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class=""> <i class="fa fa-envelope-o"></i> </span>
                        <h4>Email</h4>
                        <p><?php  echo $email_contato ?></p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </section>
    <!-- Contact Section End -->

    
    
    <!-- Contact Form Begin -->
    <div class="contact-form spad bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Fale conosco</h2>
                    </div>
                </div>
            </div>
            <form method="post">
                <div class="row">
                <div class="col-lg-4 col-md-6">
                        <input required   name="nome" type="text" placeholder="Seu Nome">
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <input  required type="email" name="email"  placeholder="Seu Email">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <input id="telefone"  name="telefone" type="text" placeholder="Seu Whatsapp (Opcional)">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea   required name="mensagem" placeholder="Digite sua mensagem"></textarea>
                        <button type="button" id="btn-enviar-mensagem" name = "btn-enviar-mensagem" class="site-btn">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

   <?php  require_once("footer.php") ?>