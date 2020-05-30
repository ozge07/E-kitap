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
        <h1>Sepetim</h1>
    </div>
    <hr class="soften">
    <div class="row">
        <div class="span8">

            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success')}}</p>
                </div><br>
            @endif
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Adı</th>
                    <th>Miktar</th>
                    <th>Fiyat</th>
                    <th>Tutar</th>
                    <th>Resim</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <!--
                //foreach ($users as $user) {
                //echo $user->name;
                //}

                //burda php tagını kullanmak zorunda ikiside kullanılabilir-->

            <?php $top=0; ?>
            @foreach($veriler as $urun) <!-- laravel foreach döngüsü-->
                <tr>
                    <td>{{$urun->Id}}</td>
                    <td>{{$urun->adi}}</td>
                    <td>{{$urun->miktar}}</td>
                    <td>{{$urun->sfiyat}} TL</td>
                    <td>{{$urun->sfiyat * $urun->miktar}} TL</td>
                    <td><img src="{{url('/')}}/userfiles/{{$urun->resim}}" height="22"></td>
                    <td>
                        <a href="{{url('/')}}/sepet_sil/{{$urun->Id}}" class="btn btn-block btn-danger btn-xs" onClick="return confirm('Silinecek Emin misin?')">Sil</a>
                    </td>

                </tr>
            <?php $top=$top+$urun->sfiyat * $urun->miktar; ?>
                @endforeach
                </tbody>
            </table>
            Sepet toplamı :  <?php echo $top; ?> TL <br>

                <form method="post" action="{{url('/')}}/siparis_tamamla"><!--toplam değerini form ile taşıdık-->
                    @csrf
                    <input type="hidden" readonly name="toplam" value="<?php echo $top; ?>">
                    <input type="submit" class="btn btn-success" value="Siparişi Tamamla">
                </form>

        </div>

    </div>






@endsection


