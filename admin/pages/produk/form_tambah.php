<?php 
include "../../header.php";
?>

 <!-- Main Content -->
 <div class="main-content">
        <section class="section">
        
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Menu Pelanggan</h4>
                  <div class="card-header-action">
                    <a href="main.php" class="btn btn-danger">Kembali Ke Data Produk <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body">

                <form action="simpan_produk.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                      <label>Kategori</label>
                      <select class="form-control" name="kategori">
                      <option value="">Pilih Kategori</option>
                      <?php
                      include "../../lib/koneksi.php";
                      $QueryKategori = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
                      while ($kategori = mysqli_fetch_array($QueryKategori)) {
                        ?>
                        <option value="<?= $kategori['Idkategori']; ?>"><?= $kategori['Namakategori']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Nama Produk</label>
                      <input type="text" class="form-control" name="nama_produk">
                    </div>    
                    <div class="form-group">
                      <label>Deskripsi</label>
                      <input type="text" class="form-control" name="deskripsi">
                    </div>          
                    <div class="form-group">
                      <label>Harga</label>
                      <input type="text" class="form-control" name="harga">
                    </div>   
                    <div class="form-group">
                      <label>Gambar</label>
                      <input type="file" class="form-control" name="gambar">
                    </div>    
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                  </form>
              </div>
            </div>
          
          </div>
        </section>
      </div>

<?php 
include "../../footer.php"
?>