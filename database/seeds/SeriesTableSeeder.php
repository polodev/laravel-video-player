<?php

use App\Libraries\Helper;
use App\Series;
use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Series::truncate();
    	foreach(Helper::series() as $series) {
    		$new_series = Series::create([
    			'title' => $series['title'],
    			'url'   => $series['url'],
    		]);
    		if ( isset( $series['topic_id'] ) && $series['topic_id'] ) {
    			$new_series->topics()->attach($series['topic_id']);
    		}
    	}

        echo config('app.machine');
    }
}
