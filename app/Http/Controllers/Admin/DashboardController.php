<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Order\OrderServiceInterface;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use App\Services\User\UserServiceInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    private $user;
    private $product;
    private $order;
    private $category;



    public function __construct(UserServiceInterface $user, ProductServiceInterface $product, OrderServiceInterface $order, ProductCategoryServiceInterface $category  ){
        $this->user = $user;
        $this->product = $product;
        $this->order = $order;
        $this->category = $category;
    }
    public function index(){
        $user = count($this->user->all());
        $product = count($this->product->all());
        $order = count($this->order->all());
        $category = count($this->category->all());




        return view('admin.dashboard.index', compact('user', 'product', 'order', 'category'));
    }
}
