<?php declare(strict_types=1);

namespace tests\unit\models;

use app\interfaces\CarInterface;
use app\interfaces\DriverInterface;
use Codeception\Test\Unit;
use Yii;

class DriverTest extends Unit
{
	public function testSit()
	{
		$driver = Yii::$container->get(DriverInterface::class);
		verify($driver)->instanceOf(DriverInterface::class);

		verify($driver->sit())->true();
	}

	public function testDrive()
	{
		$driver = Yii::$container->get(DriverInterface::class);
		verify($driver)->instanceOf(DriverInterface::class);
	}
}