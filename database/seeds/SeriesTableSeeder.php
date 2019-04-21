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
    		if ( isset( $series['topic_ids'] ) && $series['topic_ids'] ) {
    			$new_series->topics()->attach($series['topic_ids']);
    		}
    	}

        echo config('app.machine');
    }
}
