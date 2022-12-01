<?php declare(strict_types=1);

namespace app\models;

use Yii;

/**
 * This is the model class for table "car".
 *
 * @property int $id
 * @property string $type
 * @property float|null $price
 */
class Car extends \yii\db\ActiveRecord
{
	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return 'car';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['type'], 'required'],
			[['type'], 'string'],
			[['price'], 'number'],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'type' => 'Type',
			'price' => 'Price',
		];
	}
}
