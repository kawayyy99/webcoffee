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
                  <h4>Menu Kurir</h4>
                  <div class="card-header-action">
                    <a href="main.php" class="btn btn-danger">Kembali Ke Data Bayar <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body">

                <?php
                include '../../lib/koneksi.php';
                $id_kurir = $_GET['id'];
                $data = mysqli_query($koneksi,"select * from tb_bayar where id_bayar='$id_kurir'");
                while($q=mysqli_fetch_array($data)){
              ?>

                <form action="edit.php" method="POST">
                    <div class="form-group">
                      <label>Nama Bayar</label>
                      <input type="hidden" name="id_bayar" value="<?php echo $q['id_bayar']; ?>">
                      <input type="text" class="form-control" name="nama_bayar" value="<?= $q['nama_bayar']; ?>">
                    </div>    
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                  </form>
                <?php } ?>
              </div>
            </div>
          
          </div>
        </section>
      </div>

<?php 
include "../../footer.php"
?>