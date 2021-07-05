@extends('layouts.app')
@section('styles')
    <link href="{{asset('css/page.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <h2 class="text-center">Товари</h2>
    <div class="row">

        @foreach ($data as $value)
            <div class="col-3 mt-2 mb-2">
                <div class="advertise-block">
                    <p class="image-center">
                        <img src='{{$value[5]}}'>
                    </p>
                    <div class="text-center product-name">{{$value[1]}}</div>
                    <div class="text-center price"><b> {{$value[4]}} грн</b></div>
                    <button type="button" class="btn btn-warning">Купити</button>
                    <div class="deskr">Опис: {{$value[3]}}</div>
                    <div class="deskr">В наявності: {{$value[6]}}</div>
                    <div class="deskr mb-2">qty: {{$value[2]}}</div>
                </div>
            </div>

        @endforeach
    </div>
    </div>
@endsection
