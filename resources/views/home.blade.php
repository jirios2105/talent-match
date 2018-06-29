@extends('layouts.app')

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

                    You are logged in!
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