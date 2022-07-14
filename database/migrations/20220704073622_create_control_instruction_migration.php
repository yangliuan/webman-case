<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateControlInstructionMigration extends AbstractMigration
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
        $table = $this->table('control_instruction', [ 'comment' => '设备控制指令表' ]);
        $table->addColumn('dev_id', 'integer', [ 'default' => 0, 'comment' => '设备id'])
            ->addColumn('action_type', 'string', ['length' => 50, 'default' => '', 'comment' => '动作类型:move移动指令/play_video播放视频指令/play_audio播放音频/play_related_video播放画中画视频操作/resize_related_video切换画中画视频的大小和位置/show_related_video画中画是否显示'])
            ->addColumn('action', 'string', ['length' => 30, 'default' => '', 'comment' => '移动指令:left/right/up/down/jump:id/reset|播放音视频指令:play/stop/resume/replay|画中画位置:top/bottom/left/right/middle|画中画显示:show/hidden'])
            ->addTimestamps()
            ->addIndex('dev_id', ['name' => 'idx_dev_id'])
            ->create();
    }
}
