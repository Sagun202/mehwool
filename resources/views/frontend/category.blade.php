@extends('frontend.layouts.master')

@section('content')
<div class="padd1">
   
    @livewire('category',['category'=>$category])

</div>
@endsection