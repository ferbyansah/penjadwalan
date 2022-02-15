<style type="text/css">
  body{
    font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif !important;
  }
</style>
<div class="indexx">  
  <div class="wrapper wrapper-content" style="padding: 20px 10px 10px;">
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary" style="border-color: #337AB7;">
          <div class="panel-heading" style="background: #337AB7;border-color: #337AB7;">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-truck fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge" style="font-size: 40px;"><?php $tot=YII::app()->db->createCommand("SELECT COUNT(NO_PLAT) from KENDARAAN")->queryScalar();
                  echo $tot ?></div>
                  <div>Kendaraan</div>
                </div>
              </div>
            </div>
            <a href="index.php?r=kendaraan/manage" style="padding: 0px;">
              <div class="panel-footer" style="color: #337AB7;">
                <span class="pull-left">Lihat Detail</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-primary" style="border-color: #5CB85C;">
            <div class="panel-heading" style="background: #5CB85C;border-color: #5CB85C;">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-book fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge" style="font-size: 40px;"><?php $tot2=YII::app()->db->createCommand("SELECT COUNT(NO_PERJALANAN) from JADWAL")->queryScalar();
                    echo $tot2 ?></div>
                    <div>Penjadwalan</div>
                  </div>
                </div>
              </div>
              <a href="index.php?r=jadwal/manage" style="padding: 0px;">
                <div class="panel-footer" style="color: #5CB85C;">
                  <span class="pull-left">Lihat Detail</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary" style="border-color: #F0AD4E;">
              <div class="panel-heading" style="background: #F0AD4E;border-color: #F0AD4E;">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-hospital-o fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge" style="font-size: 40px;"><?php $tot3=YII::app()->db->createCommand("SELECT COUNT(NAMA_RS) from RUMAH_SAKIT")->queryScalar();
                      echo $tot3?></div>
                      <div>Rumah Sakit</div>
                    </div>
                  </div>
                </div>
                <a href="index.php?r=supplier/manage" style="padding: 0px;">
                  <div class="panel-footer" style="color: #F0AD4E;">
                    <span class="pull-left">Lihat Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="panel panel-primary" style="border-color: #D9534F;">
                <div class="panel-heading" style="background: #D9534F;border-color: #D9534F;">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-truck fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge" style="font-size: 40px;"><?php $tot=YII::app()->db->createCommand("SELECT COUNT(NO_PERJALANAN) from JADWAL WHERE status='Dikerjakan'")->queryScalar();
                        echo $tot ?></div>
                        <div>Kendaraan Sedang Dalam Perjalanan</div>
                      </div>
                    </div>
                  </div>
                  <a href="index.php?r=jadwal/manage" style="padding: 0px;">
                    <div class="panel-footer" style="color: #D9534F;">
                      <span class="pull-left">Lihat Detail</span>
                      <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                      <div class="clearfix"></div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div><!--index-->
          <div class="row">
            <div class="col-lg-8" style="padding-left: 25px;padding-right: 25px;">
              <div class="panel panel-default">
                <!-- /.panel-heading -->
<!--  KOLOM WARNING -->
               <div class="panel-body">
                  <?php
                  $sqlbar="SELECT * FROM JADWAL";
                  $rsqlbar=Jadwal::model()->findAll("status!='Selesai'");
                  foreach ($rsqlbar as $rb) {
                    if ($rb->status = "Dikerjakan"){ ?>
                    <div class="alert alert-success" style="margin-bottom: 5px;">
                    <strong>Pemberitahuan </strong>Nomor Perjalanan <?php echo '<a href=index.php?r=jadwal/manage >'.$rb->no_perjalanan.'</a>' ?> Dengan Pengemudi <?php echo '<a href=index.php?r=kendaraan/manage >'.$rb->nama_supir.'</a>' ?>Sedang Dalam Perjalanan Menuju <?php echo $rb->nama_rs ?> untuk pengambilan limbah.
                    </div>
                    <?php }else{
                      echo null;
                    }
                  }
                          
                  ?>
                </div>
                <!-- /.panel-body -->
              </div>
              <!-- /.panel -->
              <div class="panel panel-default">
                <!-- /.panel-heading -->
                
                  <!-- <thead> -->
<!--   KOLOM CHART -->
                   <!-- <tr>
                      <?php
                                $label=array();
                                $nilai=array();

                                $sqll='SELECT KODE_BARANG FROM BARANG';
                                $rsql=User::model()->findAllBySql("$sqll");

                                foreach ($rsql as $b=>$rsql1) {

                                $sql2="SELECT nama_barang, stok_akhir AS jumlah FROM BARANG";// GROUP BY nama_barang";
                                $rsql2=Barang::model()->findAllBySql("$sql2");

                                  foreach($rsql2 as $c=>$ck)
                                  {
                                      $label[$c]=$ck->nama_barang;
                                      $nilai[$c]=(int)$ck->jumlah;
                                      //include 'ifprodi.php';
                                      // echo $ck->nama_prodi;
                                      // echo $ck->jumlah;
                                  }
                                }
                                $this->widget('application.extensions.Highcharts.HighchartsWidget', array(
                                   'options'=>array(
                                     'chart'=> array('defaultSeriesType'=>'column',),
                                      'title' => array('text' => 'Data Barang'),
                                      'legend'=>array('enabled'=>true),
                                      'xAxis'=>array('categories'=>$label,
                                      'title'=>array('text'=>''),),
                                      'yAxis'=> array(
                                            'min'=> 0,
                                            'title'=> array(
                                            'text'=>'jumlah'
                                            ),
                                        ),
                                      'series' => array(
                                         array('data' => $nilai)
                                      ),
                                      'tooltip' => array('formatter' => 'js:function(){ return "<b>"+this.point.name+"</b> :"+this.y; }'),
                                      'tooltip' => array(
                                    'formatter' => 'js:function() {return "<b>"+ this.x +"</b><br/>"+"Jumlah : "+ this.y; }'
                                      ),
                                      'plotOptions'=>array('pie'=>(array(
                                                    'allowPointSelect'=>true,
                                                    'showInLegend'=>true,
                                                    'cursor'=>'pointer',
                                                )
                                            )                       
                                        ),
                                      'credits'=>array('enabled'=>false),
                                   )
                                ));
                      ?>
                    </tr> -->
                  </thead>
                  <!-- /.row -->
              
                <!-- /.panel-body -->
              </div>
              <!-- /.panel -->
            </div>
            <!-- /.col-lg-8 -->

            <div class="col-lg-4">
              <div class="panel panel-default">
<!-- KOLOM 10 BARANG MASUK -->
                <div class="panel-heading">
                  <i class="fa fa-bell fa-fw"></i> Penjadwalan Terakhir
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                  <div class="list-group">
                    <?php 
                    $sqlf='SELECT * FROM jadwal ORDER BY TANGGAL DESC LIMIT 10';
                    $rsqlf=Jadwal::model()->findAllBySql("$sqlf");
                    foreach ($rsqlf as $rsqlf) { 
                      ?>
                      <a href="index.php?r=jadwal/view&amp;id=<?php echo $rsqlf['id'] ?>" class="list-group-item" target="_blank">
                        <i class="fa fa-file fa-fw"></i> <?php echo $rsqlf->no_perjalanan." (".$rsqlf->nama_rs.")"." = ".$rsqlf->status."" ?>
                        <span class="pull-right text-muted small"><em><?php echo $rsqlf->tanggal ?></em>
                        </span>
                      </a>
                      <?php } ?>
                    </div>
                    
                     <a href="index.php?r=jadwal/manage" class="btn btn-default btn-block">Lihat Semua Jadwal</a>
                  </div>
                  <!-- /.panel-body -->
                </div>

                <!-- <div class="chat-panel panel panel-default">
                  <div class="panel-heading">
                    <i class="fa fa-comments fa-fw"></i>
                    Aktivitas Admin
                    <div class="btn-group pull-right">
                      <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-chevron-down"></i>
                      </button>
                      <ul class="dropdown-menu slidedown">
                        <li>
                          <a href="#">
                            <i class="fa fa-refresh fa-fw"></i> Segarkan
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-check-circle fa-fw"></i> Ada
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-times fa-fw"></i> Sibuk
                          </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="#">
                            <i class="fa fa-sign-out fa-fw"></i> Keluar
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div> -->
                  <!-- /.panel-heading -->
                  <!-- <div class="panel-body">
                    <ul class="chat">
                      <li class="left clearfix">
                        <span class="chat-img pull-left">
                          <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                        </span>
                        <div class="chat-body clearfix">
                          <div class="header">
                            <strong class="primary-font">Ferbyansah</strong>
                            <small class="pull-right text-muted">
                              <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                            </small>
                          </div>
                          <p>
                            Input Barang, input data Barang Keluar terbaru.
                          </p>
                        </div>
                      </li>
                      <li class="right clearfix">
                        <span class="chat-img pull-right">
                          <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                        </span>
                        <div class="chat-body clearfix">
                          <div class="header">
                            <small class=" text-muted">
                              <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                              <strong class="pull-right primary-font">Operator</strong>
                            </div>
                            <p>
                              Kelola Barang Masuk, maintenance sistem, mengatur slider web yang tersendat karena javascript yang tidak terbaca.
                            </p>
                          </div>
                        </li>
                        <li class="left clearfix">
                          <span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                          </span>
                          <div class="chat-body clearfix">
                            <div class="header">
                              <strong class="primary-font">Ferbyansah</strong>
                              <small class="pull-right text-muted">
                                <i class="fa fa-clock-o fa-fw"></i> 54 mins ago</small>
                              </div>
                              <p>
                                perbaiki sistem yang bugs meliputi : data barang masuk, data barang keluar, invoice, dll.
                              </p>
                            </div>
                          </li>
                          <li class="right clearfix">
                            <span class="chat-img pull-right">
                              <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                              <div class="header">
                                <small class=" text-muted">
                                  <i class="fa fa-clock-o fa-fw"></i> 3 Days ago</small>
                                  <strong class="pull-right primary-font">Operator</strong>
                                </div>
                                <p>
                                  Perbaikan koneksi database postgre yang down.
                                </p>
                              </div>
                            </li>
                          </ul>
                        </div> -->
                        <!-- /.panel-body -->
                        <!-- <div class="panel-footer">
                          <div class="input-group">
                            <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                            <span class="input-group-btn">
                              <button class="btn btn-warning btn-sm" id="btn-chat">
                                Send
                              </button>
                            </span>
                          </div>
                        </div> -->
                        <!-- /.panel-footer -->
                      </div>
                      <!-- /.panel .chat-panel -->
                    </div>
                    <!-- /.col-lg-4 -->
                  </div><br><br>
