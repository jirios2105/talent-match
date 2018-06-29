



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Talent-Match') }}
      </a>
    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        @if(auth()->user()->hasRole('university'))
        <li>
          <a  href="{{ route('login') }}">{{trans('web.navbar.register_student')}}</a>
        </li>
        <li >
          <a  href="{{ route('register') }}">{{ __('Register uni') }}</a>
        </li>
        @elseif(auth()->user()->hasRole('company'))
        <li >
          <a  href="{{ route('register') }}">{{ __('Register otro') }}</a>
        </li>
        <li >
          <a  href="{{ route('register') }}">{{ __('Register otro') }}</a>
        </li>
        <li >
          <a  href="{{ route('register') }}">{{ __('Register otro') }}</a>
        </li>
        <li >
          <a  href="{{ route('register') }}">{{ __('Register otro') }}</a>
        </li>
        @endif 

      </ul>


      <ul class="nav navbar-nav navbar-right">

       <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{trans('web.navbar.lang') }} <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ url('lang', ['en']) }}">En</a></li>
          <li><a href="{{ url('lang', ['es']) }}">Es</a></li>

        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }} <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a  href="{{ route('logout') }}"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
           {{ trans('web.navbar.logout')}}
         </a>
       </li>
     </ul>
   </li>


 </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>




<form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
 {{ csrf_field() }}
</form>
