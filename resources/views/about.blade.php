@extends('layouts.master')

@if ($language == "en")
    @section('title', 'Name Company | About Us')
@else
    @section('title', 'Name Company | Tentang Kami')
@endif

@section('curpage')
    @php
        $curpage = 'about-us';
    @endphp
@endsection

@section('content')
    @if ($language == "en")
        <div class="container">
            <h4 class="mt-5">About Us</h4>
        </div>
    @else
        <div class="container">
            <h4 class="mt-5">Tentang Kami</h4>
        </div>
    @endif
@endsection
@push('scripts')
    <script>
        $("#indonesia").click(function(){
            location.href = `{{route('about', 'id')}}`;
        });
        $("#english").click(function(){
            location.href = `{{route('about', 'en')}}`;
        });
    </script>
@endpush