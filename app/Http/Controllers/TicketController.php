<?php

namespace App\Http\Controllers;

use App\Company;
use Auth;
use DB;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class TicketController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        $company_id = Auth::user()->company_id;
        $tickets = Ticket::where('company_id', '=', $company_id)
            ->where('status', '!=', '5')
            ->orderBy('created_at', 'ASC')
            ->paginate(15);

        return view('tickets.overview', ['tickets' => $tickets]);

    }

    /**
     * Display the view for the ticket submittion portal
     */
    public function submitIndex($id) {
        $company = Company::find($id);
        return view('submission.submit', ['company' => $company]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        // attachment
        $file = $request->attachment->storeAs('companies/'.$request->input('company_id').'/attachments', $request->input('name').'_'.time().'_screenshot.jpg', 'public');
    
        $ticket = new Ticket([
            'name'          => $request->input('name'), 
            'email'         => $request->input('email'), 
            'subject'       => $request->input('subject'), 
            'message'       => $request->input('message'), 
            'status'        => 0, 
            'company_id'    => $request->input('company_id'),
            'user_id'       => null,
        ]);

        $ticket->save();

        return redirect()
                ->back()
                ->with('info', 'Good news, you successfully submitted your ticket! We will reach out to you shortly');
    
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
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket, $id) {

        $ticket = Ticket::find($id);
        return view('tickets.view', ['ticket' => $ticket]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
