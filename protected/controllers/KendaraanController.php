<?php

class KendaraanController extends Controller
{

	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','delete','manage','admin','create','update','search'),
				'expression'=>'$user->getLevel()==1',
			),
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','manage','admin','search'),
				'expression'=>'$user->getLevel()==3',
			),
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','manage','admin','search'),
				'expression'=>'$user->getLevel()==4',
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionManage()
	{
		$this->layout = 'columna';
		$model=new Kendaraan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Kendaraan']))
			$model->attributes=$_GET['Kendaraan'];

		$this->render('manage',array(
			'model'=>$model,
		));
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	 // public function manage()
  //   {
  //       $dariDB = $this->Barang->cek();
  //       // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
  //       $nourut = substr($dariDB, 3, 4);
  //       $kodeBarangSekarang = $nourut + 1;
  //       $data = array('kode_barang' => $kodeBarangSekarang);
  //       $this->load->view("barang", $data);
  //   }

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$this->layout = 'columna';
		$model=new Kendaraan;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kendaraan']))
		{
			$model->attributes=$_POST['Kendaraan'];
			if($model->save())
				$this->redirect(array('manage'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$this->layout = 'columna';
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kendaraan']))
		{
			$model->attributes=$_POST['Kendaraan'];
			if($model->save())
				$this->redirect(array('manage'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	// public function actionSearch()
	// {
	// 	$this->layout = 'columna';
	// 	if(isset($_POST['kode_barang'])){
	// 	    $name = $_POST['kode_barang'];
	// 	}

	// 	$count = Yii::app()->db->createCommand("SELECT COUNT(*) FROM BARANG WHERE kode_barang = '".$name."' or nama_barang like '%".$name."%' ")->queryScalar(); 
	// 	$s_barang=YII::app()->db->createCommand("SELECT * FROM BARANG WHERE kode_barang = '".$name."' or nama_barang like '%".$name."%' ")->queryAll();

	//     $this->render('search', array(
	//         'count'=>$count,'s_barang'=>$s_barang,'name' => $name,
	//     ));
	// }

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Kendaraan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Kendaraan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Kendaraan']))
			$model->attributes=$_GET['Kendaraan'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Barang the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Kendaraan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Barang $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='kendaraan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
