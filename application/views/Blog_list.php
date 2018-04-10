<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title> Bagus Pogar Herlambang</title>
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
      <a href="<?php echo base_url("index.php/Blog/add_view") ?>" class="btn btn-primary">Tambah Berita</a>
      <ul class="list-unstyled">
  <?php foreach ($records as $key => $value): ?>
    <li class="media">
    <img class="mr-3" src="<?php echo base_url() ?>uploads/<?php echo $value['image_file'] ?>" alt="Generic placeholder image" width="100px" height="150px">
    <div class="media-body">
      <h5 class="mt-0 mb-1"><?php echo $value['title'] ?></h5>
      <h6 class="text-muted"><?php echo $value['date'] ?></h6>
      <?php echo $value['content'] ?>
      <br>
      <a href="<?php echo base_url('index.php/Blog/byId/'.$value['id']) ?>">View Details</a>
    </div>
  </li>
  <?php endforeach ?>
</ul>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script></div>
</body>
</html>