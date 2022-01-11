<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * ProductInitial seed.
 */
class ProductInitialSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'products_code' => '100-A',
                'name' => '商品A',
                'price' => 1000,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ],
            [
                'products_code' => '100-B',
                'name' => '商品B',
                'price' => 2000,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ],
            [
                'products_code' => '100-C',
                'name' => '商品C',
                'price' => 3000,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ]
        ];

        $table = $this->table('products');
        $table->insert($data)->save();
    }
}
