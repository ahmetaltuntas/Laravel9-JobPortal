<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use App\Models\Profile;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        $settings= Setting::first();
        $job = Job::where('user_id','=',Auth::id())->get();

        return view('home.companycp.index',[
            'data' => $data,
            'settings' => $settings,
            'job' => $job
        ]);
    }
    public function profile()
    {
        $user = User::find(Auth::id());
        $settings= Setting::first();
        return view('home.companycp.profile',[
            'settings' => $settings,
            'user'=>$user
        ]);
    }
    public function saveprofile(Request $request)
    {
        $data= Profile::find($request->profile_id);
        $data->title = $request->title;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        if($request->file('coverimage')){
            $data->coverimage=$request->file('coverimage')->store('images');
        }
        $data->address = $request->address;
        $data->about = $request->about;
        $data->phone = $request->phone;
        $data->website = $request->website;
        $data->industry = $request->industry;
        $data->founded = $request->founded;
        $data->company_size = $request->company_size;
        $data->user_id = $request->user_id;
        $data2=User::find($request->user_id);
        $data2->name=$request->name;
        $data2->email=$request->email;
        $data->save();
        $data2->save();
        return redirect(route('companycp.profile'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newjob()
    {
        $data = Category::all();
        $settings= Setting::first();
        return view('home.companycp.newjob',[
            'data' => $data,
            'settings' => $settings
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storejob(Request $request)
    {
        $data = new Job();
        $data->category_id = $request->category_id;
        $data->user_id = Auth::id();
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->typeof = $request->typeof;
        $data->experience = $request->experience;
        $data->level = $request->level;
        $data->location = $request->location;
        $data->salary = $request->salary;
        $data->status = $request->status;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        return redirect(route('companycp.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function jobs()
    {
        $data = Job::where('user_id','=',Auth::id())->get();
        $settings= Setting::first();
        return view('home.companycp.jobs',[
            'data' => $data,
            'settings' => $settings
        ]);
    }
    public function showjob($id)
    {
        $data = Job::find($id);
        return view('home.companycp.showjob',[
            'data' => $data
        ]);
    }
    public function editjob($id)
    {
        $data = Job::find($id);
        $datalist = Category::all();
        return view('home.companycp.editjob',[
            'data' => $data,
            'datalist'=>$datalist
        ]);
    }
    public function updatejob(Request $request,$id)
    {
        //
        $data= Job::find($id);
        $data->category_id = $request->category_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->typeof = $request->typeof;
        $data->experience = $request->experience;
        $data->level = $request->level;
        $data->location = $request->location;
        $data->salary = $request->salary;
        $data->status = $request->status;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();


        return redirect(route('companycp.editjob',['id'=>$id]));
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
