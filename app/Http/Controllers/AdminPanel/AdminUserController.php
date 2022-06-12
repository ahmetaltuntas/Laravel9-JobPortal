<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Profile;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use App\Models\UserCV;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('admin.user.index',[
            'data' => $data,
        ]);
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
        $data = User::find($id);
        $roles = Role::all();
        return view('admin.user.show',[
            'data' => $data,
            'roles' => $roles
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
    public function addrole(Request $request, $id)
    {
        //
        $data= new RoleUser();
        $data->user_id=$id;
        $data->role_id=$request->role_id;
        $data->save();

        return redirect(route('admin.user.show', ['id'=>$id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uid)
    {
        $data= User::find($uid);
        if($data->profiles) {
            $data2 = Profile::find($data->profiles->id);
            $data2->delete();
        }
        if ($data->usercv) {
            $data3 = UserCV::find($data->usercv->id);
            $data3->delete();
        }
        $data4 = Comment::where('user_id','=',$uid);
        foreach($data4 as $rs){
            $rs->delete();
        }
        $data->roles()->detach();
        $data->delete();
        return redirect(route('admin.user.index'));
    }
    public function destroyrole($uid,$rid)
    {
        //
        $data= User::find($uid);
        $data->roles()->detach($rid);
        return redirect(route('admin.user.show',['id'=>$uid]));
    }
}
