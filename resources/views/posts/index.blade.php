@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
       <div class="w-8/12 bg-white p-6 m-4 rounded-lg">
        <form action="{{route('posts')}}" method="post" class="mb-4"> 
            @csrf
            <div class="mb-4">
                <label for="body" class="sr-only">Your Name</label>
                <textarea type="text" name="body" id="body" cols="40" rows="4" placeholder="What's up?" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') text-red-500 border-red-500 @enderror" value="{{old('name')}}"></textarea>
                @error('body')
                    <div class="text-red-500 border-red-500">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-400 text-white px-4 py-2 rounded text-medium">Post</button>
             </div>
        </form> 
        @if($posts->count())
            @foreach($posts as $post)
               <x-post :post="$post" />
            @endforeach

            {{ $posts->links() }}
        @else 
          <p>There are no posts</p>
        @endif
       </div>
    </div>
@endsection