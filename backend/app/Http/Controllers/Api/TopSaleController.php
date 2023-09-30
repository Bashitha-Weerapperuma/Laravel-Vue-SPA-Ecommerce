<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\SearchProductService;
use Illuminate\Http\Request;

class TopSaleController extends Controller {

    /**
     * Get Top sale products.
     */
    public function __invoke(Request $request): object {
        return SearchProductService::searchProductQuery($request, 'sales');
    }
}
