<nav class="navbar nav-pills navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">BLOG</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    @if (!Auth::guest())
      <ul class="nav navbar-nav">
        <li><a href="{{ route('users.index') }}">Usuarios<span class="sr-only">(current)</span></a></li>
        <li><a href="{{ route('categories.index') }}">Categor&iacute;as</a></li>
        <li><a href="{{ route('articles.index') }}">Art&iacute;culos</a></li>
        <li><a href="{{ route('categories.index') }}">Im&aacute;genes</a></li>
        <li><a href="{{ route('tags.index') }}">Tags</a></li>
      </ul>
    @endif

                      <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Inicio Sesi&oacuten</a></li>
                            <li><a href="{{ route('register') }}">Registrar</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                                     document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-off"></span> Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>