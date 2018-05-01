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
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<!-- Begin page content -->
	<main role="main">
		<section class="jumbotron text-center">
			<div class="container">
				<h1 class="jumbotron-heading"><?php echo $page_title ?></h1>
				
				<p>
					<?php echo anchor('Blog/add_view', 'Tulis Artikel', array('class' => 'btn btn-primary')); ?>
				</p>
			</div>
		</section>

		<?php if( !empty($all_artikel) ) : ?>
		<div class="album py-5 bg-light">
			<div class="container">
				<div class="row">

					<?php
						// Kita looping data dari controller
						foreach ($all_artikel as $key) :
					?>

					<div class="col-md-4">
						<!-- Kita format tampilan blog dalam bentuk card -->
						<!-- https://getbootstrap.com/docs/4.0/components/card/ -->
						<div class="card mb-4 box-shadow border-0">
							
							<!-- Load thumbnail, jika ada -->
							<?php if( $key->post_thumbnail ) : ?>
							<img class="card-img-top" src="<?php echo base_url() .'uploads/'. $key->post_thumbnail ?>" alt="Card image cap">
							
							<!-- Jika tidak ada thumbnail, gunakan holder.js -->
							<?php ; else : ?>
							<img class="card-img-top" data-src="holder.js/100px190?theme=thumb&bg=eaeaea&fg=aaa&text=Thumbnail" alt="Card image cap">
							<?php endif; ?>
							
							<div class="card-body">

								<!-- Batasi cuplikan konten dengan substr sederhana -->
								<h5><?php echo character_limiter($key->post_title, 40) ?></h5>
								<small class="text-success text-uppercase"><?php echo $key->cat_name ?></small>
								<p class="card-text"><?php echo word_limiter($key->post_content, 20) ?></p>
								
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<!-- Untuk link detail -->
										<a href="<?php echo base_url(). 'blog/read/' . $key->post_slug ?>" class="btn btn-outline-secondary">Baca</a>
										<a href="<?php echo base_url(). 'blog/edit/' . $key->post_id ?>" class="btn btn-outline-secondary">Edit</a>
									</div>
									
								</div>
							</div>
							
						</div>
					</div>
					<?php endforeach; ?>

				</div>
			</div>
		</div>
		<?php else : ?>
		<p>Belum ada data bosque.</p>
		<?php endif; ?>
		
	</main>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>