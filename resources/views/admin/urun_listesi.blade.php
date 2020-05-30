@extends('layouts.admin.amaster')

@section('title','Ürünler Listesi')

@section('keywords','')

@section('content')


<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">


            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                    <li class="breadcrumb-item active">Ürünler</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"></h3><a href="{{url('/')}}/admin/urun/ekle" class="btn btn-success btn-sm"> Kitap Ekle</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Adı</th>
                <th>Türü</th>
                <th>Kategorisi</th>
                <th>Fiyat</th>
                <th>Stok</th>
                <th>Durum</th>
                <th>Resim</th>
                <th>Düzenle</th>
                <th>Sil</th>
            </tr>
            </thead>
            <!--
            //foreach ($users as $user) {
            //echo $user->name;
            //}

            //burda php tagını kullanmak zorunda ikiside kullanılabilir-->


            @foreach($urunler as $urun) <!-- laravel foreach döngüsü-->
            <tr>
                <td>{{$urun->Id}}</td>
                <td>{{$urun->adi}}</td>
                <td>{{$urun->turu}}</td>
                <td>{{$urun->kategori}}</td>
                <td>{{$urun->sfiyat}}</td>
                <td>{{$urun->stok}}</td>
                <td>{{$urun->durum}}</td>
                <td><img src="{{url('/')}}/userfiles/{{$urun->resim}}" height="50"></td>
                <td>
                    <a href="{{url('/')}}/admin/urun/edit/{{$urun->Id}}" class="btn btn-block btn-primary btn-xs">Düzenle</a>
                </td>
                <td>
                    <a href="{{url('/')}}/admin/urun/destroy/{{$urun->Id}}" class="btn btn-block btn-danger btn-xs" onClick="return confirm('Silinecek Emin misin?')">Sil</a>
                </td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
    </div>
</div>
@endsection
