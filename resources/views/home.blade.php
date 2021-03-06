@extends('layouts.app')
@section('links')
<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="css/form.css" rel="stylesheet">
<link href="css/validate.css" rel="stylesheet">
@endsection
@section('navbar')
@include('layouts.navbar')
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
          <div class="wrap-input100 validate-input" data-validate="Name is requiered"><input class="input100 " type="text" name="name" value="" placeholder="Name"><span class="focus-input100"></span><span class="symbol-input100"><i class="fa fa-user" aria-hidden="true"></i></span></div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@section('scripts')
<script type="text/javascript">
  @if(session('notification')!=null)
  swal({
    title: 'Cuenta Confirmada',
    animation: false,
    type:'success',
    html:'Hola <b> {{Auth::user()->name}} </b> tu cuenta ha sido Confirmada',
    customClass: 'animated tada'
  });

  @endif

</script>
@endsection


