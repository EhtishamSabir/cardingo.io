<?php if(isset(Auth::user()->email) && Auth::user()->email=='admin@admin.com'): ?>
  <!-- <script>window.location="<?php echo e(url('/dashboard')); ?>"</script> -->
  <?php else: ?>
  <script>alert("You don't have permision to access this page!")</script>
  <script>window.location="<?php echo e(url('/')); ?>"</script>
  <?php endif; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Upload Images</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">Upload Image</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/all-images">All Image</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout">Logout</a>
      </li>
    </ul>
  </div>
</nav>
      <div class="container mt-5">
          <div class="row">
              <div class="col-md-12">
                <h3>Upload Image</h3>
                <?php if(count($errors) > 0): ?>
  <div class="alert alert-danger">
    <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li>
        <?php echo e($error); ?>

      </li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
  <?php endif; ?>
  <?php if($message=Session::get('success')): ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><p><?php echo e($message); ?></p></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php endif; ?>
                <form action="upload_image" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                    <div class="row">
                        <div class="col-md-12">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Name</label>
                        <input type="text" class="form-control" name="name" require placeholder="Enter Name">
                      </div>
                      <div class="col">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Attribute 1</label>
                        <input type="text" class="form-control" name="attr_1" placeholder="attribute">
                      </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Attribute 2</label>
                          <input type="text" class="form-control" name="attr_2" placeholder="First name">
                        </div>
                        <div class="col">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Attribute 3</label>
                          <input type="text" class="form-control" name="attr_3" placeholder="attribute">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Attribute 4</label>
                          <input type="text" class="form-control" name="attr_4" placeholder="First name">
                        </div>
                        <div class="col">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Attribute 5</label>
                          <input type="text" class="form-control" name="attr_5" placeholder="attribute">
                        </div>
                    </div>
                    <div class="form-group text-center mt-3">
                        <button type="submit" name="add" class="btn btn-outline-primary submit-button">Add Image</button>
                    </div>
                  </form>
              </div>
          </div>
      </div>
 


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html><?php /**PATH C:\wamp64\www\nft\resources\views/dashboard.blade.php ENDPATH**/ ?>