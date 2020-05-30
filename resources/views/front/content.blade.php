@section('content')

<div class="well well-small">
    <h3>Yeni Kitaplarımız</h3>
    <hr class="soften"/>
    <div class="row-fluid">
        <div id="newProductCar" class="carousel slide">
            <div class="carousel-inner">
                <div class="item active">
                    <ul class="thumbnails">
                        <?php
                        $say=0;
                        ?>
                        @foreach($yeniler as $rs)
                        <li class="span3">
                            <div class="thumbnail">
                                <a class="zoomTool" href="{{url('/')}}/urun/{{$rs->Id}}" title="add to cart"><span class="icon-search"></span>Ürüne git</a>
                                <a href="#" class="tag"></a>
                                <a href="{{url('/')}}/urun/{{$rs->Id}}"><img src="{{url('/')}}/userfiles/{{$rs->resim}}" alt="Resim yok"></a>
                            </div>
                        </li>
                            <?php
                            $say=$say+1;
                            if($say>3)
                              {
                            ?>
                    </ul>
                </div>
                <div class="item">
                    <ul class="thumbnails">
                            <?php
                        $say=0;
                            }
                            ?>
                        @endforeach

                    </ul>
                </div>
            </div>
            <a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a>
        </div>
    </div>
    <div class="row-fluid">
        <ul class="thumbnails">
            <?php
            $say=0;
            ?>
            @foreach($yeniler as $rs)
                <li class="span3">
                    <div class="thumbnail">
                        <a class="zoomTool" href="{{url('/')}}/urun/{{$rs->Id}}" title="add to cart"><span class="icon-search"></span>Ürüne git</a>
                        <a href="#" class="tag"></a>
                        <a href="{{url('/')}}/urun/{{$rs->Id}}"><img src="{{url('/')}}/userfiles/{{$rs->resim}}" alt="Resim yok"></a>
                    </div>
                </li>
                <?php
                $say=$say+1;
                if($say>3)
                {
                ?>
        </ul>
    </div>
    <div class="item">
        <ul class="thumbnails">
            <?php
            $say=0;
            }
            ?>
            @endforeach
        </ul>
    </div>
</div>
<!--
Featured Products
-->
<div class="well well-small">
    <hr class="soften"/>
    <div class="row-fluid">
        <ul class="thumbnails">
            <?php
            $say=0;
            ?>
            @foreach($yeniler as $rs)
                <li class="span3">
                    <div class="thumbnail">
                        <a class="zoomTool" href="{{url('/')}}/urun/{{$rs->Id}}" title="add to cart"><span class="icon-search"></span>Ürüne git</a>
                        <a href="#" class="tag"></a>
                        <a href="{{url('/')}}/urun/{{$rs->Id}}"><img src="{{url('/')}}/userfiles/{{$rs->resim}}" alt="Resim yok"></a>
                    </div>
                </li>
                <?php
                $say=$say+1;
                if($say>3)
                {
                ?>
        </ul>
    </div>
    <div class="item">
        <ul class="thumbnails">
            <?php
            $say=0;
            }
            ?>
            @endforeach
        </ul>
    </div>
</div>

</div>
</div>
@endsection
