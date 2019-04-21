<?php

use App\Topic;
use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Topic::truncate();
    	foreach(Helper::topics() as $topic) {
    		Topic::create(['title' => $topic ]);
    	}
    }
}
