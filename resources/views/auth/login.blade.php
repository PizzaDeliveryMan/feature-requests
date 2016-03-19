@extends('layouts.master')

@section('title', 'Feature Requests Login')

@section('body-classes', 'hold-transition login-page')

@section('content')
<div class="container">

  @if(Session::has('error'))
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-ban"></i> Alert!</h4>
      {{ Session::get('error') }}      
    </div>
  @endif

  <div class="login-box">
    <div class="login-logo">
      <a href="#">Feature Requests</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Welcome to Feature Requests. This is a demo application for BriteCore.</p>
      <p class="login-box-msg">Please click the button below to authenticate using your BriteCore Google Apps account.</p>

      <div class="social-auth-links text-center">
        <a href="{{ route('auth.google') }}" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
          Google+</a>
      </div>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->
</div>
<!-- /.container -->

@endsection