@extends('layouts.admin.amaster')

@section('title','Ürünler Ekleme Sayfası')

@section('keywords','')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}/admin">Anasayfa</a></li>
                    <li class="breadcrumb-item active">Ürün Ekleme</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Ürün Ekleme</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{url('/')}}/admin/urun/save" method="post" enctype="multipart/form-data">
        @csrf <!--bir kod oluşturacak serverda da kod oluşturacak eşleşince formu kabul edecek-->
        <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Ürün adı</label>
                <div class="col-sm-10">
                    <input type="text" name="adi" class="form-control" placeholder="Ürün adı">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control"  placeholder="Description">
                </div>
            </div>



            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Keywords</label>
                <div class="col-sm-10">
                    <input type="text" name="keywords" class="form-control"  placeholder="Keywords">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 control-label">Ürün türü</label>
                <div class="col-sm-10">
                <select class="form-control" name="turu_id">
                    @foreach ($turler as $rs)
                    <option value="{{$rs->Id}}">{{$rs->adi}}</option>
                    @endforeach

                </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 control-label">Kategori</label>
                <div class="col-sm-10">
                    <select class="form-control" name="kategori_id">
                        @foreach ($kategori as $rs)
                            <option value="{{$rs->Id}}">{{$rs->adi}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Yazar</label>
                <div class="col-sm-10">
                    <input type="text" name="yazar" class="form-control"  placeholder="Yazar">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-10">
                    <input type="text" name="stok" value="0" class="form-control"  placeholder="Stok">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alış Fiyatı</label>
                <div class="col-sm-10">
                    <input type="text" name="afiyat" value="0" class="form-control"  placeholder="Alış Fiyatı">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Satış Fiyatı</label>
                <div class="col-sm-10">
                    <input type="text" name="sfiyat" value="0" class="form-control"  placeholder="Satış Fiyatı">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Ürün Açıklama</label>
                <div class="col-sm-10">
                    <textarea name="aciklama" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 control-label">Aktif durum</label>
                <div class="col-sm-10">
                    <select class="form-control" name="durum">
                        <option>Evet</option>
                        <option>Hayır</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 control-label">Ürün Ana Resim</label>
                <div class="col-sm-10">

                    <input type="hidden" name="resim2" value="null">
                    <input type="file" name="resim">
                    <p class="help-block">Resim Dosyası Seçiniz</p>


                </div>
            </div>



            <div class="form-group row">

            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Kaydet</button>
            <button type="submit" class="btn btn-default float-right">Geri</button>
        </div>
        <!-- /.card-footer -->
    </form>
</div>
@endsection
@section("java")
    <script src="{{url('/')}}/assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote('aciklama')
        })
    </script>

@endsection
