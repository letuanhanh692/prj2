<?php

namespace App\Http\Controllers\Front;

use AllowDynamicProperties;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use App\Services\ProductComment\ProductCommentServiceInterface;
use Illuminate\Http\Request;

#[AllowDynamicProperties] class ShopController extends Controller
{
    private $productService;
    private $productCommentService;

    private $productCategoryService;

    public function __construct(ProductServiceInterface $productService,
                                ProductCommentServiceInterface $productCommentService,
                                ProductCategoryServiceInterface $productCategoryService)
    {
        $this->productService = $productService;
        $this->productCommentService = $productCommentService;
        $this->productCategoryService = $productCategoryService;
    }


    public function show($id)
    {
        $product = $this->productService->find($id);
        $product_comment = $product->productComments->all();
        $relatedProducts = $this->productService->getRelatedProducts($product);

    return view('front.shop.show', compact('product', 'product_comment', 'relatedProducts'));
    }

    public function postComment(Request $request) {
        $this->productCommentService->create($request->all());
        return redirect()->back();
    }

    public  function index(Request $request)
    {
        $categories = ProductCategory::all();

        $products = $this->productService->getProductOnIndex($request);
      return  view('front.shop.index',compact('products','categories'));
    }

    public  function category($categoryName, Request $request)
    {
         $categories =  ProductCategory::all();
         $products   = ProductCategory::where('name', $categoryName)->first()->products->toQuery();

        $products = $this->productService->getProductByCategory($categoryName,$request);
      return  view('front.shop.index',compact('products','categories'));
    }

    public function filter($products, Request $request)
    {


        $priceMin = $request->price_min;
        $priceMax = $request->price_max;

        $priceMin = str_replace('$', '', $priceMin);
        $priceMax = str_replace('$', '', $priceMax);
        $products = ($priceMin != null && $priceMax != null) ? $products->whereBetween('price', [$priceMin, $priceMax]) : $products;


      return  $products;
    }



}


