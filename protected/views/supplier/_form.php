<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'supplier-form',
	'enableAjaxValidation'=>false,
	)); ?>
	<div class="row wrapper border-bottom white-bg page-heading" style="margin-left: 0px;">
		<div class="col-lg-10">
			<h2>Rumah Sakit</h2>
			<ol class="breadcrumb">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a>Rumah Sakit</a>
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
												<div class="form-group">
													<?php echo $form->labelEx($model,'no_kontrak'); ?>
													<?php echo $form->textField($model,'no_kontrak',array('size'=>60,'maxlength'=>200,'class'=>'form-control','placeholder'=>'Nomor Kontrak')); ?>
													<?php echo $form->error($model,'no_kontrak'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'nama_perusahaan'); ?>
													<?php echo $form->textField($model,'nama_perusahaan',array('size'=>60,'maxlength'=>200,'class'=>'form-control','placeholder'=>'Nama Perusahaan')); ?>
													<?php echo $form->error($model,'nama_perusahaan'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'nama_rs'); ?>
													<?php echo $form->textField($model,'nama_rs',array('size'=>60,'maxlength'=>200,'class'=>'form-control','placeholder'=>'Nama Rumah Sakit')); ?>
													<?php echo $form->error($model,'nama_rs'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'status_kontrak'); ?>
													<?php echo $form->dropDownList($model,'status_kontrak',array("Aktif"=>"Aktif","Tidak Aktif"=>"Tidak Aktif"),array('empty'=>'--Pilih--','class'=>'form-control')); ?>
													<?php echo $form->error($model,'status_kontrak'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'no_telp'); ?>
													<?php echo $form->numberField($model,'no_telp',array('size'=>60,'maxlength'=>200,'class'=>'form-control','placeholder'=>'Nomor Telfon')); ?>
													<?php echo $form->error($model,'no_telp'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'alamat'); ?>
													<?php echo $form->textField($model,'alamat',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'cek','placeholder'=>'Alamat')); ?>
													<?php echo $form->error($model,'alamat'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'jangkau'); ?>
													<?php echo $form->dropDownList($model,'jangkau',array(1=>"Kurang Dari 10 KM",2=>"Kurang Dari 20 KM",3=>"Lebih Dari 20 KM"),array('empty'=>'--Pilih--','class'=>'form-control')); ?>
													<?php echo $form->error($model,'jangkau'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'jarak'); ?>
													<?php echo $form->textField($model,'jarak',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'cek','placeholder'=>'Jarak')); ?>
													<?php echo $form->error($model,'jarak'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'area'); ?>
													<?php echo $form->textField($model,'area',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'cek','placeholder'=>'Area')); ?>
													<?php echo $form->error($model,'area'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'beban'); ?>
													<?php echo $form->textField($model,'beban',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'cek','placeholder'=>'Beban Estimasi Limbah')); ?>
													<?php echo $form->error($model,'beban'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'hari'); ?>
													<?php echo $form->textField($model,'hari',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'cek','placeholder'=>'Hari Perjanjian')); ?>
													<?php echo $form->error($model,'hari'); ?>
												</div>
												<div class="form-group">
													<!-- <?php echo $form->labelEx($model,'status'); ?> -->
													<?php echo $form->hiddenField($model,'status',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'status','value'=>'Selesai','readOnly'=>true)); ?>
													<?php echo $form->error($model,'status'); ?>
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

			document.getElementById("Rules_Rules_IMAGE").onchange = function() {
				var fileName = this.value;
				var fileExtension = fileName.substr(fileName.length - 4);

				console.log(fileExtension);
				if (fileExtension != ".jpg" && fileExtension != ".png" && fileExtension != ".jpeg" && fileExtension != ".JPG") {
					alert("Format gambar yang diizinkan (jpg,png,jpeg)!");
					$('input#Rules_Rules_IMAGE').val("");
				}
			}

			function updateTextArea() {     
				var allVals = [];
				$('.form-group :checked').each(function(i) {

					allVals.push("1");
				});
				$('#Rules_Rules_IS_ACTIVE').val(allVals).attr('rows',allVals.length) ;

			}
			$(function() {
				$('.form-group input').click(updateTextArea);
				updateTextArea();
			});

			$(document).ready(function(){
				$('.add_data').click(function () {
					dcp = parseInt($('#Rules_Rules_IMAGE').val()); 
		if (dcp==null) { // jika nilai textfield kosong diganti dengan 0
			dcp = 'no image';
		}
		$("#Rules_Rules_IMAGE").val(dcp);         
	});
			});
		</script>