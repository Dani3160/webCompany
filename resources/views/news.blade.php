@extends('layouts.master')

@if ($language == "en")
    @section('title', 'Name Company | News')
@else
    @section('title', 'Name Company | Artikel')
@endif

@section('curpage')
    @php
        $curpage = 'news';
    @endphp
@endsection

@section('content')
    @if ($language == "en")
        <div class="container">
            <h4 class="mt-5">News</h4>
        </div>
    @else
        <div class="container">
            <h4 class="mt-5">Artikel</h4>
        </div>
    @endif
@endsection
@push('scripts')
    <script>
        $("#indonesia").click(function(){
            location.href = `{{route('news', 'id')}}`;
        });
        $("#english").click(function(){
            location.href = `{{route('news', 'en')}}`;
        });
    </script>
@endpush