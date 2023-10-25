@extends('layout.dashboard')

@section('banner')

<style> .scrollbar-hide::-webkit-scrollbar{ display:none; } </style>

    <div class="ml-4 mt-5">
         <h1 class="text-lg font-semibold">Product List</h1>
       <div>
        <p class="text-sm text-gray-500">Home > Product List</p>
        </div>
    <div class="w-full h-[80vh] flex justify-start items-center mt-5">
    <div class="w-[95%] h-full bg-gray-100 "> 
        <div class=" flex justify-between items-center border-b border-b-gray-300 p-4">
              <p class=" font-semibold text-gray-700">All Products</p>
              <div class="text-sm mr-5">
                    <select name="" id="" class="bg-gray-100 rounded border border-blue-500 p-1 outline-none">
                        <option value="al" aria-checked="true">All</option>
                        <option value="lw">Last Week</option>
                        <option value="lm">Last Month</option>
                    </select>
        </div>


        </div>



        <table class="w-full h-full border-separate border-spacing-x-2 border-spacing-y-3 mt-2">
            <tr class="text-center">
                <th class="text-sm text-gray-500">ID</th>
                <th class="text-sm text-gray-500">Photo</th>
                <th class="text-sm text-gray-500 bg-green-00 text-start">Name</th>
                <th class="text-sm text-gray-500">Stock</th>
                <th class="text-sm text-gray-500">Price</th>
                <th class="text-sm text-gray-500">Categories</th>
                <th class="text-sm text-gray-500">Orders</th>
                <th class="text-sm text-gray-500">Qty</th>
                <th class="text-sm text-gray-500">Action</th>
            </tr>

            <tbody class="text-center text-sm">

                @foreach($products as $idx=>$product)
                <tr class="">
                    <td class="">{{++$idx}}</td>
                    <td class="">{{$product->imgurl}}</td>
                    <td class="text-justify bg-green-00">{{$product->perfume_name}}</td>
                    <td><span class=" text-green-500 rounded-md p-1">{{$product->stock}}</span></td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->category_name}}</td>
                    <td></td>
                    <td>{{$product->qty}}</td>
                    <td class="">
                        <button class="bg-green-100 rounded-md border border-green-100  px-3 py-1 m-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                            </svg>

                        </button>
                        <button class="bg-red-100 rounded-md border border-red-100 px-3 py-1 m-1">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 text-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>

                        </button>

                    </td>






                </tr>

                @endforeach
            </tbody>
        </table>

        </div>



        </div>


        </div>

        @endsection