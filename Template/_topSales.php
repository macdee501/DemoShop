<?php
$product_shuffle= $product->getProduct();
?>

<!-- Top sale -->
<section id="top-sale">
        <div class="container py-5">
          <h4 class="font-rubik font-size-20">Top Sale</h4>
          <hr>
          <!-- Owl-carousel -->
          <div class="owl-carousel owl-theme">
            <?php  foreach($product_shuffle as $item) {?>
            <div class="item py-5">
              <div class="product font-rale">
                <a href="">
                  <img src="<?php echo $item["item_image"] ?? "" ?>" class="img-fluid">
                </a>
                <div class="text-center">
                  <h6><?php echo$item["item_name"] ??  "unknown" ?></h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>R <?php echo $item["item_price"] ?? 0 ?></span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
          <!-- Owl-carousel -->
        </div>
      </section>
      <!-- Top sale -->