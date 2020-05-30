@extends('layouts.admin.amaster')

@section('title','Site Ayarları')


@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Site Ayarları</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}/admin">Anasayfa</a></li>
                    <li class="breadcrumb-item active">Ayarlar</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="row">
    <div class="col-12">
        <!-- Custom Tabs -->
        <div class="card">
            <div class="card-header d-flex p-0">
                <h3 class="card-title p-3"></h3>
                <ul class="nav nav-pills ml-auto p-2">
                    <li class="active"><a class="nav-link active" href="#tab_1" data-toggle="tab">Genel Bilgiler </a></li>
                    <li class=""><a class="nav-link" href="#tab_2" data-toggle="tab">SMTP Settings</a></li>
                    <li class=""><a class="nav-link" href="#tab_3" data-toggle="tab">Hakkımızda</a></li>
                    <li class=""><a class="nav-link" href="#tab_4" data-toggle="tab">İletişim</a></li>

                </ul>

            </div><!-- /.card-header -->
            <form method="post" action="{{url('/')}}/admin/settingsupdate/{{$data[0]->Id}}">
                @csrf
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <b>Site Genel Bilgiler</b>
                        <form class="form-horizontal">
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Site Title</label>
                                    <input type="text" class="form-control" name="adi" value="{{$data[0]->adi}} "id="inputEmail3" placeholder="Site Title">
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Keywords</label>
                                    <input type="text" class="form-control" name="keywords" value="{{$data[0]->keywords}}" id="inputPassword3" placeholder="Keywords">
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                                    <input type="text" class="form-control" name="description" value="{{$data[0]->description}}" id="inputPassword3">
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Adres</label>
                                    <input type="text" class="form-control" name="adres" value="{{$data[0]->adres}}" id="inputPassword3">
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tel</label>
                                    <input type="text" class="form-control" name="tel" value="{{$data[0]->tel}}" id="inputPassword3">
                                </div>



                            </div>
                            <!-- /.card-body -->

                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                        <b>SMTP Bilgileri</b>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Smtp Server</label>
                            <input type="text" class="form-control" name="smtpserver" value="{{$data[0]->smtpserver}} "id="inputEmail3" placeholder="Site Title">
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Smtp email</label>
                            <input type="text" class="form-control" name="smtpemail" value="{{$data[0]->smtpemail}}" id="inputPassword3">
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Smtp Password</label>
                            <input type="password" class="form-control" name="smtppassword" value="{{$data[0]->smtppassword}}" id="inputPassword3">
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Smtp Port</label>
                            <input type="text" class="form-control" name="smtpport" value="{{$data[0]->smtpport}}" id="inputPassword3">
                        </div>


                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">
                       <b>Hakkımızda </b>
                        <div class="row"><br>
                        <textarea name="hakkimizda">
                            {{$data[0]->hakkimizda}}
                        </textarea></div>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_4">
                        <b>İletişim </b>
                        <div class="row"><br><br>
                        <textarea name="iletisim">
                            {{$data[0]->iletisim}}
                        </textarea></div>
                    </div><br>

                </div>
                <input type="submit" class="btn btn-info" value="GUNCELLE">

                <!-- /.tab-content -->
            </div><!-- /.card-body -->
            </form>
        </div>
        <!-- ./card -->
    </div>
    <!-- /.col -->
</div>

@endsection

