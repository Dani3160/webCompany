@extends('layouts.master')

@if ($language == "en")
    @section('title', 'Name Company | Service')
@else
    @section('title', 'Name Company | Servis')
@endif

@section('curpage')
    @php
        $curpage = 'service';
    @endphp
@endsection

@section('content')
    @if ($language == "en")
        <div class="container">
            <h4 class="mt-5">Service</h4>
        </div>
    @else
        <div class="container">
            <h4 class="mt-5">Servis</h4>
        </div>
    @endif
@endsection
@push('scripts')
    <script>
        $("#indonesia").click(function(){
            location.href = `{{route('service', 'id')}}`;
        });
        $("#english").click(function(){
            location.href = `{{route('service', 'en')}}`;
        });
    </script>
@endpush