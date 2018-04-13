<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="{{ route('register.create') }}">Add new user</a>
            <a class="nav-link" href="{{ route('posts.index') }}">All posts</a>
            <a class="nav-link" href="#">New hires</a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link" href="#"></a>
            @if(auth()->check())
            <p class="nav-link">{{ auth()->user()->name }}</p>
            <a class="nav-link" href="/logout">Logout</a>
            @else
            <a class="nav-link" href="{{ route('login') }}">login</a>
            @endif

        </nav>
    </div>

</div>

