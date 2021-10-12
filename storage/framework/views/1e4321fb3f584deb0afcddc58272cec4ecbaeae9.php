
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
      <?php if(!isset(Auth::user()->email)): ?>
      <li class="nav-item">
        <a class="nav-link" href="/signin">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/signup">Signup</a>
      </li>
     <?php endif; ?>
     <?php if(isset(Auth::user()->email) && Auth::user()->email=='admin@admin.com'): ?>
     <li class="nav-item">
        <a class="nav-link" href="/dashboard">Dasboard</a>
      </li>
      <?php else: ?>
      <li class="nav-item">
        <a class="nav-link" href="/profile">Dashboard</a>
      </li>
      <?php endif; ?>
      <?php if(isset(Auth::user()->email)): ?>
      <li class="nav-item">
        <a class="nav-link" href="/logout">Logout</a>
      </li>
     <?php endif; ?>
     
    </ul>
  </div>
</nav>
<div class="container mt-5">
      <?php if($message = Session::get('success')): ?>
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong><?php echo e($message); ?></strong>
  </div>
  <?php endif; ?>
          <div class="row">
              <div class="col-md-12">
                  <h1>All Images</h1>
              <table id="bootstrap-data-table" class="table table table-bordered">
              <thead class="custom-head text-center">
                <tr>
                <th class="main-table-header">Name</th>
                <th class="main-table-header">Amount</th>
                <th class="main-table-header">TX ID</th>
                <th class="main-table-header w-50">Image</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wall): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td class="col-md-1">
                   <?php echo e($wall->image_name); ?>

                  </td>
                  <td class="col-md-1">
                   <?php echo e($wall->amount); ?>

                  </td>
                  <td class="col-md-1">
                   <?php echo e($wall->tx_id); ?>

                  </td>
                  <td class="col-md-3">
                    <img class="img-fluid img-thumbnail img-responsive wallpaper-image" src="<?php echo e(URL::to('/')); ?>/Uploads/<?php echo e($wall->url); ?>">
                  </td>
              </tr>  
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
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
</html><?php /**PATH C:\wamp64\www\nft\resources\views/profile.blade.php ENDPATH**/ ?>