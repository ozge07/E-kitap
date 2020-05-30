@extends('layouts.admin.amaster')

@section('title','Mesaj Listesi')

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
                    <li class="breadcrumb-item active">Mesajlar</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="card">
    <div class="card-header">

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Adı</th>
                <th>Email</th>
                <th>Konu</th>
                <th>Durum</th>
                <th>Oku</th>
                <th>Sil</th>
            </tr>
            </thead>
            <!--
            //foreach ($users as $user) {
            //echo $user->name;
            //}

            //burda php tagını kullanmak zorunda ikiside kullanılabilir-->


            @foreach($datas as $rs) <!-- laravel foreach döngüsü-->
            <tr>
                <td>{{$rs->Id}}</td>
                <td>{{$rs->adsoy}}</td>
                <td>{{$rs->email}}</td>
                <td>{{$rs->subject}}</td>
                <td>{{$rs->status}}</td>
                <td>
                    <a href="{{url('/')}}/admin/message/edit/{{$rs->Id}}" class="btn btn-block btn-primary btn-xs">Oku/Detay</a>
                </td>
                <td>
                    <a href="{{url('/')}}/admin/message/destroy/{{$rs->Id}}" class="btn btn-block btn-danger btn-xs" onClick="return confirm('Silinecek Emin misin?')">Sil</a>
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
