
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bagus Pogar Herlambang</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
 <main role="main">
    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading"><?php echo $page_title ?></h1>
        
        <p>
          <?php echo anchor('category/create', 'Buat Kategori Baru', array('class' => 'btn btn-primary')); ?>
        </p>
      </div>
    </section>

    <?php if( !empty($categories) ) : ?>
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">

          <?php
            // Kita looping data dari controller
            foreach ($categories as $key) :
          ?>

          <div class="col-md-4">
            <!-- Kita format tampilan blog dalam bentuk card -->
            <!-- https://getbootstrap.com/docs/4.0/components/card/ -->
            <div class="card mb-4 box-shadow border-0">
                            
              <div class="card-body">

                <!-- Batasi cuplikan konten dengan substr sederhana -->
                <h5><?php echo character_limiter($key->cat_name, 40) ?></h5>
                <p class="card-text"><?php echo word_limiter($key->cat_description, 20) ?></p>
                
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <!-- Untuk link detail -->
                    <a href="<?php echo base_url('category/'.$key->cat_id) ?>" class="btn btn-outline-secondary">Lihat Artikel</a>
                    <a href="<?php echo base_url(). 'category/edit/' . $key->cat_id ?>" class="btn btn-outline-secondary">Edit</a>
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