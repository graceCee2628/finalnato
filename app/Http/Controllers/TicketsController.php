<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket; //to fetch the data from the tbl we need to bring in the model

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //$tickets = Ticket::orderBy('title', 'desc')->take(1)->get(); 
       $tickets = Ticket::orderBy('created_at', 'desc')->paginate(1); 
       return view ('tickets.index')->with('tickets', $tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'prority' => 'required',
            'description'=> 'required'
        ]);

        //create post
     /*   $ticket = new Ticket;
        $ticket = $request->input('title');
        $ticket = $request->input('priority');
        $ticket = $request->input('body');
        $ticket->save();

        return redirect('/tickets')->with('success', 'Tickets Created');*/


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tickets = Ticket::find($id); //to show the selected ticket related to it's id
        return view ('tickets.show')->with('tickets', $tickets);

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
