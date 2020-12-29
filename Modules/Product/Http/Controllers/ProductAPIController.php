<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Services\ProductService;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class ProductAPIController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function apiProductDetail($id)
    {
        $product = \Modules\Product\Entities\Product::find($id);
        return response()->json(array(
            'product' => $product,
            'productDetail' => $product->productDetail,
            'productImages' => $product->images,
        ));
    }

    public function loginAfter(Request $request)
    {
        $token = $request->get('token');
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer ' . $token,        
            'Accept'        => 'application/json',
        ];

        $response = $client->request('POST', 'https://laravel-login-site.herokuapp.com/api/user', 
            ['headers' => $headers]
        );
        $user = $response->getBody()->getContents();
        session(['token' => $token]);
        session(['user'=> $user]);
        session(['messenger' => 'Login Success']);
        return redirect()->route('products');
    }

    public function logout()
    {
    
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer ' . session('token'),        
            'Accept'        => 'application/json',
        ];

        $response = $client->request('POST', 'https://laravel-login-site.herokuapp.com/api/logout', 
            ['headers' => $headers]
        );
        $status = $response->getBody()->getContents();
        session()->forget('user');
        session(['messenger' => 'Logout Success']);
        return redirect()->route('products');
    }

    public function addToCart($productId)
    {
        $product = \Modules\Product\Entities\Product::find($productId);
        $data = [
            "name" => $product->name,
            "value"=> $product->price,
            "userId"=> json_decode(session('user'))->user->id,
            "amount"=> 1,
            "image" => $product->images->first()->url,
        ];
        $response = Http::post('https://web-ban-hang-server.herokuapp.com/api/cart/add', $data);
     
        $status = $response->getBody()->getContents();
        session(['messenger' => json_decode($status)->message]);
        return redirect()->route('products');
    }

    public function checkoutToCart()
    {
        return Redirect()->to('https://web-ban-hang.vercel.app/cart?token='.session('token'));
    }
}
