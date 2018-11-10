<div class="row mt-4">

    <div class="col-lg-3">
    <h2 class="my-4">Book Details</h2>
    </div>

    <div class="col-lg-9">
    <div class="jumbotron">
  <h3 class="display-3"> <?php echo $book->title; ?></h3>
  <p class="lead">- by <?php echo $book->author; ?> </p>
  <hr class="my-4">
  <div class="row">
      <div class="col-lg-6">
        <img class="img-thumbnail" src=<?php echo $book->image; ?>  alt="Card image cap">
    </div>
  <div class="col-lg-6">
  <p><?php echo $book->description; ?></p>
  <p class="lead">
  <a class="btn btn-primary" href="#" role="button">Add to Cart</a>
  <span class="badge badge-secondary">Rs. <?php echo $book->price; ?></span>
  </p>
  </div>
  </div>

</div>
    </div>

</div>

<div class="row mt-4">
    <div class="col-lg-12">
    <div class="jumbotron">
    <p class="lead">Customers who bought this item also bought</p>
    <hr class="my-4">
    <div class="row">
        <?php foreach ($books as $book): ?>
        <div class="col-sm">
        <div class="card">
            <img class="card-img-top img-thumbnail" src=<?php echo $book['image']; ?>  alt="Card image cap">
            <div class="card-body">
                <a href="<?php echo site_url('/book/view/' . $book['id']); ?>"><h6 class="card-title"><?php echo $book['title']; ?></h6></a>
                <h6 class="card-subtitle mb-2 text-muted">by <?php echo $book['author']; ?></h6>
                <p class="card-text">Rs. <?php echo $book['price']; ?></p>
            </div>
        </div>
        </div>
        <?php endforeach;?>
    </div>
    </div>
    </div>
</div>