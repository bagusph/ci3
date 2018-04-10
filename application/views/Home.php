<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>	Bagus Pogar Herlambang</title>
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
    <div class="row">
      <div class="col-6">
        <h5>Biodata Saya dari Array Mau coba commit</h5>
    <table class="table table-hover">
      <tbody>
        <?php foreach ($Biodata_array as $key) { ?>
        <tr>
          <td><?php echo $key['id']?></td>
        </tr>
        <tr>
          <td><?php echo $key['nama']?></td>
        </tr>
        <tr>
          <td><?php echo $key['nim']?></td>
        </tr>
        <tr>
          <td><?php echo $key['alamat']?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
      </div>
      <div class="col-6">
        <h5>Biodata Saya dari Object</h5>
    <table class="table table-hover">
      <tbody>
        <?php foreach ($Biodata_object as $key) { ?>
        <tr>
          <td><?php echo $key->id ?></td>
        </tr>
        <tr>
          <td><?php echo $key->nama ?></td>
        </tr>
        <tr>
          <td><?php echo $key->nim ?></td>
        </tr>
        <tr>
          <td><?php echo $key->alamat ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
      </div>
      <div class="col-6">
      <h5>Biodata Saya dari Builder Array</h5>
    <table class="table table-hover">
      <tbody>
        <?php foreach ($Biodatabuilder_array as $key) { ?>
        <tr>
          <td><?php echo $key['id']?></td>
        </tr>
        <tr>
          <td><?php echo $key['nama']?></td>
        </tr>
        <tr>
          <td><?php echo $key['nim']?></td>
        </tr>
        <tr>
          <td><?php echo $key['alamat']?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
        
      </div>
      <div class="col-6">
      <h5>Biodata Saya dari Builder Object</h5>
    <table class="table table-hover">
      <tbody>
        <?php foreach ($Biodatabuilder_object as $key) { ?>
        <tr>
          <td><?php echo $key->id ?></td>
        </tr>
        <tr>
          <td><?php echo $key->nama ?></td>
        </tr>
        <tr>
          <td><?php echo $key->nim ?></td>
        </tr>
        <tr>
          <td><?php echo $key->alamat ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>    
      </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script></div>
</body>
</html>
