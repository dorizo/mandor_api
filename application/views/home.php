<div class="col-lg-12">
<div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Status Project </h3>
                <div class="card-tools">
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Project</th>
                    <!-- <th>Estimasi Project Selesai</th>
                    <th>Real Project</th>
                    <th>Nilai Project</th>
                    <th>Project Status</th>
                    <th>User</th>
                    <th>Detail</th> -->
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($dataresult as $key => $value) {
                      $now = time(); // or your date as well
                      $your_date = strtotime($value["project_done"]);
                      $datediff = $your_date - $now;
                    ?>
                  <tr>
                    <td>
                    <div class="card card-primary card-outline">
                      <div class="card-body box-profile">
                        KATEGORI <?=$value["cat_name"]?><hr />
                        PROJECT NAME<?=$value["project_code"]?><hr />
                        Estimasi Mulai : <?=tanggalindo($value["project_start"])?><hr />
                        Estimasi Selesai : <?=tanggalindo($value["project_done"])?><hr />
                        Hitung Hari : <?=$value["project_paid"]?"Project Selesai":round($datediff / (60 * 60 * 24))." hari";?> 
                      </div>
                    </div>
                    </td>
                    <!-- <td>
                      Estimasi Mulai : <?=tanggalindo($value["project_start"])?><br />
                      Estimasi Selesai : <?=tanggalindo($value["project_done"])?><br />
                      Hitung Hari : <?=$value["project_paid"]?"Project Selesai":round($datediff / (60 * 60 * 24))." hari";?> 
                    </td>
                    
                    <td>
                      Project Mulai : <?=tanggalindo($value["project_date"])?><br />
                      Project Paid : <?=$value["project_paid"]?tanggalindo($value["project_paid"]):"project Belum Selesai"?><br />
                      Project Berjalan : <?=countday($value["project_date"],$value["project_paid"]);?> hari <br />
                    
              
                    </td>
                    <td>
                       Pembagian Hasil :  <?=$value["sharing_vendor"];?>/<?=$value["sharing_owner"];?><br />
                       Nilai Project : <?=rupiah($value["nilai_project"])?><br />
                       Bunga Berjalan : <?=rupiah($value["totalbungaseluruh"]);?> <br />
                       Pembayaran Vendor :  <?=rupiah($value["paymentvendor"]);?>
                      
                    </td>
                    <td>
                    Status Project  : <?=$value["project_status"]?><br />
                    <?php
                    if(!$value["paymentvendor"]){
                    $point=0;
                    }else{
                     $point =  @(round((((($value["nilai_project"] * $value["sharing_owner"])/100)/($value["paymentvendor"]+$value["totalbungaseluruh"]))*100),2));
                    }
                    if($point <= 0){
                      $background = "bg-primary";
                    }elseif($point < 30){
                      $background = "bg-danger";
                    }elseif($point < 45){
                      $background = "bg-warning";
                    }elseif($point < 100){
                      $background = "bg-success";
                    }
                    ?>
                    <card class="<?=$background?>">
                    Persentase Profit  :<?=$point?>%<br />
                    </card>
                  
                    </td>
                    <td>
                    VENDOR : <?=$value["vendor"]?><hr />
                    <?php
                    $m = $this->db->query("select * from project_user a JOIN user b on a.userCode=b.userCode JOIN role_user c ON c.userCode=b.userCode JOIN role d ON d.roleCode=c.roleCode where a.deleteAt IS NULL AND project_id=".$value["project_id"])->result_array();
                    foreach ($m as $keym => $valm) {
                    echo $valm["role"]." : ".$valm["name"]."<hr />";
                    ?>
                    <?php
                      # code...
                    }
                    ?>

                    </td>
                    <td>
                      <a href="<?=base_url("project/detail/".$value["project_id"])?>"  class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td> -->
                  </tr>
                  <?php
                     # code...
                    }
                  ?>
                  <!-- <tr>
                    <td>
                      <img src="<?=base_url()?>asset/dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Another Product
                    </td>
                    <td>$29 USD</td>
                    <td>
                      <small class="text-warning mr-1">
                        <i class="fas fa-arrow-down"></i>
                        0.5%
                      </small>
                      123,234 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="<?=base_url()?>asset/dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Amazing Product
                    </td>
                    <td>$1,230 USD</td>
                    <td>
                      <small class="text-danger mr-1">
                        <i class="fas fa-arrow-down"></i>
                        3%
                      </small>
                      198 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="<?=base_url()?>asset/dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Perfect Item
                      <span class="badge bg-danger">NEW</span>
                    </td>
                    <td>$199 USD</td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i>
                        63%
                      </small>
                      87 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr> -->
                  </tbody>
                </table>
              </div>
            </div>
</div>