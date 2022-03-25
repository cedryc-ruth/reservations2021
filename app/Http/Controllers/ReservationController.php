<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Representation;
use App\Models\Show;

class ReservationController extends Controller
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
        //
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

    /**
     * Book the specified representaiton for the logged in user.
     *
     * @param  int  $representationId
     * @return \Illuminate\Http\Response
     */
    public function book(Request $request, $representationId)
    {
        
    }

    public function checkout(Request $request, $representationId)
    {

        $intent = $request->user()->createSetupIntent();

        return view('reservations.checkout', [
            'intent' => $intent,
        ]);
    }

    public function pay(Request $request, string $paymentMethod)
    {
        $user = $request->user();
        //$stripeCustomer = $user->createAsStripeCustomer();

        $paymentMethod = $request->query('paymentMethod');

        $user->addPaymentMethod($paymentMethod);
        //dd($request->user()->paymentMethods());

        //TODO Calculer prix: nbPlaces * show->price
        $stripeCharge = $request->user()->charge(
            100, $paymentMethod
        );

        if($stripeCharge) {
            $reservation = new Reservation();
            $reservation->representation_id = $representationId;
            $reservation->user_id = $userId;
            $reservation->places = $places;

            if($reservation->save()) {
                return view('show.show');
            }
        }

        return view('representations.index');
    }
}
