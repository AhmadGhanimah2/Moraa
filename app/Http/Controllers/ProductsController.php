<?php

namespace App\Http\Controllers;

use App\products;
use App\sections;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $sections = sections::all();
        $products = products::all();

        return view('products.products', compact('sections', 'products'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        Products::create([
            'Product_name' => $request->Product_name,
            'section_id' => $request->section_id,
            'description' => $request->description,
        ]);
        session()->flash('Add', 'تم اضافة المنتج بنجاح ');
        return redirect('/products');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param products $products
     * @return Response
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param products $products
     * @return Response
     */
    public function edit(products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param products $products
     * @return Response
     */
    public function update(Request $request, products $products)
    {

        $id = sections::where('section_name', $request->section_name)->first()->id;

        $Products = Products::findOrFail($request->pro_id);

        $Products->update([
            'Product_name' => $request->Product_name,
            'description' => $request->description,
            'section_id' => $id,
        ]);

        session()->flash('Edit', 'تم تعديل المنتج بنجاح');
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param products $products
     * @return Response
     */
    public function destroy(products $products)
    {
        //
    }
}
