@extends('layouts.admin.amaster')

@section('title','Sayfa Başlığı')

@section('keywords','')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Boş Sayfa</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}/admin">Anasayfa</a></li>
                    <li class="breadcrumb-item active">sayfa</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
    <!-- Content İçeriği buraya gelecek-->

@endsection

