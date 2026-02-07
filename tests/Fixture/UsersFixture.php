<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'id' => '8ed05ee8-418b-4ee9-abf4-a59ef0a2fd9c',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'email_verified' => 1,
                'created' => '2026-02-07 01:25:26',
                'modified' => '2026-02-07 01:25:26',
            ],
        ];
        parent::init();
    }
}
