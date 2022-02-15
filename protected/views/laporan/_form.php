<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'laporan-form',
	'enableAjaxValidation'=>false,
	)); ?>
	<div class="row wrapper border-bottom white-bg page-heading" style="margin-left: 0px;">
		<div class="col-lg-10">
			<h2>Laporan Perjalanan</h2>
			<ol class="breadcrumb">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a>Laporan Perjalanan</a>
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
													<?php echo $form->labelEx($model,'no_perjalanan1'); ?>
													<?php if (empty($_GET['name'])) { 
													echo $form->dropDownList($model,'no_perjalanan1', CHtml::listData(Jadwal::model()->findAll("status='Dikerjakan'"),'no_perjalanan','no_perjalanan'),array('empty'=>'--Pilih--','class'=>'form-control','id'=>'no_perjalanan1'));
													}else{ ?>
														<input size="60" maxlength="200" class="form-control" id="no_perjalanan1" value="<?php echo $_GET['name'] ?>" name="Laporan[no_perjalanan1]" type="text" readonly>
													<?php } ?>
													<?php echo $form->error($model,'no_perjalanan1'); ?>
												</div>
												<?php }else{ ?>
												<div class="form-group">
													<?php echo $form->errorSummary($model); ?>
													<?php echo $form->labelEx($model,'no_perjalanan1'); ?>
													<?php echo $form->textField($model,'no_perjalanan1',array('size'=>60,'maxlength'=>200,'class'=>'form-control','readonly'=>true,'id'=>'no_perjalanan1')); ?>
													<?php echo $form->error($model,'no_perjalanan1'); ?>
												</div>
												<?php } ?>
												<div class="form-group">
													<?php echo $form->errorSummary($model); ?>
													<?php echo $form->labelEx($model,'nama_rs'); ?>
													<?php echo $form->textField($model,'nama_rs',array('size'=>60,'maxlength'=>200,'class'=>'form-control','readonly'=>true,'id'=>'nama_rs')); ?>
													<?php echo $form->error($model,'nama_rs'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'alamat'); ?>
													<?php echo $form->textField($model,'alamat',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'alamat','readOnly'=>true)); ?>
													<?php echo $form->error($model,'alamat'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'no_plat'); ?>
													<?php echo $form->textField($model,'no_plat',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'no_plat','readOnly'=>true)); ?>
													<?php echo $form->error($model,'no_plat'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'nama_supir'); ?>
													<?php echo $form->textField($model,'nama_supir',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'nama_supir','readOnly'=>true)); ?>
													<?php echo $form->error($model,'nama_supir'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'beban_aktual'); ?>
													<?php echo $form->textField($model,'beban_aktual',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'beban_aktual')); ?>
													<?php echo $form->error($model,'beban_aktual'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'status'); ?>
													<?php echo $form->dropDownList($model,'status',array("Selesai"=>"Selesai"),array('empty'=>'--Pilih--','class'=>'form-control')); ?>
													<?php echo $form->error($model,'status'); ?>
												</div>

												<div class="form-group">
												<?php echo $form->labelEx($model,'tanggal'); ?>
													<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
														array(
					                                // you must specify name or model/attribute
															'model'=>$model,
															'attribute'=>'tanggal',
															'value' => date('Y-m-d H:i:s'),
															'options' => array(
																'dateFormat'=>'yy-mm-dd H:i:s',
					                                        //'showOn'=>'button',
					                                        //'buttonImage'=>Yii::app()->request->baseUrl.'/images/technorati2.png',
					                                        //'buttonImageOnly'=> true,
																'changeMonth' => 'true',
																'changeYear' => 'true',
																'minDate'=>date('2016-m-d'),
																'maxDate'=>date('yy-mm-dd'),
					                                        //'yearRange'=>'-1',
					                                        // 'showButtonPanel' => 'true', 
					                                        //'constrainInput' => 'false', 
																'duration'=>'fast', 
																'showAnim' =>'slide',
																),
															'htmlOptions' => array(
																'readOnly'=>false,
																'style'=>'z-index: 999;position:relative',
																'class'=>'form-control',
																'value' => date('Y-m-d H:i:s'),
																),
															)
															); ?>
															<?php echo $form->error($model,'tanggal'); ?>
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
				<!-- <script>

					$(document).ready(function(){
						$("#no_plat").change(function() {
						var no_plat = $("#no_plat").val();

						//make the ajax call
						$.ajax({
							url: "http://localhost/penjadwalan/protected/getsupir.php",
							type: 'POST',
							dataType : 'JSON',
							data: {no_plat : no_plat},
							success: function(response) {
								$('#nama_supir').val(response.nama_supir);
							}
						});
					});
					});
				</script> -->

				<script>

					$(document).ready(function(){
						$("#no_perjalanan1").change(function() {
						var no_perjalanan1 = $("#no_perjalanan1").val();

						//make the ajax call
						$.ajax({
							url: "http://localhost/penjadwalan/protected/getlaporan.php",
							type: 'POST',
							dataType : 'JSON',
							data: {no_perjalanan : no_perjalanan1},
							success: function(response) {
								$('#status').val(response.status);
								$('#no_plat').val(response.no_plat);
								$('#nama_rs').val(response.nama_rs);
								$('#nama_supir').val(response.nama_supir);
								$('#alamat').val(response.alamat);
							}
						});
					});
					});
				</script>

				<!-- <script>

					$(document).ready(function(){
						$("#nama_rs").change(function() {
						var nama_rs = $("#nama_rs").val();

						//make the ajax call
						$.ajax({
							url: "http://localhost/penjadwalan/protected/getalamat.php",
							type: 'POST',
							dataType : 'JSON',
							data: {nama_rs : nama_rs},
							success: function(response) {
								$('#alamat').val(response.alamat);
							}
						});
					});
					});
				</script> -->