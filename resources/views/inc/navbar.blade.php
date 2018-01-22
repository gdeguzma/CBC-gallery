<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CBC Web Portal</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
            <li class="{{Request::is('about') ? 'active' : ''}}"><a href="/about">About</a></li>
            <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="/contact">Contact</a></li>
            <li class="{{Request::is('messages') ? 'active' : ''}}"><a href="/messages">View Messages</a></li>
            <li class="{{Request::is('myalbum') ? 'active' : ''}}"><a href="/myalbum">My Album</a></li>
            <li class="{{Request::is('create') ? 'active' : ''}}"><a href="/myalbum/create">Create Album</a></li>
            <li class="{{Request::is('viewfile') ? 'active' : ''}}"><a href="/viewAlldownloadfile">Downloadable Photos</a></li>
           {{--  <li class="{{Request::is('viewdownloadfile') ? 'active' : ''}}"><a href="/viewdownloadfile">Important Files</a></li>
            <li class="{{Request::is('viewevents') ? 'active' : ''}}"><a href="/eventscreate">Event Materials</a></li> --}}
          </ul>
        </div>
      </div>
    </nav>