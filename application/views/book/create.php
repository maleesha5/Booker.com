Create Book

<?php echo validation_errors(); ?>
<?php echo form_open('book/create'); ?>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter Book Title..">
  </div>
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" name="author" placeholder="Enter Author Name..">
  </div>
  <div class="form-group">
  <label for="category">Category</label>
  <select class="custom-select" name="category_id">
      <?php foreach ($categories as $category): ?>
		  	<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
		  <?php endforeach;?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
