<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Kategori</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo site_url()."/tampil/keVhomekat_admin/".'pria';?>">Pria</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo site_url()."/tampil/keVhomekat_admin/".'wanita';?>">Wanita</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo site_url()."/tampil/keVhomekat_admin/".'aksesoris';?>">Aksesoris</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					</div>
				</div>

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php foreach($products as $product){ ?>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo base_url('upload/'.$product->gambar) ?>" alt="" width="268" height="249" />
											<h2>Rp. <?=$product->harga_produk?></h2>
											<p><?=$product->nama_produk?></p>
											
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>Rp. <?=$product->harga_produk?></h2>
												<p><?=$product->nama_produk?></p>
												</a>
											</div>
										</div>
								</div>
							</div>
						</div>

						<?php }; ?>						
					</div><!--features_items-->	
				</div>
				
			</div>
		</div>
	</section>