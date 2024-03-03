<?php
//request method post
if($_SERVER["REQUEST_METHOD"]== "POST")
{
  if(isset($_POST["new_phone_submit"]))
  {
    //add to addToCart
  $Cart->addToCart($_POST["user_id"], $_POST["item_id"]);
  }
}
?>

<!-- New Phones -->
<section id="new-phones">
      <div class="container">
        <h4 class="font-rubik font-size-20">New Phones</h4>
        <hr>
         <!-- Owl-carousel -->
         <div class="owl-carousel owl-theme">
         <?php  foreach($product_shuffle as $item) {?>
            <div class="item py-2 bg-light">
              <div class="product font-rale">
                <a href="<?php printf("%s?item_id=%s","products.php",$item["item_id"]); ?>">
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
                  <form action="" method="post">
                    <input type="hidden" name="item_id" value="<?php echo $item["item_id"] ?? ""; ?>">
                    <input type="hidden" name="user_id" value="<?php echo 3; ?>">

                  <button type="submit" name="new_phone_submit" class="btn btn-warning font-size-12">Add to cart</button>

                  </form>
                     </div>
              </div>
            </div>
            <?php } ?>
         
        </div>
        <!-- Owl-carousel -->

      </div>
    </section>
    <!-- New Phones -->
