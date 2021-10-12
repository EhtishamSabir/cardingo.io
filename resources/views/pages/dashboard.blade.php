@extends('layouts.default')
@section('title', '| Upload Image')
@section('content')

    @if(isset(Auth::user()->email) && Auth::user()->email=='admin@admin.com')
    <!-- <script>window.location="{{url('/dashboard')}}"</script> -->
    @else
    <script>alert("You don't have permision to access this page!")</script>
    <script>window.location="{{url('/')}}"</script>
    @endif

    @if($message=Session::get('success'))
    <div class="mt-32 flex bg-success p-6" role="alert">
        <div class="container px-4 mx-auto items-center">
            <div class="flex flex-row alert alert-success alert-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mr-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <!--<button type="button" class="close text-2xl mr-6" data-dismiss="alert">x</button>-->
                <span class="text-2xl">{{$message}}</span>
            </div>
        </div>
    </div>
    @endif

    <div>
        <div class="container px-4 mx-auto">
            <div class="pt-24 flex flex-col justify-center items-center">
            
                <div class="w-full bg-gradient-to-br from-quinary to-senary rounded-3xl p-6 md:p-12 my-14">
                    <h1 class="mb-12 text-5xl font-goldplayBold">
                        Upload Image
                    </h1>
                    @if(count($errors) > 0)
                    <div class="text-quaternary mb-8">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li class="flex flex-row items-center my-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $error }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif


                    <form action="upload_image" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="mb-12">
                        <label class="input-bb-label" for="inputGroupFile02">Choose your file <span>*</span></label>
                        <input type="file" name="image" id="inputGroupFile02" class="input-bb-secondary" autofocus>
                    </div>
                    <div class="mb-12">
                      <label class="input-bb-label" for="inputAddress">ID <span>*</span></label>
                      <input type="number" class="input-bb-secondary" id="id" name="id" require placeholder="Enter ID...">
                      <label style="display:none;color:red;font-size:22px;" id="error_id">* Sorry! ID already exits</label>
                    </div>
                    <div class="mb-12">
                        <label class="input-bb-label" for="inlineCheckbox1">Adult Content</label>
                        <div class="flex items-center mt-4">
                            <input class="mr-4 w-4 h-4" name="adult_content" type="checkbox" id="inlineCheckbox1" value="True">
                            <span class="text-2xl">Check if adult content</span> 
                        </div>
                    </div>
                    <div class="flex flex-wrap overflow-hidden md:-mx-4">
                        <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                            <label class="input-bb-label" for="inputDisplayName">Display Name <span>*</span></label>
                            <input type="text" name="name" id="inputDisplayName" class="input-bb-secondary" require placeholder="Display Name">
                        </div>
                        <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                            <label class="input-bb-label" for="inputAssetsName">Assets Name <span>*</span></label>
                            <input type="text" name="asset_name" id="name" class="input-bb-secondary" require placeholder="Assets Name">
                            <label style="display:none;color:red;font-size:22px;" id="error_name">* Sorry! Name already exits</label>
                        </div>
                    </div>
                    <div class="mb-12">
                        <label class="input-bb-label" for="inputCollectionName">Collection Name</label>
                        <input type="text" name="collection_name" id="inputCollectionName" class="input-bb-secondary" placeholder="e.g First Edition">
                    </div>
                    <div class="mb-12">
                        <label class="input-bb-label" for="inputAssetDescription">Asset Description</label>
                        <input type="text" name="assest_description" id="inputAssetDescription" class="input-bb-secondary" placeholder="e.g My Awesome NFT...">
                    </div>
                    <div class="mb-12">
                        <label class="input-bb-label" for="exampleFormControlTextarea1">Long Description</label>
                        <textarea class="w-full mt-4 bg-senary p-6 focus:outline-none text-2xl" name="long_description" id="exampleFormControlTextarea1" rows="6"></textarea>
                    </div>
                    <div class="flex flex-wrap overflow-hidden md:-mx-4">
                        <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                            <label class="input-bb-label" for="inputArtistName">Artist Name <span>*</span></label>
                            <input type="text" name="artist_name" id="inputArtistName" class="input-bb-secondary" require placeholder="Artist Name">
                        </div>
                        <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                            <label class="input-bb-label" for="inputPublisherURL">Publisher URL</label>
                            <input type="text" name="publisher_url" id="inputPublisherURL" class="input-bb-secondary" placeholder="e.g site-one.com">
                        </div>
                    </div>
                    <div class="mb-12">
                        <label class="input-bb-label" for="inputPrice">Price <span>*</span></label>
                        <input type="number" name="price" id="inputPrice" class="input-bb-secondary" require placeholder="Enter Price">
                    </div>
                    <div class="mb-12">
                        <label class="input-bb-label" for="inputPrice">Quantity* <span>*</span></label>
                        <input type="number" name="quantity" id="inputPrice" class="input-bb-secondary" require Value=1>
                    </div>
                    <div class="flex flex-wrap overflow-hidden md:-mx-4">

                        <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                            <label class="input-bb-label" for="inputAttribute1">Attribute Name</label>
                            <input type="text" name="label_1" id="inputAttribute1" class="input-bb-secondary" placeholder="Enter Attribute Name">
                        </div>

                        <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                            <label class="input-bb-label" for="inputAttribute2">Attribute Value</label>
                            <input type="text" name="attr_1" id="inputAttribute2" class="input-bb-secondary" placeholder="Enter Attribute Value">
                        </div>

                        <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                            <label class="input-bb-label" for="inputAttribute3">Attribute Name</label>
                            <input type="text" name="label_2" id="inputAttribute3" class="input-bb-secondary" placeholder="Enter Attribute Name">
                        </div>

                        <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                            <label class="input-bb-label" for="inputAttribute4">Attribute Value</label>
                            <input type="text" name="attr_2" id="inputAttribute4" class="input-bb-secondary" placeholder="Enter Attribute Value">
                        </div>

                        <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                            <label class="input-bb-label" for="inputAttribute5">Attribute Name</label>
                            <input type="text" name="label_3" id="inputAttribute5" class="input-bb-secondary" placeholder="Enter Attribute Name">
                        </div>

                        <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                            <label class="input-bb-label" for="inputAttribute6">Attribute Value</label>
                            <input type="text" name="attr_3" id="inputAttribute6" class="input-bb-secondary" placeholder="Enter Attribute Value">
                        </div>

                        <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                            <label class="input-bb-label" for="inputAttribute7">Attribute Name</label>
                            <input type="text" name="label_4" id="inputAttribute7" class="input-bb-secondary" placeholder="Enter Attribute Name">
                        </div>

                        <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                            <label class="input-bb-label" for="inputAttribute8">Attribute Value</label>
                            <input type="text" name="attr_4" id="inputAttribute8" class="input-bb-secondary" placeholder="Enter Attribute Value">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="add" class="button-grad text-xl hover:bg-pos-100">Upload Image</button>
                    </div>

                  </form>
                </div>
                
            </div>
            
        </div>
    </div>

@stop
