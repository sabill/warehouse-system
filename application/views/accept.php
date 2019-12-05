<div class="col-md-10">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                Terima Permintaan
            </li>
        </ol>

<!-- Data Barang Masuk -->
<div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>Daftar Permintaan
        </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal Permintaan</th>
                    <th>Item</th>
                    <th>Kuantitas</th>
                    <th>Lokasi</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <!--
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>ID Item</th>
                    <th>Nomor PO</th>
                    <th>Pengirim</th>
                    <th>Gudang</th>
                    <th>Kuantitas</th>
                    <th>Tanggal Masuk</th>
                  </tr>
                </tfoot>
                -->
                <?php 
                $i = 1;
                foreach($listdata as $row){

                  $date = explode(" ", $row->tanggal);

                  echo('<tbody>
                  <tr>
                    <td>'.$i.'</td>
                    <td><a href="#">'.$date[0].' 1</a></td>
                    <td><a href="#">'.$row->item.'</a></td>
                    <td><a href="#">'.$row->kuantitas.'</a></td>
                    <td><a href="#">'.$row->lokasi.'</a></td>');
                    if($row->status == false){
                      echo(' <td><a href="'.base_url('accept/agree/'.$row->item_id.'').'"><button class="btn btn-primary" id="agree=button" type="submit">Accept</button></a></td>
                      </tr>
                    </tbody>');
                    }
                    else{
                      echo(' <td><a href="#"><button class="btn btn-success" id="agree=button" type="submit">Accepted</button></a></td>
                      </tr>
                    </tbody>');
                    }
                  
              $i++;

                }

                ?>
              </table>
            </div>
          </div>
          
          <div class="row">
              <div class="col-sm-12 col-md-5">
                  <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Menampilkan 1 sampai 10 dari 100 data</div>
              </div>
              <div class="col-sm-12 col-md-7">
                  <div class="dataTable_paginate paging_simple_numbers" id="dataTable_paginate">
                      <ul class="pagination">
                          <li class="paginate_button page-item previous disable" id="dataTable_previous">
                              <a href="#" aria-controls="dataTable" data-dt-idx="0" tabidex="0" class="page-link">Previous</a>
                          </li>
                          <li class="paginate_button page-item active">
                              <a href="#" aria-controls="dataTable" data-dt-idx="1" tabidex="0" class="page-link">1</a>
                          </li>
                          <li class="paginate_button page-item active">
                              <a href="#" aria-controls="dataTable" data-dt-idx="2" tabidex="0" class="page-link">2</a>
                          </li>
                          <li class="paginate_button page-item active">
                              <a href="#" aria-controls="dataTable" data-dt-idx="2" tabidex="0" class="page-link">3</a>
                          </li>
                          <li class="paginate_button page-item active">
                              <a href="#" aria-controls="dataTable" data-dt-idx="2" tabidex="0" class="page-link">4</a>
                          </li>
                          <li class="paginate_button page-item next" id="dataTable_previous">
                              <a href="#" aria-controls="dataTable" data-dt-idx="3" tabidex="0" class="page-link">Next</a>
                          </li>
                      </ul>
                  </div>
              </div>
            </div>

          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
      </div>

      <!-- /.container-fluid -->

      </div>
</div>