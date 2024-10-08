<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Product\ProductServiceInterface;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Calculation;

class CartController extends Controller
{
    private $productService;

    public function __construct(ProductServiceInterface $productService)
    {
      $this->productService = $productService;
    }


    public function index()
    {
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        return view('front.shop.cart',  compact('carts', 'total', 'subtotal'));
    }







    public function add($id, Request $request)
    {

        $quantity = $request->input('quantity', 1);

        // Tìm sản phẩm theo id
        $product = $this->productService->find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => $quantity,
            'price' => $product->price,
            'status'=> $product->status,
            'weight' => $product->weight ?? 0,
            'options' => [
                'images' => $product->productImages,
            ],
        ]);

        // Chuyển hướng hoặc trả về phản hồi
        return redirect()->back()->with('success', 'Product added to cart!');
    }


    public function delete(Request $request)
    {
        if ($request->ajax()) {
            $response['cart']  = Cart::remove($request->rowId);

            $response['count'] = Cart::count();
            $response['total'] = Cart::total ();
            $response['subtotal'] = Cart::subtotal ();


            return  $response;
        }

       return back();
    }

//    public function update(Request $request)
//    {
//        if ($request->ajax()) {
//            $response['cart']  = Cart::upadte($request->rowId,$request->qty);
//
//            $response['count'] = Cart::count();
//            $response['total'] = Cart::total ();
//            $response['subtotal'] = Cart::subtotal ();
//
//
//            return  $response;
//        }
//
//        return back();
//    }


    public function update(Request $request)
    {
        $rowId = $request->input('rowId');
        $qty = $request->input('qty');

        // Cập nhật số lượng sản phẩm trong giỏ hàng
        Cart::update($rowId, $qty);

        // Tính toán lại subtotal và total
        $cartItem = Cart::get($rowId);
        $subtotal = $cartItem->subtotal;
        $total = Cart::total();

        return response()->json([
            'status' => 'success',
            'subtotal' => $subtotal,
            'total' => $total,
        ]);
    }


}
