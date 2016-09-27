<?php
/**
 * Controller for Rest Service
 */

namespace app\controllers;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
	public $modelClass = 'app\models\Users';
}


