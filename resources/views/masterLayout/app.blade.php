<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/toastify.css')}}">
  <link rel="stylesheet" href="{{asset('css/formStyle.css')}}">
  <style>
    *{
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
  </style>
  <title>@yield('title')</title>
</head>
<body>
  <div> 
    @yield('content')
  </div>
  <script src="{{asset('js/toastify.js')}}"></script>
  <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
  <script src="{{asset('js/axios.min.js')}}"></script>
</body>
</html>