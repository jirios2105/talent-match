
<header id="header">
  <div class="container-fluid">
    <div id="logo" class="pull-left">
      <h1><a href="#intro" class="scrollto">{{config('app.name')}}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="#hero">{{trans('web.navbar2.home')}}</a></li>
        <li><a href="#about">{{trans('web.navbar2.about')}}</a></li>
        <li><a href="#services">{{trans('web.navbar2.service')}}</a></li>
        <li><a href="#portfolio">{{trans('web.navbar2.portfolio')}}</a></li>
        <li><a href="#team">{{trans('web.navbar2.team')}}</a></li>
        <li><a href="#contact">{{trans('web.navbar2.contact')}}</a></li>
        <li class="menu-has-children"><a href="#">{{trans('web.navbar.lang') }}</a>
          <ul>
            <li><a href="{{ url('lang', ['en']) }}">En</a></li>
            <li><a href="{{ url('lang', ['es']) }}">Es</a></li>
          {{--   <li><a href="#">Drop Down 1</a></li>
            <li class="menu-has-children"><a href="#">Drop Down 2</a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
            <li><a href="#">Drop Down 5</a></li> --}}
          </ul>

        </li>

        @guest

        <li>

          <a  id="login-button" href="#" onclick="load_login()">{{ trans('web.navbar.login') }}</a>
        </li>

        <li >
          <a  id="register-button" href="#" onclick="load_register()">{{ trans('web.navbar.register') }}</a>
          {{--  <a  href="{{ route('register') }}">{{ trans('web.navbar.register')  }}</a> --}}
        </li>
        @else

        <li class="menu-has-children"><a href="#">{{ Auth::user()->name }}</a>
         <ul >
          <li><a  href="home"
           >
           {{ trans('web.navbar2.profil')}}
         </a>
       </li>
       <li><a  href="{{ route('logout') }}"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
         {{ trans('web.navbar.logout')}}
       </a>
     </li>
   </ul>

 </li>

 @endguest


</ul>
</nav><!-- #nav-menu-container -->


</div>
</header><!-- #header -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
 {{ csrf_field() }}
</form>