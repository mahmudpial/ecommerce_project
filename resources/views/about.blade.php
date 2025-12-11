@extends('front.layout.app')
@section('title','About Us Page')


@section('content')

<h1>{{ $heading }}</h1>
@if($day == 'Thu')
It's a holiday ,time to relax
@elseif($day == 'Fri')
It's Friday, the weekend is near
@elseif($day == 'Sat')
It's Saturday, enjoy your day!
@elseif($day == 'Sun')
It's Sunday, get ready for the week ahead
@elseif($day == 'Mon')
It's Monday, back to work!
@elseif($day == 'Tue')
It's Tuesday, keep going!
@elseif($day == 'Wed')
It's Wednesday, we're halfway through!
@else
Invalid day
@endif

@endsection