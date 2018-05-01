
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bagus Pogar Herlambang</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	 <nav class="navbar navbar-expand-md navbar-dark bg-success mb-4">
      <a class="navbar-brand" href="#">Tambah Konten Berita</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <a class="nav-link active" href="<?php echo base_url('Home') ?>">Home</a>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/Blog") ?>">Blog Berita</a>
          </li>
        </ul>
      </div>
    </nav>
     <main role="main" class="container">
<div class="row">
        <div class="col">
          <?php echo  $error ?>
          <?php echo form_open_multipart('Blog/update_action');?>
            <div class="form-group">
    <label for="id">Id</label>
    <input type="text" class="form-control" id="id" name="id" readonly="" value="<?php echo $result[0]['id'] ?>" placeholder="Id">
  </div>
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" id="author" name="author" value="<?php echo $result[0]['author'] ?>" placeholder="Author">
  </div>
<div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control" id="date" name="date" readonly="" value="<?php echo $result[0]['date'] ?>" placeholder="Date">
  </div>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="<?php echo $result[0]['title'] ?>" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <input type="text" class="form-control" id="content" name="content" value="<?php echo $result[0]['content'] ?>" placeholder="Content">
  </div>
  <div class="form-group">
    <label for="image_file">Image</label>
    <input type="file" name="image_file" value="<?php echo $result[0]['image_file'] ?>" size="50">
  </div>
  <div class="form-group">
    <label for="image_file">Kategori</label>
    <select name="fk_cat_id" id="fk_cat_id" class="form-control">
      <?php foreach ($getCategory as $key => $value): ?>
        <option value="<?php echo $value['cat_id'] ?>"><?php echo $value['cat_name'] ?></option>
      <?php endforeach ?>
    </select>
  </div>
  <input type="submit" name="add" value="Update" class="btn btn-success">
          </form>
        </div>
      </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>