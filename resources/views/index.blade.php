@extends('layouts.app')

@section('content')
    <div class="flex text-gray-100">
        <div class="m-auto pb-16 pt-8 sm:m-auto w-4/5 block text-center bg-gradient-to-r from-yellow-700 to-amber-300">
            <h1 class="sm:text-black text-3xl sm:text-5xl uppercase font-normal text-shadow-md">
                Shoe Shop
            </h1>
            
            <p class="sm:text-black pb-10 font-thin pt-6">
                Quality shoes for lower prices
            </p>

            <a  
                href="/shop"
                class="px-8 py-4 text-l uppercase text-white font-bold bg-blue-600 rounded-full w-full">
                Shop Now
            </a>
        </div>
    </div>
@endsection