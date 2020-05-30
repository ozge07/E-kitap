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
        <h1>Sipariş Tamamlama</h1>
    </div>
    <hr class="soften">
    <div class="row">
        <div class="span8">

            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success')}}</p>
                </div><br>
            @endif

                <form method="post" action="{{url('/')}}/satinal"><!--toplam değerini form ile taşıdık-->
                    @csrf
                    Sipariş Tutarı : <input type="text" readonly name="toplam" value="<?php echo $toplam; ?>"><br>
                    <hr>
                    <b>Kargo Bilgileri</b> <br><br>
                    Adı Soyadı : <input name="adsoy" ><br>
                    Adres : &nbsp;  <input name="adres" ><br>
                    Şehir :      <input name="sehir" ><br>
                    Telefon :      <input name="tel" ><br>
                    <hr>
                    Kredi Kartı Bilgileri <br>
                    Adı Soyadı : <input name="kadsoy" ><br>
                    Kart No    : <input name="kartno" ><br>
                    Son Kullanım Tarihi Ay/Yıl: <input name="ay" > / <input name="yil"> <br>
                    Güvenlik Numarası (CVC):       <input name="cvc" ><br>



                    <input type="submit" class="btn btn-success" value="Satın al">
                </form>


        </div>

    </div>






@endsection


