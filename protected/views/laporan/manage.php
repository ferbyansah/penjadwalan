<!-- Include your PHP file here -->
<div class="row wrapper border-bottom white-bg page-heading" style="margin-left: 0px;">
  <div class="col-lg-10">

    <h2>Laporan Perjalanan</h2>
    <ol class="breadcrumb">
      <li>
        <a href="index.html">Home</a>
      </li>
      <li>
        <a>Master Data</a>
      </li>
      <li class="active">
        <strong>Laporan Perjalanan</strong>
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
                    <a href="index.php?r=laporan/create" class="btn btn-primary">Tambah Laporan</a>
                  </div>
                </div>
              </div>
              <thead>
                <tr><?php $this->widget('zii.widgets.grid.CGridView', array(
                 'id'=>'laporan-grid',
                 'dataProvider'=>$model->search(),
                 'filter'=>$model,
                 'columns'=>array(
                  //'id',
                  'no_perjalanan1',
                  'nama_rs',
                  'no_plat',
                  'nama_supir',
                  'beban_aktual',
                  'status',
                  'tanggal',
                  
                  //'user_id',
                  array(
                    'class'=>'CButtonColumn',
                    'template' => '{view}',
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
