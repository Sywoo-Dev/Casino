<?php $page = 2; include "../inc/header.php" ?>
    <script src="shop.js"></script>

    <br><br><br>
    <div class="scroll">
    <header class="main-header">
            <h1 class="buy_coins" style="padding-bottom : 20px;">Acheter des coins</h1>
        </header>
        <section class="content-section"> <!--copie cette section-->
            <h2 class="section-header">Blue coins</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">10 blue coins</span>
                    <img class="shop-item-image" src="/Casino/img/Blue_Coin.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">5€</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">20 blue coins</span>
                    <img class="shop-item-image" src="/Casino/img/Blue_Coin.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">9€</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-section">
            <h2 class="section-header">Red coins</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">10 red coins</span>
                    <img class="shop-item-image" src="/Casino/img/Red_Coin.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">10€</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">20 red coins</span>
                    <img class="shop-item-image" src="/Casino/img/Red_Coin.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">18€</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button"><a href="/Casino/purchase/index.php" style="color=white">PURCHASE</a></button>
    </div>


<?php include "../inc/footer.php" ?>
