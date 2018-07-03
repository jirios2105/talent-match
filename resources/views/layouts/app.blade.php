<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Styles -->
  <!-- Latest compiled and minified CSS -->

  <link rel="stylesheet" href="{{asset('css/app.css')}}" crossorigin="anonymous">

  <link rel="stylesheet" href="{{asset('css/validate.css')}}" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/form.css')}}" crossorigin="anonymous">
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

  <!-- Optional theme -->

  @yield('links')

</head>

<body>
  <div id="app">
    <!-- start nvar-->
    @yield('navbar')

    <!-- end nvar-->
    @yield('sectionn')

    <!--atart content of application HTML-->
    <main id="main" class="py-4">
      @yield('content')
    </main>
    <!--end content og application HTML -->
  </div>
</body>
<!-- scripts -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="{{asset('js/app.js')}}"  crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
<script type="{{asset('js/validate.js')}}"></script>


<!-- start content script-->
@yield('scripts')
<!-- end content script-->


</html>
