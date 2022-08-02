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
                  <h4>Menu Bayar</h4>
                  <div class="card-header-action">
                    <a href="main.php" class="btn btn-danger">Kembali Ke Data bayar<i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body">

                <form action="simpan_bayar.php" method="POST">
                    <div class="form-group">
                      <label>Nama Bayar</label>
                      <input type="text" class="form-control" name="nama_bayar">
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