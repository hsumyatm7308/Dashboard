@extends('layout.dashboard')

@section('banner')

<div class="ml-4 mt-5"> <h1 class="text-lg font-semibold">Product Detail</h1> <div>
    <p class="text-sm text-gray-500">Home > Product Detail</p>
</div>

<div class="w-full h-[75vh] flex justify-start items-center over-flow-y-auto mt-10">
    <div class="w-[95%] h-full bg-gray-100 rounded">

    <div class=" sticky top-0 bg-gray-100 flex justify-between items-center border-b border-b-gray-300 p-4">
        <p class=" font-semibold text-gray-700">Product Detail</p>          
    </div>

    <div class="w-full bg-green-500 p-4">

        <form action="" method="post" enctype="multipart/form-data">
            <p>Product Title</p>
            <input type="text" class="w-full p-1" placeholder="Title" >

        </form>
    </div>



    </div>



</div>


</div>

@endsection