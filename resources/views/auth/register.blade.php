@extends('layouts.app')


@section('content')
    <div class="flex justify-center">
       <div class="w-4/12 bg-white p-6 m-4 rounded-lg">
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Your Name</label>
                <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') text-red-500 border-red-500 @enderror" value="{{old('name')}}">
                @error('name')
                    <div class="text-red-500 border-red-500">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="username" class="sr-only">Your Name</label>
                <input type="text" name="username" id="username" placeholder="Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') text-red-500 border-red-500 @enderror" value="{{old('username')}}">
                @error('username')
                    <div class="text-red-500 border-red-500">
                        {{$message}}
                    </div>
                @enderror
            </div>
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
                <label for="password_confirmation" class="sr-only">Password Again</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
            </div>
            <div class="mb-4">
               <button type="submit" class="bg-blue-400 p-4 rounded font-medium w-full">Register</button>
            </div>
        </form>
       </div>
    </div>
@endsection