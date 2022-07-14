<?php


use Phinx\Seed\AbstractSeed;

class DeviceAssetSeeder extends AbstractSeed
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
        $data = [];
        
        $device = $this->query('SELECT id FROM devices')->fetchAll();
        $device_ids = array_column($device,'id');
        $asset = $this->query('SELECT id FROM assets')->fetchAll();
        $asset_ids = array_column($asset,'id');
        unset($device,$asset);
        $i = 0;

        foreach ($device_ids as $key => $device_id) {
            foreach ($asset_ids as $key => $asset_id) {
                $data[] = [
                    'dev_id' => $device_id, 
                    'asset_id' => $asset_id, 
                    'sort' => $i, 
                    'created_at' => date('Y-m-d H:i:s') ,
                    'updated_at' => date('Y-m-d H:i:s') 
                ];
                $i++;
            }
        }

        $this->table('device_asset')->insert($data)->save();
    }
}
