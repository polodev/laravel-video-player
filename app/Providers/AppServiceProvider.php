<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\DB;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      // DB::listen(function (QueryExecuted $query) {
      //   $data = [
      //     'sql' => $query->sql,
      //     'bindings' => $query->bindings,
      //     'time' => $query->time,
      //   ];

      //   var_dump($data);

      // });
      Paginator::useBootstrapFour();
      Schema::defaultStringLength(191);

    }
}
