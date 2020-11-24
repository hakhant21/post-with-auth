@extends('layouts.app')


@section('content')
    <div class="flex justify-center">
       <div class="w-4/12 bg-white p-6 m-4 rounded-lg">
         @if(session('status'))
            <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                {{session('status')}}
            </div>
         @endif

        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="email" class="sr-only">Your Name</label>
                <input type="text" name="email" id="email" placeholder="Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') text-red-500 border-red-500 @enderror" value="{{old('email')}}">

                @error('email')
                    <div class="text-red-500 border-red-500">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') text-red-500 border-red-500 @enderror" value="">
                @error('password')
                    <div class="text-red-500 border-red-500">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <div class="flex jutify-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remember Me</label>
                </div>
            </div>
            <div class="mb-4">
               <button type="submit" class="bg-blue-400 p-4 rounded font-medium w-full">Login</button>
            </div>
        </form>
       </div>
    </div>
@endsection