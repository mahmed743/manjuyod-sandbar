<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create(
            ['name' => 'Pending']
        );

        Status::create(
            ['name' => 'Approved']
        );

        Status::create(
            ['name' => 'Done']
        );
    }
}
