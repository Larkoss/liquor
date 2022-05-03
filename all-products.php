<!-- All products -->
<style>
  .grid .grid-item {
    margin-right: 1.2rem;
    margin-top: 1rem;
  }
</style>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['all_products_submit'])) {
    // call method addToCart
    $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
  }
}
$brand = array_map(function ($pro) {
  return $pro['item_type'];
}, $product_shuffle);
$unique = array_unique($brand);
sort($unique);
shuffle($product_shuffle);
?>

<section id="all-products">
  <div class="container">
    <h4 class="font-rubik font-size-20">All products</h4>
    <div id="filters" class="button-group text-right font-baloo font-size-16">
      <button class="btn is-checked" data-filter="*">All Brand</button>
      <?php
      array_map(function ($brand) {
        printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
      }, $unique)
      ?>
    </div>

    <div class="grid">
      <?php array_map(function ($item) { ?>
        <div class="grid-item border <?php echo $item['item_type']; ?>">
          <div class="item py-2" style="width: 250px;">
            <div class="product font-rale">
              <a href="#"><img src="<?php echo $item['item_image']; ?>" alt="product1" class="img-fluid"></a>
              <div class="text-center">
                <h6><?php echo $item['item_name']; ?></h6>
                <div class="rating text-warning font-size-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span><?php echo $item['item_price']; ?> CZK</span>
                </div>
                <form method="post">
                  <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?>">
                  <input type="hidden" name="user_id" value="<?php echo 1 ?>">
                  <button type="submit" name="all_products_submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php }, $product_shuffle) ?>
    </div>
    <hr>
  </div>

</section>

<!-- !All Products -->