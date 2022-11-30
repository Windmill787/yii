<?php

namespace app\interfaces;

interface DriverInterface
{
	public function sit(): bool;
	public function drive(): void;
}