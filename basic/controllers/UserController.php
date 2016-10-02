<?php
/**
 * Controller for Rest Service
 */

namespace app\controllers;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
	public $modelClass = 'app\models\Users';

	/**
	 * @inheritdoc
	 */
	public function actions()
	{
		return  [
			'index' => [
				'class' => 'yii\rest\IndexAction',
				'modelClass' => $this->modelClass,
				'checkAccess' => [$this, 'checkAccess'],
			],
			'view' => [
				'class' => 'yii\rest\ViewAction',
				'modelClass' => $this->modelClass,
				'checkAccess' => [$this, 'checkAccess'],
			],
			'search' => [
				'class' => 'yii\rest\SearchAction',
				'modelClass' => $this->modelClass,
				'checkAccess' => [$this, 'checkAccess'],
			],
			'create' => [
				'class' => 'yii\rest\CreateAction',
				'modelClass' => $this->modelClass,
				'checkAccess' => [$this, 'checkAccess'],
				'scenario' => $this->createScenario,
			],
			'update' => [
				'class' => 'yii\rest\UpdateAction',
				'modelClass' => $this->modelClass,
				'checkAccess' => [$this, 'checkAccess'],
				'scenario' => $this->updateScenario,
			],
			'delete' => [
				'class' => 'yii\rest\DeleteAction',
				'modelClass' => $this->modelClass,
				'checkAccess' => [$this, 'checkAccess'],
			],
			'options' => [
				'class' => 'yii\rest\OptionsAction',
			],
		];
	}


	//public function actionSearch($id)
	/*
	public function actionSearch()
	{
		return $this->render('index');

		// return User::findOne($id);
		// return User::findOne($id);
	} */


}




