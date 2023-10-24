@extends('layout.dashboard')

@section('banner')

<div class="ml-4 mt-5"> <h1 class="text-lg font-semibold">Product List</h1> <div>
    <p class="text-sm text-gray-500">Home > Product List</p>
</div>

<div class="w-full h-[75vh] flex justify-start items-center mt-10">
    <div class="w-[95%] h-full bg-gray-200 rounded">

        <div class=" flex justify-between items-center border-b border-b-gray-300 p-4">
            <p class="ml-5 font-semibold text-gray-700">All Products</p>
            <div class="text-sm mr-5">
                <select name="" id="" class="bg-gray-200 rounded border border-blue-500 p-1 outline-none">
                    <option value="al" aria-checked="true">All</option>
                    <option value="lw">Last Week</option>
                    <option value="lm">Last Month</option>
                </select>
            </div>


        </div>



        <table class="w-full mt-5">
            <tr class="">
                <th class="text-sm text-gray-500">ID</th>
                <th class="text-sm text-gray-500">Photo</th>
                <th class="text-sm text-gray-500">Name</th>
                <th class="text-sm text-gray-500">Stock</th>
                <th class="text-sm text-gray-500">Price</th>
                <th class="text-sm text-gray-500">Categories</th>
                <th class="text-sm text-gray-500">Orders</th>
                <th class="text-sm text-gray-500">Date</th>
                <th class="text-sm text-gray-500">Action</th>
            </tr>

            <tbody>
            
                @foreach($products as $product)
                <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->photo}}</td>
                <td>{{$product->id}}</td>


                </tr>

                @endforeach
            </tbody>
        </table>

    </div>



</div>


</div>

@endsection