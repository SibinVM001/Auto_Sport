<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Phone;
use App\Models\Cart;
use App\Models\Models;
use App\Models\Brands;

class UserController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $address = $request->only(['user_id', 'state', 'district', 'city', 'pincode']);
        Address::create($address);

        $phone = $request->only(['user_id', 'phone']);
        Phone::create($phone);

        $order = $request->only(['user_id', 'model_id']);
        Cart::create($order);

        // $cart = Cart::where('user_id', $request->user_id)->get();

        // $model = Models::all();
        // $brand = Brands::all();

        // return view('cart', [
        //     'cart' => $cart,
        //     'brand' => $brand,
        //     'model' => $model,
        // ]);
        // return redirect('/cart/{user_id}')->with('user_id', $request->user_id);
        return redirect()->route('cart', ['user_id' => $request->user_id]);
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
    }
}
