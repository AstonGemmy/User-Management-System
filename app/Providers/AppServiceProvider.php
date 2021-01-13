<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view) {
            $view_object = explode('.', $view->getName());
            $view_object_keys = [
                'path',
                'name',
                'undefined_1',
                'undefined_2',
                'undefined_3',
            ];

            $links = [
                'index' => [
                    'text' => 'All Members',
                    'href' => route('records.index'),
                ],
                'create' => [
                    'text' => 'Add New Member',
                    'href' => route('records.create'),
                ],
                'print' => [
                    'text' => 'Print Members Data',
                    'href' => '/print',
                ]
            ];

            $page_title = [
                'index' => 'All Members',
                'create' => 'Add New Member',
                'print' => 'Print Members Data',
                'edit' => 'Modify Members Data',
            ];

            foreach($view_object as $old_object_key => $object_element) {
                $view_object[
                    $view_object_keys[
                        $old_object_key
                    ]
                ] = $object_element;
                unset($view_object[$old_object_key]);
                   
            }
            
            view()->share([
                'view_object' => $view_object,
                'links' => $links,
                'page_title' => $page_title,
            ]);

        });
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
