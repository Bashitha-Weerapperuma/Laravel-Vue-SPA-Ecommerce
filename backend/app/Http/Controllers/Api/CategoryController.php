<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\SearchProductService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller {

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): Object{
        return SearchProductService::searchProductQuery($request, 'categories');
    }
}