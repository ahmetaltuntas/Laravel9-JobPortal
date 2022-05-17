<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Job;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //
    protected $appends = [
        'getCategoryName'
    ];
    public function dropdown(Request $request){
        if($request->has('category_id')){
            $parentId = $request->get('category_id');
            $data = Category::where('parent_id',$parentId)->get();
            return ['success'=>true,'data'=>$data];
        }
    }
    public static function geticon(){
        $icon= Setting::first();
        return $icon->icon;
    }
    public static function maincategorylist(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public static function getCategoryName($jobid){
        $title = Category::find($jobid);
        return $title->title;
    }

    public static function getJobNumber($category){
        $jobdata= DB::table('jobs')->where('category_id',$category)->get();
        $num=0;
        foreach($jobdata as $rs){
            $num++;
        }
        return $num;
    }

    public static function getCommentNumber($id){
        $num=0;
        foreach($id as $rs){
            $num++;
        }
        return $num;
    }

    public function index(){

        $jobdata=Job::limit(6)->get();
        $catdata=Category::limit(12)->get();
        $settings= Setting::first();
        return view('home.index',[
            'catdata' => $catdata,
            'jobdata' => $jobdata,
            'settings' => $settings

        ]);
    }
    public function job($id){

        $data=Job::find($id);
        $reviews= Comment::where('job_id',$id)->where('status','True')->get();
        return view('home.job',[
            'data' => $data,
            'reviews' => $reviews
        ]);
    }
    public function joblist(Request $request){

        if($request->has('category_id')&&$request->title!=null){
            $title = $request->get('title');

            if($request->location!=null){
                $loc = $request->get('location');
                if($request->category_id!='null'){
                    $parentId = $request->get('subcategory_id');
                    $jobdata = Job::where('category_id',$parentId)->where('title','LIKE','%'.$title.'%')->where('location','LIKE','%'.$loc.'%')->get();
                    return view('home.joblist',[
                        'jobdata' => $jobdata
                    ]);
                }
                elseif($request->category_id=='null'){
                    $jobdata = Job::where('location','LIKE','%'.$loc.'%')->where('title','LIKE','%'.$title.'%')->get();
                    return view('home.joblist',[
                        'jobdata' => $jobdata
                    ]);
                }
            }
            elseif($request->location==null){
                if($request->category_id!='null'){
                    $parentId = $request->get('subcategory_id');
                    $jobdata = Job::where('category_id',$parentId)->where('title','LIKE','%'.$title.'%')->get();
                    return view('home.joblist',[
                        'jobdata' => $jobdata
                    ]);
                }
                elseif($request->category_id=='null'){
                    $jobdata = Job::where('title','LIKE','%'.$title.'%')->get();
                    return view('home.joblist',[
                        'jobdata' => $jobdata
                    ]);
                }
            }

        }
        elseif($request->has('category_id')&&$request->title==null){
            if($request->location!=null){
                $loc = $request->get('location');
                if($request->category_id!='null'){
                    $parentId = $request->get('subcategory_id');
                    $jobdata = Job::where('category_id',$parentId)->where('location','LIKE','%'.$loc.'%')->get();
                    return view('home.joblist',[
                        'jobdata' => $jobdata
                    ]);
                }
                elseif($request->category_id=='null'){
                    $jobdata = Job::where('location','LIKE','%'.$loc.'%')->get();
                    return view('home.joblist',[
                        'jobdata' => $jobdata
                    ]);
                }
            }
            elseif($request->location==null){
                if($request->category_id!='null'){
                    $parentId = $request->get('subcategory_id');
                    $jobdata = Job::where('category_id',$parentId)->get();
                    return view('home.joblist',[
                        'jobdata' => $jobdata
                    ]);
                }
                elseif($request->category_id=='null'){
                    $jobdata = Job::all();
                    return view('home.joblist',[
                        'jobdata' => $jobdata
                    ]);
                }
            }

        }
        else{
            $jobdata=Job::all();

            return view('home.joblist',[
                'jobdata' => $jobdata
            ]);
        }
    }
    public function notfound(){
        return view('errors.404');
    }
    public function aboutus(){
        $settings= Setting::first();

        return view('home.aboutus',[
            'settings' => $settings
        ]);
    }
    public function references(){
        $settings= Setting::first();

        return view('home.references',[
            'settings' => $settings
        ]);
    }
    public function faqs(){
        $setting= Faq::all();

        return view('home.faqs',[
            'setting' => $setting
        ]);
    }
    public function signin(){
        return view('home.sign-in');
    }
    public function signup(){
        return view('home.sign-up');
    }
    public function contactus(){
        return view('home.contactus');
    }
    public function storemessage(Request $request){
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('contactus')->with('info','Your message has been sent, Thank you.');

    }
    public function storecomment(Request $request){
        $data = new Comment();
        $data->user_id = Auth::id();
        $data->job_id = $request->input('job_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('job',['id'=>$request->input('job_id')])->with('info','Your comment has been sent, Thank you.');

    }
}
