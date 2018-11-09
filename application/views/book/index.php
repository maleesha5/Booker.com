<div class="row">

<div class="col-lg-3">

  <h1 class="my-4">Booker.com</h1>
  <div class="list-group">
  <?php foreach ($categories as $category): ?>
  <a class="list-group-item" href="<?php echo site_url('/category/books/' . $category['id']); ?>"><?php echo $category['name']; ?></a>
    <?php endforeach;?>
  </div>

</div>
<!-- /.col-lg-3 -->

<div class="col-lg-9 my-4">

  <!--div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div-->

  <div class="row">
    <!--<//?php foreach ($books as $book): ?>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card border-primary mb-3">
        <a href="#"><img class="card-img-top"  width="700" height="400" src=<//?php echo $book['image']; ?> alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#"><//?php echo $book['title']; ?></a>
          </h4>
          <h5>$<//?php echo $book['price']; ?></h5>
          <p class="card-text"></p>
        </div>
        <div class="card-footer">
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
      </div>
    </div>
    <//?php endforeach;?>-->

<div class="row">
<?php foreach ($books as $book): ?>
  <div class="col-sm-3">
    <div class="card">
    <img class="card-img-top img-thumbnail" src=<?php echo $book['image']; ?>  alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?php echo $book['title']; ?></h5>
        <strong><?php echo $book['name']; ?></strong>
        <p class="card-text">Rs. <?php echo $book['price']; ?></p>
        <a href="#" class="btn btn-primary">Add to Cart</a>
      </div>
    </div>
</div>
  <?php endforeach;?>
</div>
  </div>
  <!-- /.row -->
  <div class="pagination-link mt-4">
  <?php echo $this->pagination->create_links(); ?>
  </div>
</div>
<!-- /.col-lg-9 -->

</div>
<!-- /.row -->
