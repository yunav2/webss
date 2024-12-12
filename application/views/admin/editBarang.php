<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit Data Barang</h3>

    <?php foreach ($barang as $brg) : ?>
        <form method="post" action="<?php echo base_url().'admin/dataBarang/update/' ?>">
            <div class="for-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="from-control" value="<?php echo $brg->nama_barang ?>">
            </div>
        
            <div class="for-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="from-control" value="<?php echo $brg->keterangan ?>">
                <input type="hidden" name="id_barang" class="from-control" value="<?php echo $brg->id_barang ?>">
            </div>

            <div class="for-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="from-control" value="<?php echo $brg->kategori ?>">
            </div>

            <div class="for-group">
                <label>Harga</label>
                <input type="text" name="harga" class="from-control" value="<?php echo $brg->harga ?>">
            </div>

            <div class="for-group">
                <label>Stok</label>
                <input type="text" name="stok" class="from-control" value="<?php echo $brg->stok ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">Save</button>
        </form>
    <?php endforeach; ?>
</div>
    </div>