<?php

namespace App\Http\Controllers\Api\Frontend;

use App\Http\Controllers\Controller;
use App\Services\SearchProductService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BrandController extends Controller {
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): Response{
        $products = SearchProductService::searchProductQuery($request);
        return response(compact('products'), 200);
    }
}