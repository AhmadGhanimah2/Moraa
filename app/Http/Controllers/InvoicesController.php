<?php

namespace App\Http\Controllers;

use App\invoices;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       $invoices= invoices::all();
       return view('invoices.invoices',compact('invoices'));

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
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param invoices $invoices
     * @return Response
     */
    public function show(invoices $invoices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param invoices $invoices
     * @return Response
     */
    public function edit(invoices $invoices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param invoices $invoices
     * @return Response
     */
    public function update(Request $request, invoices $invoices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param invoices $invoices
     * @return Response
     */
    public function destroy(invoices $invoices)
    {
        //
    }
}
