<?php

shuffle($product_shuffle);

?>

<!--special prices-->
<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Special Price</h4>
        <div id="filters" class="button-group text-end font-baloo font-size-16">
            <button class="btn" data-filter="*">All brands</button>
            <button class="btn" data-filter=".T-shirts">T-shirts</button>
            <button class="btn" data-filter=".Jeans">Jeans</button>
            <button class="btn" data-filter=".Hoodies">Hoodies</button>
            <button class="btn" data-filter=".Computers">Computers</button>
            <button class="btn" data-filter=".Mobiles">Mobiles</button>
        </div>

        <div class="grid" style="margin-left: 100px;">
        <?php array_map(function($item){ ?>
            <div class="grid-item border <?php echo $item['item_brand']; ?>">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']) ?>"><img src="<?php echo $item['item_image'] ?? "./assets/tshirts/tshirt5";?>" alt="product1" class="img-fluid"></a>
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
            </div>
            <?php    },$product_shuffle) ?>


        </div>

    </div>
</section>
<!--special prices-->