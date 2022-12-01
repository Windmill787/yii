<?php

use app\components\CarType;
use yii\db\Migration;

/**
 * Handles the creation of table `car`.
 */
class m221201_111528_create_car_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
//		$this->dropTable('car');

        $this->createTable('car', [
            'id' => $this->primaryKey(),
			'type' => "ENUM('petrol', 'electric') NOT NULL",
			'price' => $this->decimal(10, 2),
        ]);

		$this->createIndex(
			'idx-car_type',
			'car',
			'type',
		);

		$batches = [];
		for ($i = 0;$i < 1000000; $i++) {
			$batches[] = [array_rand([
				CarType::PETROL->value => CarType::PETROL->value,
				CarType::ELECTRIC->value => CarType::ELECTRIC->value
			]), $i + rand(1000, 20000)];

			if (!($i % 10000)) {
				$this->batchInsert('car', ['type', 'price'], $batches);
				$batches = [];
			}
		}

		$this->batchInsert('car', ['type', 'price'], $batches);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
		$this->dropIndex('idx-car_type', 'car');

        $this->dropTable('car');
    }
}
