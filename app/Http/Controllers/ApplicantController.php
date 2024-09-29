<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicantLoginRequest;
use App\Http\Requests\ApplicantRegisterRequest;
use App\Models\Applicant;
use App\Models\Barangay;
use App\Models\City;
use App\Models\Province;
use App\Models\Region;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $regions = Region::all();



        return view('register', compact('regions'));
    }
    public function create(ApplicantRegisterRequest $request)
    {

        $data = $request->validated();

        // if($request['documents']-> && $request['valid_id'])

        if ($request->hasFile('valid_id') && $request->hasFile('documents')) {
            $data['valid_id'] = $request->file('valid_id')->store('valid_id_folder', 'public');
            $data['documents'] = $request->file('documents')->store('documents_folder', 'public');

            $applicant = Applicant::create($data);

            event(new Registered($applicant));


            return redirect()->route('login');
        }
    }

    public function login(ApplicantLoginRequest $request)
    {
        $request->validated();
        auth()->guard('applicant');
        return view('applicant.dashboard-applicant');
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


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
