@extends('layouts.master')

@if ($language == "en")
    @section('title', 'Name Company | Home')
@else
    @section('title', 'Name Company | Beranda')
@endif

@section('curpage')
    @php
        $curpage = 'home';
    @endphp
@endsection

@section('content')
    @if ($language == "en")
        <div class="container">
            <h4 class="mt-5">Hello, Welcome</h4>
        </div>
    @else
        <div class="container">
            <h4 class="mt-5">Hallo, Selamat Datang</h4>
        </div>
    @endif
@endsection
@push('scripts')
    <script>
        $("#indonesia").click(function(){
            location.href = `{{route('home', 'id')}}`;
        });
        $("#english").click(function(){
            location.href = `{{route('home', 'en')}}`;
        });
    </script>
@endpush