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
        <!-- people reviews -->
        @component('home.reviews')
        @endcomponent
        <!-- people reviews END -->
        <!-- Price Table -->
        @component('home.prices')
        @endcomponent
        <!-- Price Table End -->
        <!-- contact area -->
        @component('home.contacts')
        @endcomponent
        <!-- contact area END -->
        <!-- New Treatments -->
        @component('home.pop_questions')
        @endcomponent
        <!-- New Treatments END -->
        <!-- Gifts & Cards -->
        @component('home.our_resources')
        @endcomponent
        <!-- Gifts & Cards End -->
        <!-- Experience The Spa -->
{{--        @component('home.technics')--}}
{{--        @endcomponent--}}
        <!-- Experience The Spa End -->
        <!-- contact area -->
        @component('home.contacts')
        @endcomponent
        <!-- contact area END -->
    </div>
    <!-- Contact Area END -->
</div>
<!-- Content END-->
@endsection
