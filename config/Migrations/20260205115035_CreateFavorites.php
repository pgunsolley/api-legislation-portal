<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateFavorites extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/4/en/migrations.html#the-change-method
     *
     * @return void
     */
    public function change(): void
    {
        $this
            ->table('favorites')
            ->addColumn('user_id', 'uuid', [
                'default' => null,
                'null' => false,
            ])
            ->addColumn('bill_id', 'integer', [
                'default' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
}
