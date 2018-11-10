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

<div class="row">
<div class="row">
<?php foreach ($books as $book): ?>
  <div class="col-sm-3">
    <div class="card">
    <img class="card-img-top img-thumbnail" src=<?php echo $book['image']; ?>  alt="Card image cap">
      <div class="card-body">
      <a href="<?php echo site_url('/book/view/' . $book['id']); ?>"><h6 class="card-title"><?php echo $book['title']; ?></h6></a>
        <h6 class="card-subtitle mb-2 text-muted">by <?php echo $book['author']; ?></h6>
        <p class="card-text">Rs. <?php echo $book['price']; ?></p>
        <a href="<?php echo site_url('/cart/add/' . $book['id']); ?>" class="btn btn-primary">Add to Cart</a>
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
