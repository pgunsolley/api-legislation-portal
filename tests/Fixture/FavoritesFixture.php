<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FavoritesFixture
 */
class FavoritesFixture extends TestFixture
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
                'user_id' => '7b7bc3d9-9526-4c81-8732-1d27de2736aa',
                'bill_id' => 1,
                'created' => '2026-02-05 11:57:47',
                'modified' => '2026-02-05 11:57:47',
            ],
        ];
        parent::init();
    }
}
