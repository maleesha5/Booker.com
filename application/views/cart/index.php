<div class="row">
    <div class="col-lg-3">
    <h2 class="my-4">Shopping cart</h2>

    </div>
    <div class="col-lg-9">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Sub Total</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach ($books as $book): ?>
  <tr>
      <td><?php echo $book['id']; ?></td>
      <td><?php echo $book['title']; ?></td>
      <td><?php echo $book['price']; ?></td>
      <td><?php echo $book['quantity']; ?></td>
      <td><?php echo $book['price'] * $book['quantity']; ?></td>
    </tr>
<?php endforeach;?>
<tr>
<td colspan="4">Total</td>
<td>100</td>
</tr>
  </tbody>
</table>
</div>
</div>
