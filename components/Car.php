<?php declare(strict_types=1);

namespace app\components;

use app\interfaces\CarInterface;
use app\interfaces\DriverInterface;
use yii\base\BaseObject;

class Car extends BaseObject implements CarInterface
{
	public $driver;
	public $type;

	public function __construct(DriverInterface $driver, CarType $type, $config = [])
	{
		parent::__construct($config);
		$this->driver = $driver;
		$this->type = $type;
	}

	public function move(): void
	{
		if ($this->driver->sit()) {
			print_r('driver sat in the car');
			$this->driver->drive();
			print_r('car is moving');
			return;
		}
		print_r('driver is not in the car');
	}
}