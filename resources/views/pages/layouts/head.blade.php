<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield( 'page-title', env('APP_NAME') )</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@if(Auth::check() && auth()->user()->role_id == App\ModelsExtended\Role::Super_Admin)
<link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}">
@else
<link rel="stylesheet" href="{{ asset('assets/css/blue.css') }}">
@endif
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/pre-loader.css') }}" rel="stylesheet" />
