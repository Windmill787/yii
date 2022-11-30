<?php declare(strict_types=1);

namespace tests\unit\models;

use app\components\CarType;
use app\interfaces\CarInterface;
use Codeception\Test\Unit;
use Yii;

class CarTest extends Unit
{
	public function testMove()
	{
		$car = Yii::$container->get(CarInterface::class, ['type' => CarType::PETROL]);
		verify($car)->instanceOf(CarInterface::class);
		verify($car->type->value)->equals(CarType::PETROL->value);
	}
}