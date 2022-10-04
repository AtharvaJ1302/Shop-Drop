<?php

shuffle($product_shuffle);

?>
<!--new arrivals-->
<section id="new-arrivals">
    <div class="container pt-5">
        <h4 class="font-rubik font-size-20">New Arrivals</h4>
        <hr>


        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach($product_shuffle as $item){?>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="<?php echo $item['item_image'] ?? "./assets/tshirts/tshirt5";?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6 class="pt-4"><?php echo $item['item_name'] ?? "unknown"?></h6>
                            <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$<?php echo $item['item_price']?></span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            <?php } //closing for each function ?>
    </div>
    <!-- !owl carousel -->


    </div>
</section>
<!--new arrivals-->