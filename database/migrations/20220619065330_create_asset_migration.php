<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateAssetMigration extends AbstractMigration
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
        $table = $this->table('assets', [ 'comment' => '资源文件表' ]);
        $table->addColumn('asset_type', 'enum', [ 'values' => 'img,video,audio', 'default' => 'img', 'comment' => '资源类型' ])
            ->addColumn('path', 'string', ['length' => 255, 'default' => '', 'comment' => '资源文件路径' ])
            ->addTimestamps()
            ->addIndex('asset_type', ['name' => 'idx_asset_type'])
            ->create();
    }
}
