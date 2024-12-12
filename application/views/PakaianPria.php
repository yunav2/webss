<div class="row text-center mt-3">
        <?php foreach ($PakaianPria as $brg) : ?>
            <div class="card ml-3" style="width: 16rem;">
                <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_barang ?></h5>
                    <small><?php echo $brg->keterangan ?></small><br>
                    <span class="badge badge-pill badge-success mb-3">$ <?php echo $brg->harga ?></span>
                    <?php echo anchor('dashboard/addCart/'.$brg->id_barang, '<div class="btn btn-sm btn-primary">Tambah ke keranjang</div>') ?>
                    <?php echo anchor('dashboard/detail/'.$brg->id_barang,'<div class="btn btn-sm btn-success">Detail</div>') ?>
                    <!-- <a href="#" class="btn btn-sm btn-primary">Tambah ke keranjang</a> -->
                    <!-- <a href="#" class="btn btn-sm btn-success">Detail</a> -->
                </div>
            </div>
        <?php endforeach; ?>
    </div>