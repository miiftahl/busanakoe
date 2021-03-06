<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 padding-right">
					<div class="features_items">
						<h2 class="title text-center">Tambah Produk</h2>	
						<!--Form input barang-->
							<div class="container signup-form" style="margin: 10px;">
							    <form role="form" action="<?php echo site_url('tampil/do_addproduct')?>" method="post" enctype="multipart/form-data" >

							        <div class="form-group">
							          	<div class="col-md-2"><label for="kode_produk" >Kode Produk</label></div>
							            <div class="col-md-6">
							                <input type="text" class="form-control" name="kode_produk" placeholder="Masukkan Kode Produk">
							            </div> 
							            <div class="col-md-12"></div>
							        </div>
							        
							        <div class="form-group">
							         	<div class="col-md-2"><label for="nama_produk">Nama Produk</label></div>
							            <div class="col-md-6">
							                  <input type="text" class="form-control" name="nama_produk" placeholder="Masukkan Nama Produk">
							            </div>
							            <div class="col-md-12"></div>
							        </div>
							         
							        <div class="form-group">
							            <div class="col-md-2"><label for="kategori">Kategori </label></div>
							                <div class="col-md-6">
							            		<select name="kategori"  class="form-control">
							                    	<option>--Silahkan pilih--</option>
							                    	<option>Pria</option>
							                    	<option>Wanita</option>
							                    	<option>Aksesoris</option>
							                	</select>
							            	</div>
							            <div class="col-md-12"></div>
							        </div>
							          
							        <div class="form-group">
							        	<div class="col-md-2"><label for="harga_produk">Harga Produk </label></div>
							            <div class="col-md-6">
							                <input type="text" class="form-control" name="harga_produk" placeholder="Masukkan Harga Produk">
							            </div>
							            <div class="col-md-12"></div>
							        </div>

							        <div padding="3px" class="form-group">
							        	<div class="col-md-2"><label for="uploadimage">Upload Image </label></div>
							            <div class="col-md-6">
							                <input type="file" name="uploadimage" id="uploadimage">
							                <p class="help-block"> Allowed formats: jpeg, jpg, gif, png </p>
							            </div>
							            <div class="col-md-12"></div>
							        </div>
							          
							        <div class="form-group">
							            <div class="col-md-2"><label for="deskripsi">Deskripsi</label></div>
							            <div class="col-md-6">
							                <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Produk">
							            </div>
							            <div class="col-md-12">
							         </div>

							        <div class="form-group">
							            <div class="col-md-2"><label for="stok">Stok</label></div>
							            <div class="col-md-6">
							                <input type="text" class="form-control" name="stok" placeholder="Stok Produk">
							            </div>
							            <div class="col-md-12">
							        </div>
							   
							            <div class="row">
							              <div class="col-md-6"></div>
							              <div class="col-md-6">
							                <button type="submit" class="btn btn-info">Tambahkan</button>
							              </div>
							            </div>
							    </form>
							</div>
							<!--End Form input barang-->
					</div>
				</div>
			</div>
		</div>
</section>