<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductLedgersFixture
 */
class ProductLedgersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'date' => '2022-01-10',
                'product_code' => 'Lorem ipsum dolor ',
                'in_out' => 'L',
                'quantity' => 1,
                'amount' => 1,
                'created' => '2022-01-10 05:27:53',
                'modified' => '2022-01-10 05:27:53',
            ],
        ];
        parent::init();
    }
}
