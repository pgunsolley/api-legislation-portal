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
                'id' => '29d1b93a-03c4-43e6-827b-5203ed02162a',
                'user_id' => '3267f5a8-749c-471b-8b14-657a31a65142',
                'bill_id' => 1,
                'created' => '2026-02-07 01:25:33',
                'modified' => '2026-02-07 01:25:33',
            ],
        ];
        parent::init();
    }
}
