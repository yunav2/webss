<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php
				$grand_total = 0;
				if ($cart = $this->cart->contents())
				 {
				 	foreach ($cart as $item)
				 	{
				 		$grand_total = $grand_total + $item['subtotal'];
				 	}

				 	echo "<h4>Grand Total  : $".number_format($grand_total,0,',','.');

				?>
			</div><br><br>

			<h3>Input Alamat Pengiriman dan Pembayaran</h3>

			<form method="post" action="<?php echo base_url()?>dashboard/processOrder">

				<div class="form-group">
					<label>Full Name</label>
					<input type="text" name="nama" placeholder="Full Name" class="form-control">
				</div>

				<div class="form-group">
					<label>Address</label>
					<input type="text" name="alamat" placeholder="Address"  class="form-control">
				</div>
				
				<div class="form-group">
					<label>Phone</label>
					<input type="text" name="no_telp" placeholder="Nomor Telepon Anda"  class="form-control">
				</div>

				<div class="form-group">
					<label>delivery services</label>
					<select  class="form-control">
						<option>JNE</option>
						<option>TIKI</option>
						<option>POS Indonesia</option>
						<option>JNT</option>
						<option>GOJEK</option>
						<option>GRAB</option>
					</select>
					</div>

					<div class="form-group">
					<label>Choose Bank</label>
					<select  class="form-control">
						<option>BNI - XXXXXXX</option>
						<option>BRI - XXXXXXX</option>
						<option>BCA - XXXXXXX</option>
						<option>MAYBANK - XXXXXXX</option>
						<option>CIMB NIAGA - XXXXXXX</option>
					</select>
					</div>

					<button type="submit" class="btn btn-sm btn-primary mb-3">Order</button>

			</form>

			<?php 
		}else
		{
			echo "<h4>Your cart is empty</h4>";
		}
			 ?>

		</div>

		<h3></h3>
		<div class="col-md-2"></div>
	</div>
</div>