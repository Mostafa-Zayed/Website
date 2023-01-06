@extends('layouts.app')

@section('content')
<!-- Start Slider Home -->
@include('sections.sidebar')

<!-- Start Features Section -->
@include('sections.features')
<!-- End Features Section -->

<!-- Start How it works Section -->
@include('sections.works')
<!-- End How it works Section -->

<!-- Start App Screenshots Section -->
@include('sections.screenshots')
<!-- End App Screenshots Section -->

<!-- Start Pricing Section -->

<!-- End Pricing Section -->

<!-- Start Reviews Section -->
@include('sections.reviews')
<!-- End Reviews Section -->

<!-- Start Faqs Section -->
@include('sections.faqs')
<!-- End Faqs Section -->

<!-- Start Blog Section -->
@include('sections.blog')
<!-- End Blog Section -->

<!-- Start Contact Section -->
@include('sections.contact')
<!-- End Contact Section -->
@endsection