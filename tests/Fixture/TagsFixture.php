<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TagsFixture
 */
class TagsFixture extends TestFixture
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
                'id' => 'ea90e1e7-ad88-4873-84f0-40d56be12f23',
                'user_id' => '3ba0e0e7-9c1a-45cd-8312-f408af1d5ebf',
                'bill_id' => 1,
                'body' => 'Lorem ipsum dolor sit amet',
                'created' => '2026-02-07 01:25:29',
                'modified' => '2026-02-07 01:25:29',
            ],
        ];
        parent::init();
    }
}
