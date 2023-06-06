<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Routing\Events\Routing;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

class OpenAPIController extends Controller
{
    public function index()
    {
        $tableName = 'mentors';
        $result = [];
        $table = Schema::getColumnListing($tableName);
        foreach ($table as $column) {
            $result[$column] = Schema::getColumnType($tableName, $column);
        }

        $routesList = [];
        $routes = Route::getRoutes();
        foreach ($routes as $route) {
            if ($route->action['prefix'] === 'api') {
                $routesList[$route->uri] = $route->methods[0];
            }
        }
        var_dump($routesList, $result);
    }
}
