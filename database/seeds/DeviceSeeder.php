<?php


use Phinx\Seed\AbstractSeed;

class DeviceSeeder extends AbstractSeed
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
                'mac_address' => 'FC:34:97:97:AA:45', 
                'alias' => '固定测试设备',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];
        
        $faker = \Faker\Factory::create('zh_CN');

        for ($i=0; $i < 10; $i++) { 
            $data[] = [
                'mac_address' => $faker->macAddress ,
                'alias' => '测试设备'.$faker->randomNumber(5,true),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
        }

        $asset = $this->table('devices');
        $asset->insert($data)
              ->save();
    }
}
