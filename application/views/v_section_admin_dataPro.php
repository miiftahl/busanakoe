<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 padding-right">
					<h2 class="title text-center">Data Produk</h2>	
					<div class="container">
						        <div class="row col-md-10  custyle">
						            <table class="table table-striped custab">
							            <thead>
							           
							                <tr>
							                    <th>Kode Produk</th>
							                    <th>Nama Produk</th>
							                    <th>Kategori</th>
							                    <th>Harga Produk</th>
							                    <th>Gambar</th>
							                    <th>Deskripsi</th>
							                    <th>Stok</th>
							                    <th class="text-center">Action</th>
							                </tr>
							            </thead>

					            		<?php foreach($products as $product){ ?>
					                    <tr>
					                        <td><?=$product->kode_produk?></td>
					                        <td><?=$product->nama_produk?></td>
					                        <td><?=$product->kategori?></td>
					                        <td>Rp. <?=$product->harga_produk?></td>
					                        <td><img src="<?php echo base_url('upload/'.$product->gambar) ?>" alt="" width="268" height="249" /></td>
					                        <td><?=$product->deskripsi?></td>
					                        <td><?=$product->stok?></td>
					                        <td class="text-center">
					                        <a class='btn btn-info btn-xs' href="<?php echo site_url()."/tampil/keFormUpdate/".$product->kode_produk;?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
					                        <a href="<?php echo site_url()."/tampil/do_delproduct/".$product->kode_produk;?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
					                    </tr>
					                    <?php }; ?>	
						            </table>
						        </div>
						    </div>	
				</div>
			</div>
		</div>
</section>