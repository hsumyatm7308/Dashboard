@extends('layout.dashboard')

@section('banner')

<div class="ml-4 mt-5"> <h1 class="text-lg font-semibold">Product Detail</h1> <div>
    <p class="text-sm text-gray-500">Home > Product Details+</p>
</div>

<div class="w-full h-[75vh] flex justify-start items-center over-flow-y-auto mt-10">
    <div class="w-[95%] h-full bg-gray-100 rounded">

    <div class=" sticky top-0 bg-gray-100 flex justify-between items-center border-b border-b-gray-300 p-4">
              <p class=" font-semibold text-gray-700">Product Detail</p>
              <div class="text-sm mr-5">
                    <select name="" id="" class="bg-gray-100 rounded border border-blue-500 p-1 outline-none">
                        <option value="al" aria-checked="true">All</option>
                        <option value="lw">Last Week</option>
                        <option value="lm">Last Month</option>
                    </select>
                </div>

        </div>



    </div>



</div>


</div>

@endsection