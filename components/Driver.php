<?php declare(strict_types=1);

namespace app\components;

use app\interfaces\DriverInterface;
use yii\base\BaseObject;

class Driver extends BaseObject implements DriverInterface
{
	public function sit(): bool
	{
		print_r('Driver successfully sits in the car');
		return true;
	}

	public function drive(): void
	{
		print_r('Driver drives');
	}
}