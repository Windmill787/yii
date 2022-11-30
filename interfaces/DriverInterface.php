<?php declare(strict_types=1);

namespace app\interfaces;

interface DriverInterface
{
	public function sit(): bool;
	public function drive(): void;
}