<?php

use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            ['action' => 'Started new task', 'active' => true, 'created_at' => now()],
            ['action' => 'Finished new task', 'active' => true, 'created_at' => now()],
            ['action' => 'Created new task', 'active' => true, 'created_at' => now()],
            ['action' => 'Created new project', 'active' => false, 'created_at' => now()],
            ['action' => 'Commented task', 'active' => true, 'created_at' => now()],
        ]);
    }
}
