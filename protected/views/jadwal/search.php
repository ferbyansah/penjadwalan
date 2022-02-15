<!-- Include your PHP file here -->
<style type="text/css">
  .btn_opsi{
    padding: 2px;
    background: #2196F3;
    color: white;
    border-radius: 5px;
    width: 100px;
  }
</style>
<div class="row wrapper border-bottom white-bg page-heading" style="margin-left: 0px;">
  <div class="col-lg-10">
    <h2>Perjadwalan</h2>
    <ol class="breadcrumb">
      <li>
        <a href="index.html">Home</a>
      </li>
      <li>
        <a>Master Data</a>
      </li>
      <li class="active">
        <strong>Penjadwalan</strong>
      </li>
    </ol>
  </div>

  <!-- Content Now -->
  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
      <div class="col-lg-12">
        <div class="ibox float-e-margins" style="width: 95%;">
          <div class="ibox-content text-center p-md">
            <div class="content-panel">
              <div align="left">
                
              </div>
              <h4>Hasil pencarian dengan No Perjalanan <i style="background:yellow"><?php echo $name ?></i></h4>
              <div id="jadwal-grid" class="grid-view">
               <div class="summary"><?php echo $count ?> results.</div>
               <table class="items">
                  <thead>
                     <tr style="background: #46a6f7;color: white;">
                        <th class="col-md-2">No Perjalanan</th>
                        <th class="col-md-2">Nama Rumah Sakit</th>
                        <th class="col-md-2">Plat Kendaraan</th>
                        <th class="col-md-2">Nama Supir</th>
                        <th class="col-md-2">Status</th>
                        <th class="col-md-2">Tanggal</th>
                        <th class="col-md-2" id="jadwal-grid_c9">&nbsp;</th>
                     </tr>  
                  </thead>
                  <tbody>
                    <?php foreach ($s_jadwal as $jadwal) { ?>
                     <tr class="odd">
                        <td class="col-md-2"><?php echo $jadwal['no_perjalanan'] ?></td>
                        <td class="col-md-2"><?php echo $jadwal['nama_rs'] ?></td>
                        <td class="col-md-2"><?php echo $jadwal['no_plat'] ?></td>
                        <td class="col-md-2"><?php echo $jadwal['nama_supir'] ?></td>
                        <td class="col-md-2"><?php echo $jadwal['status'] ?></td>
                        <td class="col-md-2"><?php echo $jadwal['tanggal'] ?></td>
                        <td class="col-md-2"><a title="Cetak" class="btn btn-primary" target="_blank" href="index.php?r=jadwal/view&amp;id=<?php echo $jadwal['id'] ?> "><i class="fa fa-print"></i>&nbsp;Cetak</a>
                     </tr>
                     <?php } ?>
                  </tbody>
               </table>
               <div class="keys" style="display:none" title="/rop_siak/index.php?r=Jadwal/manage"><span>AT0002</span><span>AT0003</span><span>AT0004</span><span>Z000001</span></div>
            </div>
              </div><!-- /content-panel -->
            </div><!-- /col-md-12 -->
          </div><!-- /row -->
        </div></div></div>

        <!-- end content -->
      </div>
