<?php

namespace App\Http\Controllers;

use App\Models\ticketType;
use App\Http\Requests\StoreticketTypeRequest;
use App\Http\Requests\UpdateticketTypeRequest;

class TicketTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreticketTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreticketTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ticketType  $ticketType
     * @return \Illuminate\Http\Response
     */
    public function show(ticketType $ticketType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ticketType  $ticketType
     * @return \Illuminate\Http\Response
     */
    public function edit(ticketType $ticketType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateticketTypeRequest  $request
     * @param  \App\Models\ticketType  $ticketType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateticketTypeRequest $request, ticketType $ticketType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ticketType  $ticketType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ticketType $ticketType)
    {
        //
    }
}
