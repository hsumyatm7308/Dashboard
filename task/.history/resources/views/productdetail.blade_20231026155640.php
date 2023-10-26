@extends('layout.dashboard')

@section('banner')

<div class="ml-4 mt-5">
    <div class="w-[95%] flex justify-between items-center">
        <div>

           <h3 class="text-md font-semibold">Product Detail</h3>

            <p class="text-sm text-gray-500 mt-2">Home > Product Detail</p>
        </div>
        <div>
            <button class="text-gray-200 bg-blue-500 rounded-md hover:bg-blue-600 px-4 py-2">Publish</button>
        </div>

    </div>

    <div class="w-full h-[75vh] flex justify-start items-center over-flow-y-auto mt-10">
        <div class="w-[95%] h-full bg-gray-100 rounded">

            <div class=" sticky top-0 bg-gray-100 flex justify-between items-center border-b border-b-gray-300 p-4">
                <p class="text-[15px] font-semibold text-gray-700">Product Detail</p>
            </div>

            <div class="w-full p-4">

                <form action="" method="post" enctype="multipart/form-data">
                    <p class="mb-3">Product Title</p>
                    <input type="text" class="w-full rounded-md placeholder-gray-500 focus:outline-none focus:ring-1 focus:ring-blue-500 p-2 " placeholder="Title">

                </form>
            </div>



        </div>



    </div>


</div>

@endsection