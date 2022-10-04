<?php
$item_id = $_GET['item_id'] ?? 1;
foreach ($product->getData() as $item) :
    if($item['item_id'] == $item_id):
?>
    <!--product-->
    <section id="product" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="<?php echo $item['item_image'] ?? "./assets/tshirts/tshirt1.jpg" ?>" class="img-fluid" alt="">
                    <div class="form-row pt-4 font-size-16 font-baloo ">
                        <div class="col">
                            <button type="submit" class="btn2 btn-danger form-control  w-50 mx-auto mb-2">Buy Product</button>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn2 btn-warning form-control w-50 mx-auto">Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 py-5">
                    <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown" ?></h5>
                    <small>Category <?php echo $item['item_brand'] ?? "Brand" ?></small>
                    <div class="d-flex">
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <a href="#" class="px-2 font-rale font-size-14" style="text-decoration: none;">20,534 rating
                            | 100+ answered questions</a>
                    </div>
                    <hr class="m-0">

                    <!--product price-->
                    <table class="my-3">
                        <tr class="font-rale font-size-14">
                            <td>Deal Price</td>
                            <td class="font-size-20 text-danger"> <span>$<?php echo $item['item_price'] ?? "0" ?></span></td>
                        </tr>
                    </table>
                    <!--product price-->

                    <!--policy-->
                    <div class="policy">
                        <div class="d-flex">
                            <div class="return text-center mr-5" style="margin-right: 20px;">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-rale font-size-12" style="text-decoration: none;">10 Days
                                    <br>Replacement</a>
                            </div>

                            <div class="return text-center mr-5" style="margin-right: 30px;">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-truck border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-rale font-size-12" style="text-decoration: none;">Daily
                                    Tuition<br>Delivered</a>
                            </div>

                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-rale font-size-12" style="text-decoration: none;">1
                                    year<br>Warranty</a>
                            </div>

                        </div>
                    </div>
                    <!--policy-->
                    <hr>


                    <!--order details-->
                    <div id="order-details" class="font-rale d-flex flex-column text-dark">
                        <small>Delivery by: Mar 29 - Apr 1</small>
                        <small>Sold by <a href="#" style="text-decoration: none;">seller name</a></small>
                        <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to
                            Customer-411052</small>
                    </div>
                    <!--order details-->

                    <!--colors-->
                    <div class="row">
                        <div class="col-6">
                            <div class="color my-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-baloo">Colors:</h6>
                                    <div class="p-2 color-third-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                </div>
                            </div>
                        </div>

                        <!--quantity-->
                        <div class="col-6">
                            <div class="qty d-flex">
                                <h6 class="font-baloo">Qty</h6>
                                <div class="px-4 d-flex font-rale">
                                    <button class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                    <input type="text" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                    <button class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                </div>
                            </div>
                        </div>
                        <!--quantity-->

                    </div>
                    <!--colors-->

                    <!--size-->
                    <div class="size my-3">
                        <div class="font-baloo">Size:</div>
                        <div class="d-flex justify-content-between w-25">
                            <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-14">Small</button>
                            </div>
                            <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-14">Medium</button>
                            </div>
                        </div>
                    </div>
                    <!--size-->
                </div>

                <div class="col-12">
                    <h6 class="font-rubik">Product Description</h6>
                    <hr>
                    <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Placeat, iusto suscipit. Maiores excepturi animi eligendi dolorum sint deserunt perspiciatis
                        eveniet explicabo tempore, dolores voluptatum voluptate. Lorem ipsum dolor, sit amet
                        consectetur adipisicing elit. Officia suscipit vel possimus est tempora! Magnam molestias
                        ipsa aliquam itaque numquam temporibus nesciunt vero aspernatur quasi quidem? Labore
                        consectetur aliquam excepturi? Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Dolorem sit labore, quisquam quam dolores sed aut suscipit soluta aperiam odio
                        exercitationem provident rem modi voluptates! A itaque est numquam deserunt nulla
                        praesentium ex laudantium, facere eos quibusdam repellat aliquid quae voluptates officia
                        illo saepe rem quis perspiciatis cum laborum quisquam eaque libero debitis vel. Porro
                        deserunt eligendi facilis voluptas non atque modi optio odit? Tempora non accusamus iusto
                        molestias harum temporibus laboriosam voluptatibus, voluptates blanditiis nobis sed
                        eligendi, fugit recusandae. Dolorem eveniet laborum voluptatem, minus rem nostrum veniam
                        quos quisquam iure sequi asperiores culpa natus similique. Sapiente possimus repellat rem!
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!--product-->


<?php
endif;
endforeach;
?>