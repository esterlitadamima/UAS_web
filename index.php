        <!DOCTYPE html>
        <html>
        <head>
            <title>Barang</title>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        </head>
        <body>
        <div class="container">
            <h1 class="text-center">Input Barang</h1>
            <h2 class="text-center">@Christin</h2>
            
            <!-- Awal Card Form -->
            <div class="card mt-4">
                <div class="card-header bg-primary text-white">
                    Form Barang 
                </div>
                <div class="card-body">
                     <form method="post" action="">
        <div class="form-group">
            <label>Kode barang</label>
            <input type="text" name="tkode" class="form-control" placeholder="masukkan kode barang" required>
        </div>
        <div class="form-group">
            <label>Nama barang</label>
            <input type="text" name="tnama" class="form-control" placeholder="masukkan nama barang" required>
        </div>
        <div class="form-group">
            <label>Deskripsi barang</label>
            <input type="text" name="tdeskripsi" class="form-control" placeholder="masukkan deskripsi barang" required>
        </div>
        <div class="form-group">
            <label>Merek</label>
            <input type="text" name="tmerek" class="form-control" placeholder="masukkan merek" required>
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input type="text" name="tstok" class="form-control" placeholder="masukkan stok" required>
        </div>
        <div class="form-group">
            <label>Satuan barang</label>
            <input type="text" name="tsatuan" class="form-control" placeholder="masukkan satuan barang" required>
        </div>
        <div class="form-group">
            <label>Tanggal Kadaluarsa</label>
            <input type="text" name="ttanggal" class="form-control" placeholder="masukkan tanggal kadaluarsa" required>
        </div>
        <div class="form-group">
            <label>Jumlah barang</label>
            <input type="text" name="tjumlah" class="form-control" placeholder="masukkan jumlah barang" required>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="tharga" value="<?=@$vharga?>" class="form-control" placeholder="masukkan harga" required>
        </div>
        <div class="form-group">
            <label>tokoh</label>
            <input type="text" name="ttokoh" class="form-control" placeholder="masukkan tokoh" required>
        </div>
        <div class="form-group">
            <label>supplier</label>
            <input type="text" name="tsupplier" class="form-control" placeholder="masukkan supplier" required>
        </div>
        <div class="form-group">
            <label>karyawan</label>
            <input type="text" name="tkaryawan" class="form-control" placeholder="masukkan karyawan" required>
        </div>


        <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
        <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
    </form>
</div>
</div>
<!-- Akhir Card Form -->
<!-- Awal Card Tabel -->
<div class="card mt-4">
    <div class="card-header bg-success text-white">
        Data Barang
</div>
<div class="card-body">
  <table class="table table-bordered table-striped">
  <tr>
      <th>No</th>
      <th>Kode barang</th>
      <th>Nama barang</th>
      <th>Deskripsi barang</th>
      <th>Merek</th>
      <th>Stok</th>
      <th>Satuan barang</th>
      <th>Tanggal kadaluarsa</th>
      <th>Jumlah barang</th>
      <th>Harga</th>
      <th>Tokoh</th>
      <th>Supplier</Th>
      <th>Karyawan</th>
      <th>Aksi</th>
    </tr> 
    <tr>
        <td>1</td>
        <td>123</td>
        <td>Sabun</td>
        <td>menghilangkan kuman</td>
        <td>Detol</td>
        <td>8</td>
        <td>Buah</td>
        <td>12 januari 2023></td>
        <td>8</td>
        <td>5000</td>
        <td>mitra</td>
        <td>Susila</td>
        <td>Pingkan</td>
        <td>
            <a href= "#" class="btn btn-warning"> Edit </a>
            <a href = "#" class="btn btn-danger"> Hapus </a>
    </tr>

</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>