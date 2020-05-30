@extends('layouts.admin.amaster')

@section('title','Mesaj Düzenleme Sayfası')

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
                    <li class="breadcrumb-item active">Mesaj Düzenleme</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Mesaj Düzenleme</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{url('/')}}/admin/message/edit/{{$veri[0]->Id}}" method="post">
        @csrf <!--bir kod oluşturacak serverda da kod oluşturacak eşleşince formu kabul edecek-->
        <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Adı Soyadı</label>
                <div class="col-sm-10">
                   {{$veri[0]->adsoy}}
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                   {{$veri[0]->email}}
                </div>
            </div>



            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Konu</label>
                <div class="col-sm-10">
                   {{$veri[0]->subject}}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Ip</label>
                <div class="col-sm-10">
                    {{$veri[0]->ip}}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tarih</label>
                <div class="col-sm-10">
                    Gönderilme : {{$veri[0]->created_at}}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Mesaj</label>
                <div class="col-sm-10">
                   {{$veri[0]->message}}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">İşlem Notu</label>
                <div class="col-sm-8">
                    <textarea rows="5" columns="10" name="note">{{$veri[0]->note}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 control-label">Durumu</label>
                <div class="col-sm-10">
                    {{$veri[0]->status}}
                </div>
            </div>
            <div class="form-group row">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Güncelle</button>
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
