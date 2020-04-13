<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Storage;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::paginate(5);
        return view('admin.product.index', compact('product'));
    }

    public function cart(){
        return view('admin.product.cart');
    }

    public function addToCart($id)
    {
        $product = Product::find($id);
        if(!$product) {
            abort(404);
        }

        if ($product->quantity > 0) {
            $product->quantity -= 1;
            $product->save();
            $cart = session()->get('cart');
        
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                $id => [
                    "name" => $product->title,
                    "quantity" => 1,
                    "price" => $product->price,
                    "image" => $product->image
                           ]
                   ];
                   session()->put('cart', $cart);
        
                   return redirect()->back()->with('success', 'Product added to cart successfully!');
               }
        
               // if cart not empty then check if this product exist then increment quantity
               if(isset($cart[$id])) {
        
                   $cart[$id]['quantity']++;
        
                   session()->put('cart', $cart);
        
                   return redirect()->back()->with('success', 'Product added to cart successfully!');
        
               }
        
               // if item not exist in cart then add to cart with quantity = 1
               $cart[$id] = [
                   "name" => $product->title,
                   "quantity" => 1,
                   "price" => $product->price,
                   "image" => $product->image
               ];
        
               session()->put('cart', $cart);
        
               return redirect()->back()->with('success', 'Product added to cart successfully!');
           }
           else {

            return redirect()->back()->with('m', 'no quantity for this product');
        }
    }
       
           public function updateCart()
           {
               if($request->id and $request->quantity)
               {
                   $cart = session()->get('cart');
        
                   $cart[$request->id]["quantity"] = $request->quantity;
        
                   session()->put('cart', $cart);
        
                   session()->flash('success', 'Cart updated successfully');
               }
           }
        
           public function remove(Request $request)
           {
               if($request->id) {
        
                   $cart = session()->get('cart');
        
                   if(isset($cart[$request->id])) {
        
                       unset($cart[$request->id]);
        
                       session()->put('cart', $cart);
                   }
        
                   session()->flash('success', 'Product removed successfully');
               }
           }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    public function createSub()
    {
        $category = "select subCat form categories where id in (select id form categories)";
        return view('admin.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        // $validateData = $request->validate([
        //     'title' => 'required',
        //     'price' => 'required',
        //     'description' => 'required|numeric',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        //     'quantity' => 'required'
        // ]);

        $product = new Product();
        $product->title = $request->get('Title');
        $product->description = $request->get('Description');
        //$product->image = $request->get();
        $product->price = $request->get('Price');
        $product->quantity = $request->get('quantity');
        $product->Category_Id = $request->get('category_id');
        if($request->hasFile('Image')){
            $file = $request->file('Image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $location = public_path('/images');
            $file->move($location,$filename);
            $product->image = $filename;

        }
       
        $product->save();
        return back()->withInfo('product successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('admin.product.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'price' => 'required',
        //     'description' => 'required|numeric',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        // ]);


        $product = Product::find($id);
        $product->title = $request->get('Title');
        $product->description = $request->get('Description');
        //$product->image = $request->get();
        $product->price = $request->get('Price');
        if($request->hasFile('Image')){
            $file = $request->file('Image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $location = public_path('/images');
            $file->move($location,$filename);
            $oldImage = $product->image;
            \Storage::delete($oldImage);
            $product->image = $filename;

        }
        $product->save();
        return back()->withInfo('product successfully update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        Storage::delete($product->image);
        $product->delete();
        return back()->withInfo('product successfully deleted');
    }

    public function allproducts()
    {
        $product = Product::paginate(5);
        return view('allproduct', compact('product'));
    }
}
