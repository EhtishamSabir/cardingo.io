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



    <title>All Images</title>

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

        <a class="nav-link" href="dashboard">Upload Image</a>

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

      @if($message = Session::get('success'))

  <div class="alert alert-success alert-block">

    <button type="button" class="close" data-dismiss="alert">x</button>

    <strong>{{$message}}</strong>

  </div>

  @endif

          <div class="row">

              <div class="col-md-12">

                  <h1>All Payments</h1>

              <table id="bootstrap-data-table" class="table table table-bordered">

              <thead class="custom-head text-center">

                <tr>

                <th class="main-table-header">Image Name</th>

                <th class="main-table-header">Price</th>

                <th class="main-table-header">Buyer</th>

                <th class="main-table-header">Tx ID</th>

                <th class="main-table-header w-50">Image</th>

                <th class="main-table-header w-50">Action</th>

                </tr>

              </thead>

              <tbody class="text-center">

                @foreach ($data as $wall)

                <tr>

                <td class="col-md-3">

                   {{$wall->image_name}}

                  </td>

                  <td class="col-md-1">

                    {{$wall->amount}}

                  </td>

                  <td class="col-md-1">

                    {{$wall->name}}

                  </td>

                  <td class="col-md-1">

                    {{$wall->tx_id}}

                  </td>

                  <td class="col-md-3">

                    <img class="img-fluid img-thumbnail img-responsive wallpaper-image" src="{{ URL::to('/') }}/Uploads/{{$wall->url}}">

                  </td>

                  <td class="col-md-2">

                   <a href="@if($wall->status=='sold') javascript:void(0) @else /confirm/{{$wall->id}}/{{$wall->images_id}} @endif" class="btn btn-info">@if($wall->status=='sold') Sold @else Confirm @endif</a>

                  </td>

              </tr>  

              @endforeach

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

</html>