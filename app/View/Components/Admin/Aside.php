<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Aside extends Component
{
    /**
     * Create a new component instance.
     */

    public $routes;
    public function __construct()
    {
        $this->routes = [
            [
                "label" => "Dashboard",
                "icon" => "fas fa-tachometer-alt",
                "route_name" => "dashboard",
                "route_active" => "dashboard",
                "is_dropdown" => false
            ],
            [
                "label"         => "Master Data",
                "icon"          => "fas fa-server",
                "route_active"  => "master-data.*",
                "is_dropdown"   => true,
                "dropdown"      => [
                    "label" => "Kategory",
                    "route_active" => "master-data.kategory.*",
                    "route_name"   => "master-data.kategory.index",
                ],
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.aside');
    }
}
