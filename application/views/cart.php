<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | Busanakoe</title>
    <!--Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"> 
    <!--Custom CSS-->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/prettyPhoto.css') ?>" rel="stylesheet"> <!-- ???-->
    <link href="<?php echo base_url('assets/css/price-range.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/animate.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/main.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/responsive.css') ?>" rel="stylesheet">


</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 085-230-808-158</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> busanakoe@gmail.cm</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?php echo site_url()."/tampil/keVhomePel";?>" ><img src="<?php echo base_url('assets/images/home/logo.png') ?>" alt="" /></a> 
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo site_url()."/tampil/keVhomeAdm";?>"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><?php
									$text_cart_url  = '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>';
									$text_cart_url .= ' Shopping Cart: '. $this->cart->total_items() .' items';
									?>
									<?=anchor(site_url()."/tampil/keCart", $text_cart_url)?>
										
								</li>
								<?php if($this->session->userdata('nama')) { ?>
									<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Hello, <?=$this->session->userdata('nama')?></a></li>
									<li><a href="<?php echo site_url()."/sign/";?>"><i class="fa fa-lock"></i> Logout</a></li>
								<?php } else { ?>
									<li><a href="<?php echo site_url()."/sign";?>"><i class="fa fa-lock"></i> Login</a></li>
								<?php } ?>
								

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo site_url()."/tampil/keVhomePel";?>">Home</a></li>
								<li><a href="<?php echo site_url()."/tampil/keContactUs";?>">Contact</a></li> 
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
<?php $total = 0; ?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="description">Produk</td>
							<td class="price">Harga</td>
							<td class="quantity">Jumlah</td>
							<td class="total">Total</td>
							<td></td>
						</tr					</thead>
						<?php 
						foreach ($this->cart->contents() as $items): 
							$subtotal = $items['qty'] * $items['price'];
                            $total += $subtotal;

							?>
						<tr>
						<!-- Data dari database-->
							<td class="cart_description">
								<h4><?= $items['name'] ?></h4>
							</td>
							<td class="cart_price">
								<p>Rp. <?php echo $this->cart->format_number($items['price']); ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="<?= $items['qty'] ?>" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?php echo site_url()."/tampil/clear_cart_id/".$items['id']?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>
					<tfoot>
                        <tr>
                            <td class="cart_total" colspan="4" align="right"><p class="cart_total_price">Total</p></td>
                            <td class="cart_total" ><p class="cart_total_price"><?php echo $this->cart->format_number($total); ?></p></td>
                        </tr>
                    </tfoot>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
	<center><h1>PENGIRIMAN DAN PEMBAYARAN</center>
	<!--Form PEMBAYARAN-->
	
		<div class="container signup-form" style="margin: 10px;">
			<form role="#" action="<?php echo site_url('Tampil/do_order')?>" method="post" enctype="multipart/form-data" >
				<form>
				<div class="col-md-4"></div>
				<div class="col-md-7">
					<div class="form-group"> 
						<label for="full_name_id" class="control-label" >Nama Penerima</label>
						<input type="text" class="form-control" id="penerima" name="nama" placeholder="Masukkan nama Penerima">
					</div>	
					<div class="form-group"> 
						<label for="full_name_id" class="control-label">Nomer Telepon</label>
						<input type="text" class="form-control" id="telepon" name="no_telp" placeholder="Masukkan nomer Telepon">
					</div>	
					<div class="form-group"> 
						<label for="full_name_id" class="control-label">Alamat</label>
						<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan nomer Telepon">
					</div>									
						
					<div class="form-group"> 
						<label for="state_id" class="control-label">Kota</label>
						<select name="kota" class="form-control" id="state_id">
							<option>--Silahkan pilih--</option>
							<option>Denpasar</option>
							<option>Singaraja</option>
							<option>Jimbaran</option>
							<option>Surabaya</option>
						</select>					
					</div>

					<div class="form-group"> 
						<label for="state_id" class="control-label">Metode Pembayaran</label>
						<select name="metode" class="form-control" id="state_id">
							<option>--Silahkan pilih--</option>
							<option>JNE</option>
							<option>TIKI</option>
							<option>POS Indonesia</option>
						</select>					
					</div>		
	
					<div class="form-group"> 
						<label for="full_name_id" class="control-label">Total Pembayaran (Rp.)</label>
						<input type="text" class="form-control" id="alamat" name="total" value="<?php echo $total ?>" readonly>
					</div>	

					<div class="form-group"> 
						<button type="submit" class=" btn btn-primary">Submit</button>
					</div>     
				</div>
			</form>	
		</form>
		</div>		
		<!--End Form PEMBAYARAN-->
	

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div>
						<center>
							<h3 style="color: #7a7979; font-family: cursive,sans-serif">"Kami memberikan produk terbaik dengan harga terjangkau"</h3>
						</center>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Menyediakan</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Pakaian Pria</a></li>
								<li><a href="#">Pakaian Wanita</a></li>
								<li><a href="#">Aksesoris</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-widget">
							<h2>Busanakoe</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Home</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2 ">
						<div class="single-widget">
							<h2>Tentang kami</h2> 
							<p style="color: #a3a3a3">Perum Jadi Pesona XVII no 7, Denpasar Bali, Indonesia</p>
							<p style="color: #a3a3a3">Busanakoe@gmail.com</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Busanakoe © 2017</p>
				
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->

	<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.scrollUp.min.js') ?>"></script> <!--Animasi-->
	<script src="<?php echo base_url('assets/js/price-range.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js') ?>" ></script>
</body>
</html>