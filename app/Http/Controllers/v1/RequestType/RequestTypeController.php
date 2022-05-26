<?php

namespace App\Http\Controllers\v1\RequestType;

use App\Models\RequestType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * display all pending requests
     */
    public function dispalyAllPendingRequests()
    {
        //
    }

    /**
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * approve a request
     */
    public function approveRequest(Request $request)
    {
        //
    }

    /**
     * 
     *
     * @param  \App\RequestType  $requestType
     * @return \Illuminate\Http\Response
     * decline a request
     */
    public function declineRequest(Request $request)
    {
        //
    }
}
