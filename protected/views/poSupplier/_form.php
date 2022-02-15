<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'po-supplier-form',
	'enableAjaxValidation'=>false,
	)); ?>
	<div class="row wrapper border-bottom white-bg page-heading" style="margin-left: 0px;">
		<div class="col-lg-10">
			<h2>PO Supplier</h2>
			<ol class="breadcrumb">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a>PO Supplier</a>
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
													<?php echo $form->labelEx($model,'nomor_po'); ?>
													<?php echo $form->textField($model,'nomor_po',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'cek','value'=>'PO-S')); ?>
													<?php echo $form->error($model,'nomor_po'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'nama_barang'); ?>
													<?php if (empty($_GET['name'])) { 
													echo $form->dropDownList($model,'nama_barang', CHtml::listData(Barang::model()->findAll(),'nama_barang','nama_barang','harga'),array('id'=>'nama_barang','empty'=>'--Pilih--','class'=>'form-control'));
													}else{ ?>
														<input size="60" maxlength="200" class="form-control" id="nama_barang" min="1" value="<?php echo $_GET['name'] ?>" name="PoSupplier[nama_barang]" type="text" readonly>
													<?php } ?>
													<?php echo $form->error($model,'nama_barang'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'jumlah'); ?>
													<?php echo $form->numberField($model,'jumlah',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'cek', 'min'=>'1', 'value'=>'1')); ?>
													<?php echo $form->error($model,'jumlah'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'supplier'); ?>
													<?php echo $form->textField($model,'supplier',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'supplier','readOnly'=>true)); ?>
													<?php echo $form->error($model,'supplier'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'status'); ?>
													<?php echo $form->hiddenField($model,'status',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'status','value'=>'Open','readOnly'=>true)); ?>
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
						$("#nama_barang").change(function() {
						var nama_barang = $("#nama_barang").val();

						//make the ajax call
						$.ajax({
							url: "http://localhost/rop_siak/protected/getsupplier.php",
							type: 'POST',
							dataType : 'JSON',
							data: {nama_barang : nama_barang},
							success: function(response) {
								$('#supplier').val(response.supplier);
							}
						});
					});
					});
				</script>