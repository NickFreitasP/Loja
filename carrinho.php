<?php     
    require_once("header.php");
?>

   

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Produtos</th>
                                    <th>Valor</th>
                                    <th>Quatidade</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/cart/cart-1.jpg" alt="">
                                        <h5>Vegetable’s Package</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        $55.00
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        $110.00
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/cart/cart-2.jpg" alt="">
                                        <h5>Fresh Garden Vegetable</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        $39.00
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        $39.99
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/cart/cart-3.jpg" alt="">
                                        <h5>Organic Bananas</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        $69.00
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        $69.99
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#"  style="background-color:#961a1b;" class="primary-btn cart-btn cart-btn-right  text-light">Continue Comprando</a>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Cupons de Desconto</h5>
                            <form action="#">
                                <input type="text" placeholder="Digite o código do cupom">
                                <button type="submit" class="site-btn">Aplicar Cupom</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5><Table>Total no carrinho</Table></h5>
                        <ul>
                            <li>Subtotal <span>$454.98</span></li>
                            <li>Total <span>$454.98</span></li>
                        </ul>
                        <a href="checkout.php" class="primary-btn  bg-success text-light">Finalizar Compra</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
<?php require_once("footer.php") ?>