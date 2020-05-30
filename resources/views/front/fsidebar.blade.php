
<div id="sidebar" class="span3">
    <div class="well well-small">
        <ul class="nav nav-list">
            @foreach($kategori as $rs)
            <li><a href=""><span class="icon-chevron-right"></span>{{$rs->adi}}</a></li>
            @endforeach
           </ul>
    </div>
</div>

