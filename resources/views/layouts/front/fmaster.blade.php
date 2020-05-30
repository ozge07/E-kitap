<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
      <meta name="keywords" content="@yield('keywords')">
    <!-- Bootstrap styles -->
    <link href="{{url('/')}}/assets/front/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="{{url('/')}}/assets/front/css/style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="{{url('/')}}/assets/front/font-awesome/css/font-awesome.css" rel="stylesheet">
		<!--[if IE 7]>
			<link href="{{url('/')}}/assets/front/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="{{url('/')}}/assets/front/ico/bb.jpg">
  </head>
<body>
<!--
	Upper Header Section
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="{{$data[0]->twitter}}"><span class="icon-twitter"></span></a>
					<a href="{{$data[0]->facebook}}"><span class="icon-facebook"></span></a>
					<a href="{{$data[0]->youtube}}"><span class="icon-youtube"></span></a>

				</div>
            <!--<a class="active" href="{{url('/')}}"> <span class="icon-home"></span>Anasayfa</a>
				<a href="#"><span class="icon-user"></span> Hesabım</a>
				<a href="register.html"><span class="icon-edit"></span> Kayıt ol </a>
				<a href="{{url('/')}}/iletisim"><span class="icon-envelope"></span> İletişim</a>
				<a href="cart.html"><span class="icon-shopping-cart"></span>Sepetteki ürün <span class="badge badge-warning"> Toplam Tutar</span></a>
				-->
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
        <a class="logo" href="{{url('/')}}"><span>Twitter Bootstrap ecommerce template</span><i>{{$data[0]->adi}}</i>
		<img src="{{url('/')}}/assets/front/img/u.png" height="12" alt="bootstrap sexy shop">
	</a>
	</h1>
	</div>
	<div class="span4">
	<div class="offerNoteWrapper">
	<h1 class="dotmark">
	<i class="icon-cut"></i>
	İndirim günlerini kaçırmayın!
	</h1>
	</div>
	</div>
	<div class="span4 alignR">
	<p><br> <strong> Açık (24/7) </strong><br><br></p>

	</div>
</div>
</header>

<!--
Navigation Bar Section
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">

            <?php
                $home=null;
                $hakkimizda=null;
                $iletisim=null;
                $bizeyazin=null;
                $sepetim=null;
                if($menu=='home')
                    $home='active';
                else if ($menu=='hakkimizda')
                    $hakkimizda='active';
                else if ($menu=='iletisim')
                    $iletisim='active';
                else if ($menu=='bizeyazin')
                    $bizeyazin='active';
                else if ($menu=='sepetim')
                    $sepetim='active';
                ?>

			  <li class="{{$home}}"><a href="{{url('/')}}">Anasayfa</a></li>
			  <li class="{{$hakkimizda}}"><a href="{{url('/')}}/hakkimizda">Hakkımızda</a></li>
			  <li class="{{$iletisim}}"><a href="{{url('/')}}/iletisim">İletişim</a></li>
                <li class="{{$bizeyazin}}"><a href="{{url('/')}}/bize_yazin">Bize Yazın</a></li>
              <li class="{{$sepetim}}"><a href="{{url('/')}}/sepetim">Sepetim</a></li>
			</ul>

			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Remember me
					</label>
					<button type="submit" class="shopBtn btn-block">Sign in</button>
				  </div>
				</form>
				</div>
			</li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
<!--
Body Section
-->
	<div class="row">


<!--sidebar-->
@yield('sidebar')
	<div class="span9">

<!-- slider-->
@yield('slider')

<!--
content -orta içerik
-->

@yield('content')
<!--
Clients
-->

<!--
Footer
-->
<footer class="footer">
<div class="row-fluid">

<div class="span6">
<h5>Bilgiler</h5>
<a href="{{url('/')}}/iletisim">İletişim</a><br>
<a href="{{url('/')}}/hakkimizda">Hakkımızda</a><br>
 </div>

 <div class="span6">
<h5>Harita</h5>
     <iframe src="https://www.google.com/maps/embed?pb=
     !1m18!1m12!1m3!1d3011.6406721465964!2d29.04429331537
     365!3d40.98934847930276!2m3!1f0!2f0!3f0!3m2!1i1024!2
     i768!4f13.1!3m3!1m2!1s0x14cac789f96daa8d%3A0xca0e21f
     c2c9db3f6!2zQW5hZG9sdSBZYWthc8SxLCBFxJ9pdGltLCAzNDcyM
     iBLYWTEsWvDtnkvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v159059
     4037091!5m2!1str!2str" width="200" height="200" frameborder="0"
             style="border:0;" allowfullscreen="" aria-hidden="false"
             tabindex="0">

     </iframe>
 </div>
 </div>
</footer>
</div><!-- /container -->

<div class="copyright">
<div class="container">
	<p class="pull-right">

	</p>
	<span>Copyright &copy; 2013 Shopping template</span>
</div>
</div>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{url('/')}}/assets/front/js/jquery.js"></script>
	<script src="{{url('/')}}/assets/front/js/bootstrap.min.js"></script>
	<script src="{{url('/')}}/assets/front/js/jquery.easing-1.3.min.js"></script>
    <script src="{{url('/')}}/assets/front/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="{{url('/')}}/assets/front/js/shop.js"></script>
  </body>
</html>
