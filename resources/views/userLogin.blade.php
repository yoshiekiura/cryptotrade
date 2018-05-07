<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{ config('app.name', 'Bitcoin') }}</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="{{ asset('public/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('public/bower_components/font-awesome/css/font-awesome.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{ asset('public/bower_components/Ionicons/css/ionicons.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('public/css/AdminLTE.min.css')}}">
<!-- iCheck -->
<!--<link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">-->
<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
<a href="{{URL::to('/')}}"><b>USER LOGIN</a>
</div>
<!-- /.login-logo -->
<div class="login-box-body">
<?php if(!empty(session('login_message'))){ ?>
<div class="alert-danger alert-dismissible" style="padding: 14px; text-align: center;  margin-bottom: 10px;">
<?php echo session('login_message');session()->forget('login_message'); ?>
</div>
<?php } ?>
<?php if(!empty(session('success'))){ ?>
<div class="alert-success alert-dismissible" style="padding: 14px; text-align: center;  margin-bottom: 10px;">
<?php echo session('success');session()->forget('success'); ?>
</div>
<?php } ?>
<?php if(!empty(session('error'))){ ?>
<div class="alert-danger alert-dismissible" style="padding: 14px; text-align: center;  margin-bottom: 10px;">
<?php echo session('error');session()->forget('error'); ?>
</div>
<?php } ?>
<form action="{{URL::to('/userAuth')}}" method="POST">
{{ csrf_field() }}
<div class="form-group">
<label for="email" class="control-label">E-Mail Address</label>
<div class="form-group has-feedback">
<input id="email" type="email" class="form-control"  name="email" value="{{ old('email') }}" required autofocus>
</div>
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
<label for="password" class="control-label">Password</label>
<div class="form-group has-feedback">
<input id="password" type="password" class="form-control" name="password" required>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<button type="submit" class="btn btn-danger">Login</button>
<a href="{{URL::to('/')}}" class="btn btn-success pull-right"><i class="fa fa-home"></i></a>
</div>
</div>
</form>
</div>
</div>
<script src="{{ asset("bower_components/jquery/dist/jquery.min.js")}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset("bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
</body>
</html>
