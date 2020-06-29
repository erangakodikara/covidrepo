<?php

use Illuminate\Database\Seeder;

class DeviceActivitieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\DeviceActivitie::class,100)->create();
    }
}
