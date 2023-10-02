<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use App\Models\PostView;
use App\Models\Blog;
use App\Models\SendMail;
use App\Models\Newsletter;
use Spatie\Sitemap\SitemapGenerator;
use DB;
use Session;

use Redirect;

class HomeController extends Controller
{

    public function index()
    {
        $title = "Home";
        $Blog = Blog::limit('2')->get();
        // $Slider = DB::table('slider')->get();
        $Property = Property::where('Status','Sale')->where('home','1')->where('active','Approved')->where('type', '!=' , "Plot")->orderBy('id','ASC')->limit('6')->get();
        $PropertyRent = Property::where('Status','Rent')->where('home','1')->where('active','Approved')->where('type', '!=' , "Plot")->orderBy('id','ASC')->limit('6')->get();
        $PropertyPlots = Property::where('type','Plot')->where('active','Approved')->get();
        return view('front.index', compact('Property','PropertyRent','Blog','PropertyPlots','title'));
    }

    public function about()
    {
        $title = "About";
        $Blog = Blog::limit('2')->get();
        $Property = Property::where('Status','Sale')->where('home','1')->where('active','Approved')->where('type', '!=' , "Plot")->orderBy('id','ASC')->limit('6')->get();
        $PropertyRent = Property::where('Status','Rent')->where('home','1')->where('active','Approved')->where('type', '!=' , "Plot")->orderBy('id','ASC')->limit('6')->get();
        $PropertyPlots = Property::where('type','Plot')->where('active','Approved')->get();
        return view('front.about', compact('Property','PropertyRent','Blog','PropertyPlots','title'));
    }

    public function contact()
    {
        $title = "About";
        $Blog = Blog::limit('2')->get();
        $Property = Property::where('Status','Sale')->where('home','1')->where('active','Approved')->where('type', '!=' , "Plot")->orderBy('id','ASC')->limit('6')->get();
        $PropertyRent = Property::where('Status','Rent')->where('home','1')->where('active','Approved')->where('type', '!=' , "Plot")->orderBy('id','ASC')->limit('6')->get();
        $PropertyPlots = Property::where('type','Plot')->where('active','Approved')->get();
        return view('front.contact-us', compact('Property','PropertyRent','Blog','PropertyPlots','title'));
    }


    public function team($slung){
        $title = "About";
        $Users = DB::table('users')->where('slung',$slung)->get();
        foreach($Users as $user){
            $id = $user->id;
            $Property = Property::where('user_id',$user->id)->where('active','Approved')->paginate('12');
            return view('front.team',compact('id','Property','Users','title'));
        }
    }

    public function invoice()
    {
        $subject = "Subject";
        $name = "Albert Muhatia";
        return view('invoice', compact('subject','name'));
    }

    public function search(){
        $title = "Search";
        return view('front.search', compact('title'));
    }

    public function properties($id){
        $Property = Property::where('Status',$id)->where('active','Approved')->where('type', '!=' , "Plot")->orderBy('id','DESC')->paginate(12);
        $title = $id;
        return view('front.properties',compact('id','Property','title'));
    }

    public function all_properties(){
        $title = "sale";
        $Property = Property::where('active','Approved')->orderBy('id','DESC')->paginate(12);
        return view('front.all-properties',compact('Property','title'));
    }




    public function properties_agent($slung){
        $title = "Home";
        $Users = DB::table('users')->where('slung',$slung)->get();
        foreach($Users as $user){
            $id = $user->id;
            $Property = Property::where('user_id',$user->id)->where('active','Approved')->paginate('12');
            return view('front.properties_agent',compact('id','Property','title'));
        }
    }

    public function blogs($id){
        $title = "Media";
        $Blog = Blog::where('slung',$id)->get();
        return view('front.blog',compact('id','Blog','title'));
    }

    public function blog_single(){
        $title = "Media";
        $Blogs = DB::table('blogs')->paginate('12');
        return view('front.blogs',compact('title','Blogs'));
    }

    public function property_talks(){
        $title = "Media";
        $Blogs = DB::table('blogs')->paginate('12');
        return view('front.talks',compact('title','Blogs'));
    }


    public function plots($id){
        $Property = Property::where('slung',$id)->get();
        return view('front.plots',compact('id'));
    }


    public function land_for_sale(){
        $id = "Plots";
        $description = "Discover exclusive premium plots for sale in prime locations around Nairobi. Explore your dream investment with spacious, well-located plots offering unmatched potential. Don't miss out on this opportunity to secure your piece of Nairobi's thriving real estate market.";
        $Property = Property::where('type','Plot')->where('active','Approved')->orderBy('id','DESC')->get();
        $title = "Plots";
        return view('front.land_for_sale', compact('Property','id','description','title'));
    }

    public function buying(){
        $title = "Sale";
        $Buying = DB::table('abouts')->get();
        return view('front.buying',compact('Buying','title'));
    }

    public function approved(){
        $title = "UN";
        $Property = Property::where('un','1')->where('active','Approved')->get();
        return view('front.approved',compact('Property','title'));
    }



    public function renting(){
        $title = "Sale";
        $Renting = DB::table('abouts')->get();
        return view('front.renting',compact('Renting','title'));
    }


    public function privacy(){
        return view('front.privacy');
    }

    public function terms(){
        return view('front.terms');
    }

    public function copyright(){
        return view('front.copyright');
    }
    public function soon(){
        return view('front.soon');
    }

    public function property($slung){
        $Property = Property::where('slung',$slung)->get();
        foreach($Property as $prop){
            $title = $prop->property_name;
            $description = "$prop->property_name located at  $prop->address listed for $prop->status";
        }
        // Count Views
        $PostID = $prop->id;
        $PostSlung = $slung;
        $url = "https://premiumhomes.casa/properties/$slung";
        $session_id = 0;
        if(Auth::User()){
            $user_id = Auth::User()->id;
        }else{
            $user_id = $session_id;
        }
        $ip = request()->ip();
        $user_agent = request()->userAgent();

        $PostView = new PostView;
        $PostView->post_id = $PostID;
        $PostView->titleslug = $PostSlung;
        $PostView->url = $url;
        $PostView->session_id = $session_id;
        $PostView->user_id = $prop->user_id;
        $PostView->ip = $ip;
        $PostView->agent = $user_agent;
        $PostView->save();
        // dd($user_agent);
        return view('front.property', compact('Property','title','description'));
    }


    public function property_gallery($slung){
        $Property = Property::where('slung',$slung)->get();
        foreach($Property as $prop){
            $title = $prop->property_name;
            $description = "$prop->property_name located at  $prop->address listed for $prop->status";
        }
        // Count Views
        $PostID = $prop->id;
        $PostSlung = $slung;
        $url = "https://premiumhomes.casa/properties/$slung";
        $session_id = 0;
        if(Auth::User()){
            $user_id = Auth::User()->id;
        }else{
            $user_id = $session_id;
        }
        $ip = request()->ip();
        $user_agent = request()->userAgent();

        $PostView = new PostView;
        $PostView->post_id = $PostID;
        $PostView->titleslug = $PostSlung;
        $PostView->url = $url;
        $PostView->session_id = $session_id;
        $PostView->user_id = $prop->user_id;
        $PostView->ip = $ip;
        $PostView->agent = $user_agent;
        $PostView->save();
        // dd($user_agent);
        return view('front.property_gallery', compact('Property','title','description','PostID'));
    }

    public function search_property(Request $request){
        // dd($request->all());
        $keyword = $request->keyword;
        $location = $request->location;
        $type = $request->type;
        $status = $request->status;

        $title = "Search";

        $Results = DB::table('properties')->where('type',$type)->where('status',$status)->where('property_name','LIKE','%'.$keyword.'%')->where('address','LIKE','%'.$location.'%')->paginate(100);
        if($Results->isEmpty()){
            // Set Variables
            Session::flash('message', "Your Search Combination has no results, Feel free to contact us for more infomation");
            return view('front.search', compact('title'));
        }

        else{
            $SearchResults=$Results;
            return view('front.search_property', compact('SearchResults','title'));
        }

    }


    public function process_contact(Request $request){
        $full_name = "$request->name $request->lastname";
        $email_address = $request->email;
        $mobile = $request->mobile;
        $message = $request->message;
        // Send Email
        SendMail::bookAppointments($full_name,$email_address,$mobile,$message);
        Session::flash('message', "Message Submited Successfully");
        return Redirect::back();
    }



    public function schedule_post(Request $request){
        $numberOfPeople = $request->quant[1];
        $full_name = $request->full_name;
        $email_address = $request->email_address;
        $phone_number = $request->phone_number;
        $agent_email = $request->email_agent;
        $agent_name = $request->name_agent;
        $reservation_date = $request->reservation_date;
        $reservation_time = $request->reservation_time;
        // Send Email
        SendMail::bookAppointment($numberOfPeople,$full_name,$email_address,$phone_number,$reservation_time,$reservation_date,$agent_email,$agent_name);
        Session::flash('message', "Message Submited Successfully");
        return Redirect::back();
    }

    // public function sitemaps(){
    //     $path = url('/');
    //     SitemapGenerator::create('https://premiumhomes.casa/')->writeToFile($path);
    // }

    public function news_letters(Request $request)
    {
            if ( ! Newsletter::isSubscribed($request->user_email) ) {
                Newsletter::subscribe($request->user_email);
            }



    }
}
