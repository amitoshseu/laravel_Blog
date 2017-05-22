<div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="/">Home</a>
          <a class="blog-nav-item" href="#">New features</a>
          <a class="blog-nav-item" href="#">Press</a>
          <a class="blog-nav-item" href="#">New hires</a>
          

        <div class="dropdown pull-right">
            <a class="blog-nav-item" href="#" data-toggle="dropdown">Profile
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li>
                @if(Auth::check())
                  <a class="blog-nav-item " href="#">{{Auth::user()->name}}</a>
                  <li><a class="blog-nav-item" href="/logout">Logout</a></li>
                @else
                  <li><a class="blog-nav-item" href="/login">Login</a></li>
                  <li><a class="blog-nav-item" href="/register">Register</a></li>
                @endif
              </li>

              
                @if(Auth::check())
                    <li class="divider"></li>
                    <li><a class="blog-nav-item" href="/posts/create">Create Post</a></li>
                @endif

            </ul>
        </div>

        </nav>
      </div>
  </div>