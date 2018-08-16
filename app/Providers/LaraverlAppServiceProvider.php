<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;
class LaraverlAppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $halaman = Request::segment(1);
        $sub_halaman = '';
        $sub_sub_halaman = '';
        $active='';
        switch ($halaman) {
            case '':
                $halaman = 'dashboard';
                $active = 'active';
                break;
            case 'user':
                $halaman = 'user';
                $active = 'active';
                break;
            case 'vendor':
                $halaman = 'vendor';
                $sub_halaman =  Request::segment(2);
                $active = 'active';
                break;
            case 'laporan':
                $halaman = 'laporan';
                $sub_halaman =  Request::segment(2);
                $active = 'active';
                break;
            case 'master':
                $halaman = 'master';
                $sub_halaman =  Request::segment(2);
                $sub_sub_halaman = Request::segment(3);
                $active = 'active';
                break;
        }
        // print_r($active);die();
        view()->share('halaman',$halaman);
        view()->share('sub_halaman',$sub_halaman);
        view()->share('sub_sub_halaman',$sub_sub_halaman);
        view()->share('active',$active);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
