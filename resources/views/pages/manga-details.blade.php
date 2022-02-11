@extends('pages.pages-master')
@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
@stop
@section('content')
    <manga-details></manga-details>
@stop

@section('js')
    <script src="{{ asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.chapter').overlayScrollbars({  });
            if($('.chapter').hasOverflow){
                alert('nm')
            }
        });
    </script>
@stop






