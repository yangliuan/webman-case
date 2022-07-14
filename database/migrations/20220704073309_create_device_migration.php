<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateDeviceMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table('devices', [ 'comment' => '设备表' ]);
        $table->addColumn('mac_address', 'string', ['length' => 17, 'default' => '', 'comment' => '设备mac地址'])
            ->addColumn('alias', 'string', ['length' => 20, 'default' => '', 'comment' => '设备别名' ])
            ->addTimestamps()
            ->addIndex('mac_address', ['unique' => true, 'name' => 'idx_dev_mac'])
            ->addIndex('alias', [ 'name' => 'idx_alias'])
            ->create();
    }
}
