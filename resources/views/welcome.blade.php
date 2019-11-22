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
        <!-- contact area -->
        @component('home.contacts')
        @endcomponent
        <!-- contact area END -->
        <!-- New Treatments -->
        @component('home.pop_questions')
        @endcomponent
        <!-- New Treatments END -->
        <!-- Spa & Beauty Care -->
        @component('home.our_resources')
        @endcomponent
        <!-- Spa & Beauty Care End -->
        <!-- Experience The Spa -->
        @component('home.technics')
        @endcomponent
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
