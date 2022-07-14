<?php


use Phinx\Seed\AbstractSeed;

class AssetSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'asset_type' => 'img',
                'path' => 'http://127.0.0.1:8787/uploads/seeder.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'asset_type' => 'audio',
                'path' => 'http://127.0.0.1:8787/uploads/seeder.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'asset_type' => 'video',
                'path' => 'http://127.0.0.1:8787/uploads/seeder.mp4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        $asset = $this->table('assets');
        $asset->insert($data)
              ->save();
    }
}
