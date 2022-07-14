<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class DeviceAssetMigration extends AbstractMigration
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
        $table = $this->table('device_asset', [ 'comment' => '设备资源表' ]);
        $table->addColumn('dev_id', 'integer', [ 'default' => 0, 'comment' => '设备id' ])
            ->addColumn('asset_id', 'integer', [ 'default' => 0, 'comment' => '资源id' ])
            ->addColumn('sort','integer',[ 'default' => 0, 'comment' => '排序值' ])
            ->addTimestamps()
            ->addIndex(['dev_id','asset_id'], ['name' => 'idx_dev_asset'])
            ->create();
    }
}
