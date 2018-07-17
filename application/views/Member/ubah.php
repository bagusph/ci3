<main role="main" class="container">
	<div class="jumbotron">
		<h1>Update Member</h1>
		<p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
	</div>
	<h1>Update Member</h1>
	<!-- load header -->
	<!-- action akan dilakukan ke controller Penulis dengan fungsi ubah -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e -->
	<?php echo form_open_multipart('Member/ubah/'.$getData['username']); ?>
	<div class="form-group row">
		<label for="id" class="col-sm-2 col-form-label">Username</label>
		<div class="col-sm-10">
			<input type="text" name="username" class="form-control" id="username"  value="<?php echo $getData['username'] ?>" placeholder="username">
			<?php echo form_error('username') ?> <!-- menampilkan error saat rule id gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="nama" class="col-sm-2 col-form-label">Password</label>
		<div class="col-sm-10">
			<input type="text" name="password" class="form-control" id="password"  value="<?php echo $getData['password'] ?>" placeholder="password">
			<?php echo form_error('password') ?> <!-- menampilkan error saat rule nama gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="col-sm-2"></label>
		<input type="submit" class="btn btn-success" value="Ubah">
	</div>
</form>
<!-- load footer -->
</main>