@extends ('layouts.master')

@section('content')

     @include('posts.blog_post')

     <hr>

     <ul class="list-group">

          @foreach($post->comments as $comment)

               

               <li class="list-group-item"> 
               
                    <strong>
                         {{ $comment->created_at->diffForHumans() }}: &nbsp;
                    </strong>

                    {{ $comment->body }}

               </li>

          @endforeach

     </ul>

     <hr>

     <form action="/posts/{{ $post->id }}/comments" method="POST">

          {{ csrf_field() }}

          <div class="form-group">
               <h5>Comment</h5>
               <textarea name="body" id="body" class="form-control"></textarea>
          </div>

          <div class="form-group">
               <button type="submit" class="btn btn-primary">Comment</button>
          </div>

          @include('layouts.errors')


     </form>

@endsection