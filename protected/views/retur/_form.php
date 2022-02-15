<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'retur-form',
	'enableAjaxValidation'=>false,
	)); ?>
	<?php if(Yii::app()->user->hasFlash('error')):?>
	<div class="alert alert-danger">
		<span class="glyphicon glyphicon-remove-circle"></span> <?php echo Yii::app()->user->getFlash('error'); ?>
	</div>
	<?php endif; ?>
	<div class="row wrapper border-bottom white-bg page-heading" style="margin-left: 0px;">
		<div class="col-lg-10">
			<h2>Retur</h2>
			<ol class="breadcrumb">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a>Barang</a>
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
													<?php echo $form->labelEx($model,'no_po'); ?>
													<?php if (empty($_GET['name'])) { 
													echo $form->dropDownList($model,'no_po', CHtml::listData(PoSupplier::model()->findAll("status='retur'"),'nomor_po','nomor_po'),array('empty'=>'--Pilih--','class'=>'form-control','id'=>'no_po'));
													}else{ ?>
														<input size="60" maxlength="200" class="form-control" id="no_po" value="<?php echo $_GET['name'] ?>" name="Retur[no_po]" type="text" readonly>
													<?php } ?>
													<?php echo $form->error($model,'no_po'); ?>
												</div>
												<?php }else{ ?>
												<div class="form-group">
													<?php echo $form->labelEx($model,'no_po'); ?>
													<?php if (empty($_GET['name'])) { 
													echo $form->dropDownList($model,'no_po', CHtml::listData(BarangMasuk::model()->findAll("status='retur'"),'no_po','no_po'),array('empty'=>'--Pilih--','class'=>'form-control','id'=>'no_po','readOnly'=>true));
													}else{ ?>
														<input size="60" maxlength="200" class="form-control" id="no_po" value="<?php echo $_GET['name'] ?>" name="Retur[no_po]" type="text" readonly>
													<?php } ?>
													<?php echo $form->error($model,'no_po'); ?>
												</div>
												<?php } ?>
												<div class="form-group">
													<?php echo $form->labelEx($model,'nama_barang'); ?>
													<?php echo $form->textField($model,'nama_barang',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'nama_barang','readOnly'=>true)); ?>
													<?php echo $form->error($model,'nama_barang'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'dipesan'); ?>
													<?php echo $form->numberField($model,'dipesan',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'dipesan', 'min'=>'1','readOnly'=>true)); ?>
													<?php echo $form->error($model,'dipesan'); ?>
												</div>
												<?php  if(Yii::app()->controller->action->id == 'create') { ?>
												<div class="form-group">
													<?php echo $form->labelEx($model,'jumlah'); ?>
													<?php echo $form->numberField($model,'jumlah',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'jumlah', 'min'=>'1','value'=>'1')); ?>
													<?php echo $form->error($model,'jumlah'); ?>
												</div>
												<?php }else{ ?>
												<div class="form-group">
													<?php echo $form->labelEx($model,'jumlah'); ?>
													<?php echo $form->numberField($model,'jumlah',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'jumlah', 'min'=>'1','readOnly'=>true )); ?>
													<?php echo $form->error($model,'jumlah'); ?>
												</div>
												<?php } ?>
												<div class="form-group">
													<?php echo $form->labelEx($model,'tujuan'); ?>
													<?php echo $form->textField($model,'tujuan',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'tujuan','readOnly'=>true)); ?>
													<?php echo $form->error($model,'tujuan'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'keterangan'); ?>
													<?php echo $form->textField($model,'keterangan',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'keterangan')); ?>
													<?php echo $form->error($model,'keterangan'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'status'); ?>
													<?php echo $form->dropDownList($model,'status',array('Open'=>'Open','Close'=>'Close','Retur'=>'Retur'),array('empty'=>'--Pilih--','class'=>'form-control','id'=>'status')); ?>
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
				<script>

					$(document).ready(function(){
						$("#no_po").change(function() {
						var no_po = $("#no_po").val();

						//make the ajax call
						$.ajax({
							url: "http://localhost/rop_siak/protected/getretur.php",
							type: 'POST',
							dataType : 'JSON',
							data: {no_po : no_po},
							success: function(response) {
								$('#nama_barang').val(response.nama_barang);
								$('#dipesan').val(response.jumlah);
								$('#tujuan').val(response.supplier);
								$('#status').val(response.status);
							}
						});
					});
					});
				</script>