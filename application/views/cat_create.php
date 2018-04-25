
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bagus Pogar Herlambang</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <main role="main" class="container">
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading"><?php echo $page_title ?></h1>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          
          <?php    
            $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
          ?>
          <?php echo validation_errors(); ?>

          <?php echo form_open( 'category/create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>

          <div class="form-group">
            <label for="cat_name">Nama Kategori</label>
            <input type="text" class="form-control" name="cat_name" value="<?php echo set_value('cat_name') ?>" required>
            <div class="invalid-feedback">Isi judul dulu gan</div>
          </div>
          <div class="form-group">
            <label for="text">Deskripsi</label>
            <input type="text" class="form-control" name="cat_description" value="<?php echo set_value('cat_description') ?>" required>
            <div class="invalid-feedback">Isi deskripsinya dulu gan</div>
          </div>
          <button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</section>
</main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>