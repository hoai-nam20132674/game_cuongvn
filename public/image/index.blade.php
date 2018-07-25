@extends('frontEndUser.layout.default_home')

@section('slide-header')
	@include('frontEndUser.layout.slide-header')
@endsection()
@section('counter')
	@include('frontEndUser.page-content.counter')
@endsection()

@section('procedure')
	@include('frontEndUser.page-content.procedure')
@endsection()

@section('why-choose')
	@include('frontEndUser.page-content.why-choose')
@endsection()

@section('blog')
	@include('frontEndUser.page-content.blog')
@endsection()

@section('feedback')
	@include('frontEndUser.page-content.feedback')
@endsection()
