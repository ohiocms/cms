<?php

use Illuminate\Database\Seeder;

use Belt\Content\Tout;
use Belt\Content\Handle;

class BeltContentToutSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tout::class, 5)->create();
    }
}
