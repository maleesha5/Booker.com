<?php echo form_open('admin/login'); ?>
	<form class="form-signin">
		<div class="col-md-4 offset-md-4 text-center mb-4">
        <img class="img-signin mb-4 mt-4" src="<?php echo base_url(); ?>/assets/images/admin_login.png" alt="">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Login</button>
		</div>
</form>
<?php echo form_close(); ?>