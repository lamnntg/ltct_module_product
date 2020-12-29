<?php

namespace Modules\Product\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Http\Resources\Products;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Services\ProductService;

class ProductController extends Controller
{
    
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {    
        if(session('user')) {
            $user = session()->get('user');
            session(['is-login' => true, 'user' => $user]);
        }

        $nameProduct = $request['search'];
        if (isset($nameProduct)) {
            $products = $this->productService->findProduct($nameProduct);
        } else {
            $products = $this->productService->getAllProducts();
        }
        $categories = $this->productService->getAllCategories();
        //return new Products( $products,$categories );
        return view('web.home.index', compact('products', 'categories'));

        //return view('product::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('product::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('product::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('product::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    public function renderDetail(Request $request)
    {
        if($request->ajax())
        {
            $productId = $request->get('product_id');
            $product = \Modules\Product\Entities\Product::find($productId);
            $propertyForm = view('web.home.product-detail', compact('product'))->render();
            return response()->json(compact('propertyForm'));
        } else {
            return response()->json([]);
        }
        
    }

    
}
