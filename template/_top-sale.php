<?php

$product_shuffle = $product->getData();

//request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    //call add to cart method
    $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
}

?>

<!--top sale-->
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Top Sale</h4>
        <hr>
        <div class="container-top" style="display: flex; justify-content: space-between;">
                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="product.php?item_id=1"><img src="./assets/tshirts/tshirt1.jpg" alt="product1" class="img-fluid"
                                    style="border: 1px solid black;"></a>
                            <div class="text-center">
                                <h6 class="pt-4">Aashi Women's T-shirt</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$499.00</span>
                                </div>
                                <form method="POST">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                                    <input type="hidden" name="user_id" value="<?php echo 1?>">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="product.php?item_id=2"><img src="./assets/tshirts/tshirt2.jpg" alt="product1" class="img-fluid"
                                    style="border: 1px solid black;"></a>
                            <div class="text-center">
                                <h6 class="pt-4">AELOMART Mens T Shirt</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$447.00</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="product.php?item_id=11"><img src="./assets/tshirts/tshirt3.jpg" alt="product1" class="img-fluid"
                                    style="border: 1px solid black;"></a>
                            <div class="text-center">
                                <h6 class="pt-4">Fila Women’s Regular T-Shirt</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$645.00</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="product.php?item_id=12"><img src="./assets/tshirts/tshirt4.jpg" alt="product1" class="img-fluid"
                                    style="border: 1px solid black;"></a>
                            <div class="text-center">
                                <h6 class="pt-4">JUNEBERRY Women's T-shirt</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$699.00</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--owl carousel-->
    </div>
</section>
<!--top sale-->