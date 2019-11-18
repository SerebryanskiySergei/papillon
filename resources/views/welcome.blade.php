@extends('layout')

@section('content')
<!-- Content -->
<div class="page-content">
    <!-- Slider -->
    @component('home.slider')
    @endcomponent
    <!-- Slider END -->
    <!-- contact area -->
    <div class="content-block">
        <!-- Our Services -->
        @component('home.our_benefits')
        @endcomponent
        <!-- Our Services -->
        <!-- New Treatments -->
        @component('home.pop_questions')
        @endcomponent
        <!-- New Treatments END -->
        <!-- Callout With Moving BG -->
        @component('home.moving-bg')
        @endcomponent
        <!-- Callout With Moving BG End -->
        <!-- Spa & Beauty Care -->
        @component('home.our_resources')
        @endcomponent
        <!-- Spa & Beauty Care End -->
        <!-- Experience The Spa -->
        @component('home.technics')
        @endcomponent
        <!-- Experience The Spa End -->
    </div>
    <!-- Contact Area END -->
</div>
<!-- Content END-->
@endsection
