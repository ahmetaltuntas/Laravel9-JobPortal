<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function index(){

        $jobdata=Job::limit(6)->get();
        $catdata=Category::limit(12)->get();
        return view('home.index',[
            'catdata' => $catdata,
            'jobdata' => $jobdata

        ]);
    }
    public function job($id){

        $data=Job::find($id);
        return view('home.job',[
            'data' => $data,
        ]);
    }
    public function joblist(Request $request){

        if($request->has('category_id')&&$request->category_id!='null'){
            $parentId = $request->get('subcategory_id');
            $jobdata = Job::where('category_id',$parentId)->get();
            return view('home.joblist',[
                'jobdata' => $jobdata
            ]);
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
        return view('home.about-us');
    }
    public function faqs(){
        return view('home.faqs');
    }
    public function signin(){
        return view('home.sign-in');
    }
    public function signup(){
        return view('home.sign-up');
    }
    public function contactus(){
        return view('home.contact-us');
    }
}
