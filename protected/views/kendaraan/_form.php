<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kendaraan-form',
	'enableAjaxValidation'=>false,
	)); ?>
	<div class="row wrapper border-bottom white-bg page-heading" style="margin-left: 0px;">
		<div class="col-lg-10">
			<h2>Kendaraan</h2>
			<ol class="breadcrumb">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a>Kendaraan</a>
				</li>
				<?php  if(Yii::app()->controller->action->id == 'create') { ?>
					<li class="active">
						<strong>Create</strong>
					</li>
					<?php }else{ ?>
					<li class="active">
						<strong>Update</strong>
					</li>
					<?php } ?>
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
												<?php  if(Yii::app()->controller->action->id == 'create') { ?>
												<div class="form-group">
													<?php echo $form->labelEx($model,'no_plat'); ?>
													<?php echo $form->textField($model,'no_plat',array('size'=>60,'maxlength'=>200,'class'=>'form-control','placeholder'=>'Nomor Plat Kendaraan')); ?>
													<?php echo $form->error($model,'no_plat'); ?>
												</div>
												<?php }else{ ?>
												<div class="form-group">
													<?php echo $form->labelEx($model,'no_plat'); ?>
													<?php echo $form->textField($model,'no_plat',array('size'=>60,'maxlength'=>200,'class'=>'form-control','placeholder'=>'Nomor Plat Kendaraan','id'=>'no_plat')); ?>
													<?php echo $form->error($model,'no_plat'); ?>
												</div>
												<?php } ?>
												<div class="form-group">
													<?php echo $form->labelEx($model,'nama_kendaraan'); ?>
													<?php echo $form->textField($model,'nama_kendaraan',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'nama_kendaraan','placeholder'=>'Nama Kendaraan')); ?>
													<?php echo $form->error($model,'nama_kendaraan'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'jenis_kendaraan'); ?>
													<?php echo $form->dropDownList($model,'jenis_kendaraan',array("Box Kecil"=>"Box Kecil","Box Sedang"=>"Box Sedang","Box Besar"=>"Box Besar"),array('empty'=>'--Pilih--','class'=>'form-control','id'=>'jenis_kendaraan','placeholder'=>'jenis_kendaraan')); ?>
													<?php echo $form->error($model,'jenis_kendaraan'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'nama_supir'); ?>
													<?php echo $form->textField($model,'nama_supir',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'nama_supir','placeholder'=>'Nama Supir')); ?>
													<?php echo $form->error($model,'nama_supir'); ?>
												</div>

												<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary','id'=>'add_data')); ?>
												<button type="reset" class="btn btn-default">Reset</button>
											</div>
										</div>
									</div>
								</div><!-- /content-panel -->
							</div><!-- /col-md-12 -->
						</div><!-- /row -->
					</div>
				</div>
			</div>
		</div>
		<?php $this->endWidget(); ?>
		<script>

			document.getElementById("Barang_Barang_IMAGE").onchange = function() {
				var fileName = this.value;
				var fileExtension = fileName.substr(fileName.length - 4);

				console.log(fileExtension);
				if (fileExtension != ".jpg" && fileExtension != ".png" && fileExtension != ".jpeg" && fileExtension != ".JPG") {
					alert("Format gambar yang diizinkan (jpg,png,jpeg)!");
					$('input#Barang_Barang_IMAGE').val("");
				}
			}

			function updateTextArea() {     
				var allVals = [];
				$('.form-group :checked').each(function(i) {

					allVals.push("1");
				});
				$('#Barang_Barang_IS_ACTIVE').val(allVals).attr('rows',allVals.length) ;

			}
			$(function() {
				$('.form-group input').click(updateTextArea);
				updateTextArea();
			});

			$(document).ready(function(){
				$('.add_data').click(function () {
					dcp = parseInt($('#Barang_Barang_IMAGE').val()); 
		if (dcp==null) { // jika nilai textfield kosong diganti dengan 0
			dcp = 'no image';
		}
		$("#Barang_Barang_IMAGE").val(dcp);         
	});
			});
		</script>