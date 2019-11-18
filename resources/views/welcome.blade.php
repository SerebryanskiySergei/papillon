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
        @component('home.our-services')
        @endcomponent
        <!-- Our Services -->
        <!-- New Treatments -->
        @component('home.treatments')
        @endcomponent
        <!-- New Treatments END -->
        <!-- Callout With Moving BG -->
        @component('home.moving-bg')
        @endcomponent
        <!-- Callout With Moving BG End -->
        <!-- Spa & Beauty Care -->
        @component('home.spa-services')
        @endcomponent
        <!-- Spa & Beauty Care End -->
        <!-- Experience The Spa -->
        @component('home.experience')
        @endcomponent
        <!-- Experience The Spa End -->
    </div>
    <!-- Contact Area END -->
</div>
<!-- Content END-->
@endsection
