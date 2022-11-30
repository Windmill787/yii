<?php declare(strict_types=1);

namespace app\components;

use app\interfaces\DriverInterface;

class Car
{
	public $driver;

	public function __construct(DriverInterface $driver)
	{
		$this->driver = $driver;
	}

//	public function __construct(DriverInterface $driver, $config = [])
//	{
//		parent::__construct($config);
//		$this->driver = $driver;
//	}

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