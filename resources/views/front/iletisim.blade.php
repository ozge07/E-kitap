@extends('layouts.front.fmaster')

@section('title',$data[0]->adi)

@section('keywords',$data[0]->keywords)

@section('description',$data[0]->description)

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
        <h1>İletişim</h1>
    </div>
    <hr class="soften">
    <div class="row">
        <div class="span8">
            <h6>

            </h6>
            <p>
                {{$data[0]->iletisim}}
            </p>
        </div>

    </div>






@endsection


