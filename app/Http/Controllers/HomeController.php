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
            'jobdata' => $jobdata,
            'catdata' => $catdata
        ]);


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
