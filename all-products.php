<!-- All products -->
<section id="all-products">
  <div class="container">
    <h4 class="font-rubik font-size-20">All products</h4>
    <div id="filters" class="button-group text-right font-baloo font-size-16">
      <button class="btn is-checked" data-filter="*">All Brand</button>
      <button class="btn" data-filter=".Beer">Beer</button>
      <button class="btn" data-filter=".Vodka">Vodka</button>
      <button class="btn" data-filter=".Wine">Wine</button>
      <button class="btn" data-filter=".Liqueur">Liqueur</button>
    </div>

    <div class="grid">
      <?php array_map(function($item){?>
      <div class="grid-item border <?php echo $item['item_type'];?>">
        <div class="item py-2" style="width: 250px;">
          <div class="product font-rale">
            <a href="#"><img src="<?php echo $item['item_image'];?>" alt="product1" class="img-fluid"></a>
            <div class="text-center">
              <h6><?php echo $item['item_name'];?></h6>
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">
                <span><?php echo $item['item_price'];?> CZK</span>
              </div>
              <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
      <?php },$product_shuffle)?>
    </div>
    <hr>
  </div>
  
</section>

<!-- !All Products -->