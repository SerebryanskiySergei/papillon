@extends('layout')

@section('content')
<div class="page-content">
    @component('home.heading')
    @endcomponent
    <div class="content-block">
        {{-- Introduction to offer --}}
        @component('home.introduction')
        @endcomponent
        {{-- Main offer --}}
        @component('home.offer')
        @endcomponent
        {{-- For whom --}}
        @component('home.auditory')
        @endcomponent
        {{-- Advantages --}}
        @component('home.advantages')
        @endcomponent
        {{-- Master --}}
        @component('home.master')
        @endcomponent
        {{-- Office --}}
        @component('home.office')
        @endcomponent
        {{-- Use cases --}}
        @component('home.use_cases')
        @endcomponent
        {{-- Contacts --}}
        @component('home.contacts')
        @endcomponent
        {{-- Examples --}}
        @component('home.examples')
        @endcomponent
        {{-- Results --}}
        @component('home.results')
        @endcomponent
        {{-- Reviews --}}
        @component('home.reviews')
        @endcomponent
        {{-- Prices --}}
        @component('home.prices')
        @endcomponent
        {{-- Contacts --}}
        @component('home.contacts')
        @endcomponent
        {{-- Our products --}}
        @component('home.products')
        @endcomponent
        {{-- Questions --}}
        @component('home.questions')
        @endcomponent
    </div>
</div>
@endsection
