@extends('partials/app')
@section('title-body-library')

   @yield('content')

   @vite('resources/js/app.js')
</body>
   
@endsection()