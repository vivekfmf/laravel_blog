<div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/">Home</a>
          <a class="nav-link" href="#">New features</a>
          <a class="nav-link" href="#">Press</a>
          <a class="nav-link" href="#">New hires</a>
          <a class="nav-link" href="#">About</a>
          <a class="nav-link" href="/posts/create_post">Create Post</a>

          @if(Auth::check())
            <a class="nav-link ml-auto" href="#">{{ auth()->user()->name }}</a>
          @endif
          
        </nav>
      </div>
    </div>