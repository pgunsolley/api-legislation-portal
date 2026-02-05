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
                'id' => 1,
                'user_id' => '9e9ea3d4-dd87-4684-9a90-20545c97205f',
                'bill_id' => 1,
                'body' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
