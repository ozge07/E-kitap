@extends('layouts.front.fmaster')

@section('title','Sepetim')

@section('keywords','')

@section('description','')

@section('sidebar')
    @include('front.fsidebar')
@endsection

@section('slider')

@endsection

@section('content')

    <!--
Body Section
-->
    <hr class="soften">
    <div>
        <h1>Sipariş Tamamlandı</h1>
    </div>
    <hr class="soften">
    <div class="row">
        <div class="span8">

            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success')}}</p>
                </div><br>
            @endif



        </div>
    </div>

@endsection


