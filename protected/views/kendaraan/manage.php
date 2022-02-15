<!-- Include your PHP file here -->
<div class="row wrapper border-bottom white-bg page-heading" style="margin-left: 0px;">
  <div class="col-lg-10">
    <h2>Kendaraan</h2>
    <ol class="breadcrumb">
      <li>
        <a href="index.html">Home</a>
      </li>
      <li>
        <a>Master Data</a>
      </li>
      <li class="active">
        <strong>Kendaraan</strong>
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
                <div class="panel panel-default">
                  <div class="panel-body">
                    <a href="index.php?r=kendaraan/create" class="btn btn-primary">Tambah Kendaraan Baru</a>
                    <!-- <a href="index.php?r=barang/index" class="btn btn-primary">Cetak</a> -->
                  </div>
                </div>
              </div>
              <thead>
                <tr><?php $this->widget('zii.widgets.grid.CGridView', array(
                  'id'=>'barang-grid',
                  'dataProvider'=>$model->search(),
                  // 'filter'=>$model,
                  'columns'=>array(
                    'no_plat',
                    'nama_kendaraan',
                    // 'satuan',
                    'jenis_kendaraan',
                    // array(
                    //     'name'=>'harga',
                    //     'value'=> 'number_format($data->harga,0,"",".")',
                    // ),
                    // 'penggunaan_tahun',
                    'nama_supir',
                    // 'rop',
                    // 'no_rak',
                    // 'eoq',

                    array(
                      'class'=>'CButtonColumn',
                      'template' => '{update}{delete}',
                      ),
                    ),
                    )); ?>
                  </tr>
                </thead>
              </div><!-- /content-panel -->
            </div><!-- /col-md-12 -->
          </div><!-- /row -->
        </div></div></div>

        <!-- end content -->
      </div>
