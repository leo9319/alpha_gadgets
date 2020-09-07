<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirmation;
use App\PreOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PreOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('preorder.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedDate = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|digits:11',
            'password' => 'required|confirmed|min:6',
        ]);

        PreOrder::updateOrCreate(
            ['mobile' => $request->mobile],
            [
                'full_name' => $request->full_name,
                'email' => $request->email,
                'address' => $request->address
            ]
        );

        Mail::to($validatedDate['email'])->send(new OrderConfirmation($validatedDate));

        return redirect()->route('preorder.confirmation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PreOrder  $preOrder
     * @return \Illuminate\Http\Response
     */
    public function show(PreOrder $preOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PreOrder  $preOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(PreOrder $preOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PreOrder  $preOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PreOrder $preOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PreOrder  $preOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(PreOrder $preOrder)
    {
        //
    }
}
