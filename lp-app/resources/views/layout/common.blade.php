<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    
    @section('pageCss')
    @endsection
</head>

<body>
    @include('admin.layout.header')
    @include('admin.layout.sidebar')

    @section('main')
    @endsection

    @section('pageScript')
    @endsection
</body>

</html>
