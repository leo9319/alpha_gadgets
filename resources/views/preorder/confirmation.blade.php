@extends('layouts.app')

@section('header_styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')

<div class="container py-5 w-50 mx-auto">
    <div class="text-center">
        <h1 class="display-1 text-center">Thank You!</h1>
        <i class="fa fa-check fa-5x text-success"></i>
        <p class="pt-4 text-secondary">You order is on our way for further processing. Please check you email for a confirmation email. We will notify you on the next steps via the information you provided.</p>
        <p>We can't wait to meet you and deliver your desired handset in pristine condition.</p>
        <small>&copy; alpha gadgets {{ now()->year }}</small>
    </div>
</div>

@endsection