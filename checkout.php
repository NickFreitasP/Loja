<?php     
    require_once("header.php");
?>

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Confirmar Dados</h4>
                <form action ="#" >
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nome Completo <span>*</span></p>
                                        <input type="text" name ="nome" id="nome" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>CPF<span>*</span></p>
                                        <input type="text" id="cpf" name='cpf'>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>
                                <input type="email" name="email">
                            </div>
                            
                            <div class="checkout__input">
                                <p>Telefone<span>*</span></p>
                                <input type="text" id="telefone" name="telefone">
                            </div>
                          
                            <div class="checkout__input">
                                <p>CEP<span>*</span></p>
                                <input type="text" id="cep" name="cep">
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Rua<span>*</span></p>
                                        <input type="text" id="rua" name="rua">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="checkout__input">
                                        <p>Bairro<span>*</span></p>
                                        <input type="text" name="bairro" id="bairro">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="checkout__input">
                                        <p>Número<span>*</span></p>
                                        <input type="text" id="numero_endereco" name="numero_endereco">
                                    </div>
                                </div>
                            </div>
                          
                          
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Complemento<span>*</span></p>
                                        <input type="text" id="rua" name="rua">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="checkout__input">
                                        <p>Cidade<span>*</span></p>
                                        <input type="text" name="bairro" id="bairro">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="checkout__input">
                                        <p>Estado<span>*</span></p>
                                        <input type="text" id="numero_endereco" name="numero_endereco">
                                    </div>
                                </div>
                            </div>
                           
                            
                           
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Detalhes do Pedido</h4>
                                <div class="checkout__order__products">Produtos <span>Total</span></div>
                                <ul>
                                    <li>Vegetable’s Package <span>$75.99</span></li>
                                    <li>Fresh Vegetable <span>$151.99</span></li>
                                    <li>Organic Bananas <span>$53.99</span></li>
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span>$750.99</span></div>
                                <div class="checkout__order__total">Total <span>$750.99</span></div>
                               
                             
                                
                               
                                <button type="submit" class="site-btn"   data-toggle="modal" data-target="#modal_pagamento">Fazer Pedido</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
    

    <div class="modal fade" id="modal_pagamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Pagamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
   <?php require_once("footer.php") ?>