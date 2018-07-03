
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
        <form action="" class="form validate-form"></form>

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


