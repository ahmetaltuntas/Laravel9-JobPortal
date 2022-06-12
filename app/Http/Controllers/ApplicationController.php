<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Job;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userapplications()
    {
        $settings= Setting::first();
        $data= Application::where('user_id','=',Auth::id())->get();

        return view('home.user.applications',[
            'settings' => $settings,
            'data' => $data
        ]);
    }
    public function candidates()
    {
        $settings= Setting::first();
        $data = Job::where('user_id','=',Auth::id())->get();

        return view('home.companycp.candidates',[
            'settings' => $settings,
            'data' => $data
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function apply(Request $request)
    {

        $data = New Application();
        $data->user_id = Auth::id();
        $data->job_id = $request->job_id;
        $data->IP = request()->ip();
        $data->note = $request->note;
        $data->status = 'New';
        $data->save();

        return redirect(route('job',['id'=>$request->job_id]));

    }
    public function approve($id)
    {
        $data= Application::find($id);
        $data->status='Approved';
        $data->save();
        return redirect(route('companycp.candidates'));
    }
    public function reject($id)
    {
        $data= Application::find($id);
        $data->status='Rejected';
        $data->save();
        return redirect(route('companycp.candidates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Application::All();

        return view('admin.application.index',[
            'data' => $data
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= Application::find($id);
        return view('admin.application.show',[
            'data' => $data
        ]);
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
        $data= Application::find($id);
        $data->delete();
        return redirect(route('admin.application.index'));
    }
}
