<?php

namespace App\Http\Controllers;

use App\Order;
use App\Paintings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Paintings $painting)
    {
        // dd($painting);
        if (!((int)$painting->bidder_id === (int)auth()->id() && (int)$painting->status === 1)) {
            abort(403, 'You Can Not buy this painting!');
        }
        return view('payment.index', ['painting' => $painting->load('customer')]);
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
    public function store(Request $request, Paintings $painting)
    {
        if (!((int)$painting->bidder_id === (int)auth()->id() && (int)$painting->status === 1)) {
            abort(403, 'You Can Not buy this painting!');
        }
        // dd(request('stripeToken'));
        Stripe::setApiKey('sk_test_51GqarOBqoPk07Fpu9RxB2ibzgxcfJdGwyBfB2ep5ubpRZys6Hhb2evPv1ELZBx925EasMuq36KEulE6xu2eH28uH00bDXOEHBH');
        try {
            $charge = Charge::create(array(
                'amount' => $painting->bidding_price * 100 * 75.62,
                'currency' => 'inr',
                'source' => 'tok_visa',
                'description' => 'Payment Process'
            ));
            $painting->update([
                'solded' => 1
            ]);
            auth()->user()->orders()->create([
                'painting_id' => $painting->id,
                'address' => request('address'),
                'name' => request('name'),
                'phone' => request('phone'),
                'email' => request('email'),
                'payment_id' => $charge->id,
            ]);

            // dd($order);

            // $res = Auth::user()->orders()->save($order);
            // dd($res);
        } catch (\Exception $e) {
            return redirect()->route('payment.index', ['painting' => $painting->id])->with('error', $e->getMessage());
        }

        return redirect()->route('won')->with('success', 'Successfully Purchased Painting!');
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
