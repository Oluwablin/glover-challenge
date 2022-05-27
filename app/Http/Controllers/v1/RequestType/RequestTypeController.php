<?php

namespace App\Http\Controllers\v1\RequestType;

use App\Models\RequestType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Models\User;
use App\Models\UserInfo;
use App\Mail\ApprovalRequest;
use App\Events\RequestApprovalEvent;
use App\Models\UserDetail;

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
        $pending_requests = UserDetail::where('created_by', '!=', auth()->user()->id)
        ->where('approved_flag', false)
        ->with(['request_type'])
        ->get();

        if (!$pending_requests) {
            return response()->json([
                'success' => false,
                'message' => 'No record found',
                'data' => null
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => null,
            'data' => $pending_requests
        ]);
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
