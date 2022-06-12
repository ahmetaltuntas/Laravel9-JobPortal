<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\Application;
use App\Models\Comment;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\Setting;
use App\Models\Skill;
use App\Models\User;
use App\Models\UserCV;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
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
        $data2 = Application::where('user_id','=',Auth::id());

        return view('home.user.index',[
            'data' => $data,
            'settings' => $settings,
            'data2' => $data2
        ]);
    }
    public function profile()
    {
        $user = User::find(Auth::id());
        $settings= Setting::first();
        $usercv=UserCV::where('user_id','=',Auth::id())->get();
        $skills=Skill::all();
        $experiences=Experience::all();
        $educations=Education::all();
        return view('home.user.profile',[
            'settings' => $settings,
            'usercv' => $usercv,
            'skills' => $skills,
            'experiences' => $experiences,
            'educations' => $educations,
            'user'=>$user
        ]);
    }
    public function comments()
    {
        $settings= Setting::first();
        $comments= Comment::where('user_id','=',Auth::id())->get();

        return view('home.user.comments',[
            'settings' => $settings,
            'comments' => $comments
        ]);
    }
    public function destroycomment($id)
    {
        $comments= Comment::find($id);
        $comments->delete();
        return redirect(route('user.comments'));
    }

    public function addskill(Request $request)
    {
        $data = new Skill();
        $data->name = $request->name;
        $data->user_c_v_id = $request->cvid;
        $data->save();
        return redirect(route('user.profile'));
    }

    public function deleteskill($id)
    {
        //
        $data= Skill::find($id);
        $data->delete();
        return redirect(route('user.profile'));

    }
    public function addexperience(Request $request)
    {
        $data= new Experience();
        $data->title = $request->title;
        $data->company = $request->company;
        $data->period = $request->period;
        $data->description = $request->description;
        $data->user_c_v_id = $request->cvid;
        $data->save();
        return redirect(route('user.profile'));
    }
    public function deleteexperience($id)
    {
        //
        $data= Experience::find($id);
        $data->delete();
        return redirect(route('user.profile'));

    }
    public function deleteeducation($id)
    {
        //
        $data= Education::find($id);
        $data->delete();
        return redirect(route('user.profile'));

    }
    public function addeducation(Request $request)
    {
        $data= new Education();
        $data->title = $request->title;
        $data->school = $request->school;
        $data->period = $request->period;
        $data->description = $request->description;
        $data->user_c_v_id = $request->cvid;
        $data->save();
        return redirect(route('user.profile'));
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
        $data->user_id = $request->user_id;
        $data2=User::find($request->user_id);
        $data2->name=$request->name;
        $data2->email=$request->email;
        $data->save();
        $data2->save();
        return redirect(route('user.profile'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
