@extends('layouts.master')

@if ($language == "en")
    @section('title', 'Name Company | Contact Us')
@else
    @section('title', 'Name Company | Kontak')
@endif

@section('curpage')
    @php
        $curpage = 'contact-us';
    @endphp
@endsection

@section('content')
    @if ($language == "en")
        <div class="container">
            <h4 class="mt-5">Contact Us</h4>
        </div>
    @else
        <div class="container">
            <h4 class="mt-5">Kontak</h4>
        </div>
    @endif
@endsection
@push('scripts')
    <script>
        $("#indonesia").click(function(){
            location.href = `{{route('contact', 'id')}}`;
        });
        $("#english").click(function(){
            location.href = `{{route('contact', 'en')}}`;
        });
    </script>
@endpush