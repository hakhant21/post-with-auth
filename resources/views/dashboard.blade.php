@extends('layouts.app')


@section('content')
    <div class="flex justify-center">
       <div class="w-4/12 bg-white p-6 m-4 rounded-lg">
            <div class="text-center">
                <h1 class="text-2xl">Welcome</h1>
                <span class="text-xl">{{auth()->user()->name}}</span>   
            </div>
       </div>
    </div>
@endsection