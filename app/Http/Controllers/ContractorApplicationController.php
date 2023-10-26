<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\ContractorApplication;

class ContractorApplicationController extends Controller
{
    public function index()
    {
        $contractorApplications = ContractorApplication::all();
        return response()->json($contractorApplications);
    }

    public function show(ContractorApplication $contractorApplication)
    {
        return response()->json($contractorApplication);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'contractor_name' => 'required',
            'contractor_address' => 'required',
            'rc_number' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'brief' => 'required',
        ]);

        $contractorApplication = ContractorApplication::create($data);

        $ds_procurement = User::where('role', 'd-procurement')->get();

        foreach ($ds_procurement as $d_procurement) {
            # code...
            Notification::create([
                'user_id' => $d_procurement->id,
                // 'office_id' => $submission->office_id,
                'subject' => 'New Contractor Submission',
                'msg' => 'Application submission by : ' .$contractorApplication->contractor_name,
            ]);
        }


        return response()->json($contractorApplication, Response::HTTP_CREATED);
    }

    public function update(Request $request, ContractorApplication $contractorApplication)
    {
        $data = $request->validate([
            'contractor_name' => 'required',
            'contractor_address' => 'required',
            'rc_number' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'brief' => 'required',
        ]);

        $contractorApplication->update($data);

        return response()->json($contractorApplication, Response::HTTP_OK);
    }

    public function destroy(ContractorApplication $contractorApplication)
    {
        $contractorApplication->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

