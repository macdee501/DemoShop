 <!-- Shopping cart section -->

 <section id="cart" class="py-3">
            <div class="container-fluid w-75">
                <h5 class="font-baloo font-size-20">Shopping Cart</h5>
                <div class="row">
                    <div class="col-sm-9">
                        <!-- Cart item -->
                        <?php
                         foreach($product->getProduct("cart")as $item): 
                            $cartResult = $product->getProductId($item["item_id"]);
                            array_map(function($item){;
                        ?>
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item["item_image"] ?? ""; ?>"  style="height:120px">
                                
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item["item_name"] ?? ""; ?></h5>
                                <small>by <?php echo $item["item_brand"] ?? ""; ?></small>
                                <!-- Product rating -->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                      </div>
                                      <a href="" class="px-2 font-rale font-size-14">20,724 ratings</a>
                                </div>
                              <!-- Product rating -->

                               <!-- Product qty -->

                              <div class="qty d-flex pt2">
                                <div class="d-flex font-rale w-25">
                                    <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                    <input type="text" data-id="pro1" class="qty-input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                    <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                </div>
                                <button type="submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                <button type="submit" class="btn font-baloo text-danger">Save for later</button>
                              </div>
                              <!-- Product qty -->


                            </div>
                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 font-baloo text-danger t">
                                    R<span class="product-price"><?php echo $item["item_price"] ?? ""; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php 
                        },$cartResult);
                        endforeach;
                         ?>
                    </div>
                    <div class="col-sm-3">
                        <div class="sub-total text-center mt-2">
                            <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is elgible for free delivery</h6>
                            <div class="border-top py-4">
                                <h5 class="font-baloo font-size-20">Sub-total(2 item) <span class="text-danger">R</span> <span  id="deal-price" class="text-danger">8000</span></h5>
                                <button type="submit" class="btn btn-warning mt-3">Proceed to buy</button>
                            </div>
                        </div>
                        
                    </div>
    
                    <!-- Cart item -->
                </div>
                
                
            </div>
        </section>
        <!-- Shopping cart section -->