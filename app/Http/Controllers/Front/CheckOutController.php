<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use App\Services\Order\OrderService;
use App\Services\Order\OrderServiceInterface;
use App\Services\OrderDetail\OrderDetailServiceInterface;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class CheckOutController extends Controller
{
      private $orderService;
      private $orderDetailService;

      public function __construct(OrderServiceInterface $orderService,
                                  OrderDetailServiceInterface $orderDetailService)
      {
          $this->orderService = $orderService;
          $this->orderDetailService = $orderDetailService;
      }

    public function index()
    {
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.checkout.index', compact('carts', 'total', 'subtotal'));

    }

    public function addOrder(Request $request)
    {
        // 01 them don hang

        // $order = Order::create($request->all());

        $order = $this->orderService->create($request->all());

        // 02 them chi tiet don hang
        $carts = Cart::content();

        foreach ($carts as $cart) {
            $data = [
               'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'amount' => $cart->price,
                'total' => $cart->price * $cart->qty
            ];

//            $this->orderDetailService->create($data);
//            orderDetailService::create($data);
            OrderDetail::create($data);


        }

        //3. Gửi email
         $total = Cart::total();
        $subtotal = Cart::subtotal();
        $this->sendEmail($order, $total, $subtotal);

        //4. xoa gio hang
        Cart::destroy();


        //5. tra ve ket qua thong bao
       return redirect('checkout/result')->with('notification', 'Success! You will pay on delivery. Please check your email');

    }

    public function result()
    {
        $notification = session('notification');
        return view('front.checkout.result', compact('notification'));
    }




    private function sendEmail($order, $total, $subtotal) {
        $email_to = $order->email;

        Mail::send('front.checkout.email', compact('order', 'total', 'subtotal'), function ($message) use ($email_to)
        {
            $message->from('leluongtuananh6925@gmail.com', 'Tuan Anh');
            $message->to($email_to, $email_to);
            $message->subject('Order Notification');
        });
    }
}
