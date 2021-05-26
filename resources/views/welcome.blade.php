@extends("layouts.layout")

@section('title')
    burat namber 2
@endsection

@section('content')
    <p>welcome page</p>

    <a href="/thor">go to thor</a>

    <img src="{{ URL::to('images/image1.jpg') }}" alt="picture">

@endsection