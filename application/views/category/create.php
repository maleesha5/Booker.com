Create Category

<?php echo validation_errors(); ?>
<?php echo form_open('category/create'); ?>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Category Name..">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
