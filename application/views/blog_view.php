<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bagus Pogar Herlambang</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	 <div><div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo base_url('Home') ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('About') ?>">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="<?php echo base_url('Contact') ?>">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="<?php echo base_url('News') ?>">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="<?php echo base_url('index.php/Blog') ?>">Blog Berita</a>
      </li>
    </ul>
  </div>
     <main role="main" class="container">
    <h1 class="text-center"><?php echo $records[0]['title'] ?></h1>
    <h6 class="text-muted">Tanggal : <?php echo  $records[0]['date']  ?></h6>
    <div class="row">
          <div class="col-2"> </div>
          <div class="col-8"> 
    <img src="<?php echo  base_url() ?>uploads/<?php echo $records[0]['image_file']  ?>" alt=" " class="">
          </div>
          <div class="col-2"> </div>
          <p><?php echo $records[0]['content'] ?></p>
        </div>
      </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>