<!doctype html>

<html>

<head>

    @include('includes.head')

</head>

<body class="leading-relaxed tracking-normal text-primary bg-body font-goldplayMedium text-sm md:text-base md:leading-relaxed">



    <!-- HEADER -->

    <header class="header transition-all duration-200">

        @include('includes.header')

    </header>



    <!-- ALERT -->

    <!--@if($message = Session::get('success'))

    <div class="mt-32 flex bg-secondary p-6">

        <div class="container px-4 mx-auto items-center">

            <div class="alert alert-success alert-block">

                <button type="button" class="close text-2xl mr-6" data-dismiss="alert">x</button>

                <strong>{{$message}}</strong>

            </div>

        </div>

    </div>

    @endif-->



    <!-- CONTENT -->

    @yield('content')



    <!-- FOOTER -->

     @include('includes.footer')
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="{{ asset('assets/static-load-more/jquery.simpleLoadMore.min.js') }}"></script>
     <script>
    // var numItems = $('.show-nfts').length;
    // console.log(numItems);
    // $('.show-nfts').simpleLoadMore();
    $('.some-list-counter-1').simpleLoadMore({
      item: 'li',
      count: 3,
    });

</script>


</body>

</html>