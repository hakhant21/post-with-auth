@props(["post" => $post])
<div>
    <div class="mb-4">
        <a href="{{route('users.posts', $post->user)}}" class="font-bold text-xl">Posted By {{ $post->user ->name }}</a> 
        <span class="text-gray-600 text-sm">{{$post->created_at->diffForHumans()}}</span>
        <a href="{{route('posts.show',$post)}}"><p class="mb-2">{{$post->body}}</p></a>              
    <div class="flex items-center">
        @auth
        @if(!$post->likedBy(auth()->user()))
            <form action="{{route('posts.likes', $post)}}" method="post" class="mr-2">
                @csrf
                <button type="submit" class="text-blue-500">Like</button>
            </form>
        @else
            <form action="{{ route('posts.likes', $post )}}" method="post" class="mr-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-blue-500">Unlike</button>
            </form>
        @endif
        @can('delete', $post)
            <form action="{{route('posts.destroy', $post)}}" method="post" class="mr-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-blue-500">Delete</button>
            </form>
        @endcan
        
        @endauth
        <span>{{$post->likes->count()}} {{ Str::plural('like', $post->likes->count()) }}</span>
    </div>
    </div>
</div>