<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Home</title>
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
     <?php if(auth()->guard()->check()): ?>
     <?php if(isset(Auth::user()->email) && Auth::user()->email=='admin@admin.com'): ?>
     <li class="nav-item">
        <a class="nav-link" href="/dashboard">Dasboard</a>
      </li>
      <?php else: ?>
      <li class="nav-item">
        <a class="nav-link" href="/profile">Dashboard</a>
      </li>
      <?php endif; ?>
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
      <form action="do_filter" method="GET" class="jumbotron mt-5">
       <?php echo e(csrf_field()); ?>

       <div class="form-row">
          <div class="form-group col-md-9">
             <label for="inputEmail4">Filter</label>
             <input type="text" class="form-control" require name="search" placeholder="Search Name">
         </div>
         <div class="col-md-3 mt-4 pt-2">
         <button type="submit" class="btn btn-primary btn-md">Search</button>
     </div>
    </form>
          <div class="row">
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wall): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-lg-4 g-mb-30 mb-3">
                    <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5">
                        <img class="d-inline-block img-fluid mb-4" src="<?php echo e(URL::to('/')); ?>/Uploads/<?php echo e($wall->url); ?>" alt="<?php echo e($wall->name); ?>">
                        <h4 class="h5 g-color-black g-font-weight-600 g-mb-10"><?php echo e($wall->image_name); ?></h4>
                        <p><?php echo e($wall->attr_1); ?><?php echo e($wall->attr_2); ?><?php echo e($wall->attr_3); ?><?php echo e($wall->attr_4); ?><?php echo e($wall->attr_5); ?></p>
                        <!-- <span class="d-block g-color-primary g-font-size-16">$50.00</span> -->
                        <a href="<?php if($wall->status=='sold'): ?> javascript:void(0) <?php else: ?> /view/<?php echo e($wall->id); ?> <?php endif; ?>" class="btn btn-info"><?php if($wall->status=='sold'): ?> Sold Out <?php else: ?> View <?php endif; ?></a>
                    </article>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
</html><?php /**PATH C:\wamp64\www\nft\resources\views/index.blade.php ENDPATH**/ ?>