<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use DB;
use App\Http\Resources\Order as OrderResource;
use App\Http\Resources\Product as ProductResource;
use App\Http\Resources\Country as CountryResource;

class OrderController extends Controller
{
    public function index(){
        $order=Order::all();
       
        return OrderResource::collection($order);
        
    }

    public function highestProductPrice(){
        $price = DB::table('orders')
                ->join('products', 'products.id', '=', 'orders.product_id')
                ->select(['orders.product_id','products.price',DB::raw('sum(products.price) as amount')])
                ->groupBy('product_id')
                ->orderBy('price','desc')
                ->take(1)
                ->get();
               
         return ProductResource::collection($price);
    }

    public function highestOrderCountry(){

    $result = DB::table('orders')
            ->leftJoin('userms', 'userms.id', '=', 'orders.user_id')
            ->leftJoin('products', 'products.id', '=', 'orders.product_id')
            ->select(['userms.country','orders.*','products.price',DB::raw('sum(products.price) as amount')])
            ->groupBy('user_id')
            ->orderBy('amount','desc')
            ->take(1)
            ->get();
            
            return CountryResource::collection($result);
}
}
