<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Illuminate\Http\Request;
use CurrencyApi\CurrencyApi\CurrencyApiClient;
use Illuminate\Support\Facades\Cache;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->show_rate();
        return view('rate.index', ['currency' => $data])->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Rate $rate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rate $rate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rate $rate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rate $rate)
    {
        //
    }

    public function refresh()
    {
        Cache::forget('currency_rates');
        $data = $this->show_rate();
        return $data;
    }

    public function show_rate()
    {
        $currencies = Cache::remember('currency_rates', now()->addDay(), function () {
            $data = new CurrencyApiClient('cur_live_Umhv9b3Im2fY5ElDJGGgcG8YhMG6f8gTHlBKkxBS');
            return $data->latest();
        });

        return $currencies['data'];
    }
}