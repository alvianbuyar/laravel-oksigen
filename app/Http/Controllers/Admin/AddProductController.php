<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\productcategories;
use App\addproduct;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pagename = 'Add New Product';
        $data = addproduct::all();
        return view('admin.addproduct.index', compact('data', 'pagename'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories_data = productcategories::all();
        $pagename = 'Add Product Form';
        return view('admin.addproduct.create', compact('pagename', 'categories_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'txtproduct_seriesnumber' => 'required',
            'txtproduct_name' => 'required',
            'txtid_categories' => 'required',
            'txtstock' => 'required',
            'txtdescription' => 'required',
            'txtproduct_price' => 'required',
            'txttube_price' => 'required',
        ]);

        $product_data = new addproduct([
            'product_seriesnumber' => $request->get('txtproduct_seriesnumber'),
            'product_name' => $request->get('txtproduct_name'),
            'id_categories' => $request->get('txtid_categories'),
            'stock' => $request->get('txtstock'),
            'description' => $request->get('txtdescription'),
            'product_price' => $request->get('txtproduct_price'),
            'tube_price' => $request->get('txttube_price'),
        ]);

        $product_data->save();
        return redirect('admin\addproduct')->with('Success', 'data product saved successfully');
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
        //
        $categories_data = productcategories::all();
        $pagename = 'Product Update';
        $data = addproduct::find($id);
        return view('admin.addproduct.edit', compact('data', 'pagename', 'categories_data'));
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
        //
        $request->validate([
            'txtproduct_seriesnumber' => 'required',
            'txtproduct_name' => 'required',
            'txtid_categories' => 'required',
            'txtstock' => 'required',
            'txtdescription' => 'required',
            'txtproduct_price' => 'required',
            'txttube_price' => 'required',
        ]);

        $product = addproduct::find($id);
        $product->product_seriesnumber = $request->get('txtproduct_seriesnumber');
        $product->product_name = $request->get('txtproduct_name');
        $product->id_categories = $request->get('txtid_categories');
        $product->stock = $request->get('txtstock');
        $product->description = $request->get('txtdescription');
        $product->product_price = $request->get('txtproduct_price');
        $product->tube_price = $request->get('txttube_price');

        $product->save();
        return redirect('admin\addproduct')->with('Success', 'data product saved successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = addproduct::find($id);

        $product->delete();
        return redirect('admin\addproduct')->with('Success', 'category data deleted successfully');
    }
}
