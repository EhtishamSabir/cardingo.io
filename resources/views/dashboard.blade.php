@if(isset(Auth::user()->email) && Auth::user()->email=='admin@admin.com')

  <!-- <script>window.location="{{url('/dashboard')}}"</script> -->

  @else

  <script>alert("You don't have permision to access this page!")</script>

  <script>window.location="{{url('/')}}"</script>

  @endif

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

        <a class="nav-link" href="/payments">Payments</a>

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

                @if(count($errors) > 0)

  <div class="alert alert-danger">

    <ul>

      @foreach($errors->all() as $error)

      <li>

        {{ $error }}

      </li>

      @endforeach

    </ul>

  </div>

  @endif

  @if($message=Session::get('success'))

  <div class="alert alert-success alert-dismissible fade show" role="alert">

    <strong><p>{{$message}}</p></strong>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">

      <span aria-hidden="true">&times;</span>

    </button>

  </div>

  @endif

                <form action="upload_image" method="post" enctype="multipart/form-data">

                {{csrf_field()}}

                    <div class="row">

                        <div class="col-md-12 p-3">

                            <div class="custom-file">
                              <input type="file"  name="image" class="custom-file-input" id="inputGroupFile02">
                              <label class="custom-file-label" for="inputGroupFile02">Choose file *</label>
                            </div>
                        </div>
                      
                    </div>
                    <div class="row">
                      <div class="col">
                      <label for="inputAddress">ID *</label>
                      <input type="number" class="form-control" id="inputAddress" name="id" require placeholder="Enter ID...">
                      </div>
                      <div class="col">
                      <label for="inputAddress">Quantity*</label>
                      <input type="number" class="form-control" value="1" id="inputAddress" min="1" max="1000" name="quantity" require placeholder="Enter Quantity...">
                      </div>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="adult_content" type="checkbox" id="inlineCheckbox1" value="True">
                      <label class="form-check-label" for="inlineCheckbox1">Adult Content</label>
                    </div>
                    <div class="row">
                      <div class="col">
                      <label for="inputEmail4">Display Name *</label>
                        <input type="text" class="form-control" name="name" require placeholder="Display Name">
                      </div>
                      <div class="col">
                      <label for="inputEmail4">Assets Name *</label>
                        <input type="text" class="form-control" name="asset_name" require placeholder="Assets Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Collection Name</label>
                      <input type="text" class="form-control" name="collection_name" id="inputAddress" placeholder="e.g First Edition">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Asset Description</label>
                      <input type="text" class="form-control" name="assest_description" id="inputAddress" placeholder="e.g My Awesome NFT...">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Long Description</label>
                      <textarea class="form-control" name="long_description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="row">
                      <div class="col">
                      <label for="exampleFormControlTextarea1">Artist Name *</label>
                        <input type="text" class="form-control" name="artist_name" require placeholder="Artist Name">
                      </div>
                      <div class="col">
                      <label for="exampleFormControlTextarea1">Publisher URL</label>
                        <input type="text" class="form-control" name="publisher_url"  placeholder="e.g site-one.com">
                      </div>
                    </div>
                 
                    <div class="form-group">
                      <label for="inputAddress">Price *</label>
                      <input type="text" class="form-control" id="inputAddress" name="price" require placeholder="Enter Price">
                    </div>
                    <div class="row">

                      <div class="col border border-primary p-3">
                        
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Attribute Name</label>

                        <input type="text" class="form-control" name="label_1" placeholder="Enter Attribute Name">

                        <label for="inputEmail3" class="col-sm-4 col-form-label">Attribute Value</label>

                        <input type="text" class="form-control" name="attr_1" placeholder="Attribute">

                      </div>

                    </div>

                    <div class="row">

                        <div class="col border border-primary p-3">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Attribute Name</label>

                        <input type="text" class="form-control" name="label_2" placeholder="Enter Attribute Name">

                        <label for="inputEmail3" class="col-sm-4 col-form-label">Attribute Value</label>

                          <input type="text" class="form-control" name="attr_2" placeholder="Enter Attribute">

                        </div>

                        <div class="col border border-primary p-3">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Attribute Name</label>

                        <input type="text" class="form-control" name="label_3" placeholder="Enter Attribute Name">

                        <label for="inputEmail3" class="col-sm-4 col-form-label">Attribute Value</label>

                          <input type="text" class="form-control" name="attr_3" placeholder="Enter Attribute">

                        </div>

                      </div>

                      <div class="row">

                        <div class="col border border-primary p-3">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Attribute Name</label>

                        <input type="text" class="form-control" name="label_4" placeholder="Enter Attribute Name">

                        <label for="inputEmail3" class="col-sm-4 col-form-label">Attribute Value</label>

                          <input type="text" class="form-control" name="attr_4" placeholder="Enter Attribute">

                        </div>

                        <div class="col border border-primary p-3">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Attribute Name</label>

                        <input type="text" class="form-control" name="label_5" placeholder="Enter Attribute Name">

                        <label for="inputEmail3" class="col-sm-4 col-form-label">Attribute Value</label>

                          <input type="text" class="form-control" name="attr_5" placeholder="Enter Attribute">

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

</html>