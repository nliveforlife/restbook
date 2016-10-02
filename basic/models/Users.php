<?php

namespace app\models;

use yii\db\ActiveRecord;

class Users extends ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'users';
	}

	/**
	 * @inheritdoc
	 */
	public static function primaryKey()
	{
		return ['id'];
	}

	/**
	 * Define rules for validation
	 */
	public function rules()
	{
		return [
			[['name', 'phone'], 'required']
		];
	}
}