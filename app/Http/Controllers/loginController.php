<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\availability;
use App\Models\conrec;
class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   function index()
    {
        $user = User :: all();
        $availableData = availability::all();
        $data = ['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))->first(),'avail'=>availability::where('instructor_id','like','%'.session('LoggedUser').'%')->paginate(10)];
        return view('instructor/expe',$data);

       
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

    function save(Request $request)
    {
        //validate
            $request->validate([
                'name'=>'required',
                'email'=>'required|email|unique:users',
                'usertype'=>'required',
                'username'=>'required|unique:users',
                'password'=>'required|min:8|max:60'
            ]);
        //insert
        $User =new User;
        $User->name=$request->name;
        $User->usertype=$request->usertype;
        $User->email=$request->email;
        $User->username=$request->username;
        $User->password=Hash::make($request->password);
        $save = $User->save();

       
        if(!$save){
            return back()->with('fail','Username and email must be unique');
        }
        else{
            return back()->with('success','Account Created!');
        }
    }
    function check(Request $request)
    {
        
        // validate
        // $defaultUserType='instructor';
        // $usertype = User :: where ('usertype','=',$defaultUserType);
        // ---------------------------------------
      
            $userInfo = User::where('username','=',$request->username)->first();
            if($userInfo)
            {   
                if(Hash::check($request->password, $userInfo->password))
                {
                
                    if($userInfo->usertype==$request->usertype)
                    {
                        $request->session()->put('LoggedUser',$userInfo->id);
                
                            return redirect('/student');
                     
                    
                       
                    }
                    else
                    {
                        $request->session()->put('LoggedUser',$userInfo->id);
                    
                            return redirect('Instructor');
                     
                        
                    }
                
                }
                else
                {
                    //if mali ang password
                 return back()->with('fail','password does not exist, please try again');
     
                }
    
            }else
            {
               
             
                    return back()->with('fail','username does not exist, please try again');
                
                
            } 
        
      
        //----------------------------------------
        

     

    }

    function logout()
    {
     
        if(session()->has('LoggedUser'))
        {
            session()->pull('LoggedUser');
            return redirect('/');
        }
        // if(session()->has('LoggedUseri'))
        // {
        //     session()->flush('LoggedUseri');
        //     return redirect('/auth/login');
        // }
    }
    public function idashboard(){
        $LogUserI = User::where('id','=',session('LoggedUser'))->first();
        $Uname = $LogUserI->name;
        $data = ['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))->first(),'avail'=>availability::where('instructor_id','like','%'.$Uname.'%')->paginate(10),'req'=>conrec::where('instructor_id','like','%'.session('LoggedUser').'%')->orderBy('status','asc')->paginate(8)];

        
        $userdata= User::where('id','=',session('LoggedUser'))->first();
        if($userdata->usertype=='instructor')
        {
            return view('dashboardi',$data);
        }
        if($userdata->usertype=='student')
        {
            return redirect('student');
        }
    }
    function sdashboard(){
        
        $data = ['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))->first(),'avail'=>availability::orderBy('instructor_id','asc')->paginate(10)];
       
        $userdata= User::where('id','=',session('LoggedUser'))->first();
        if($userdata->usertype=='instructor')
        {
            return redirect('Instructor');
        }
        if($userdata->usertype=='student')
        {
            return view('dashboards',$data);
        }
    }
    function avail()
    {
        $LogUserI = User::where('id','=',session('LoggedUser'))->first();
        $Uname = $LogUserI->name;
        $data = ['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))->first(),'avail'=>availability::where('instructor_id','like','%'.$Uname.'%')->orderBy('day','asc')->paginate(10)];

        
        $userdata= User::where('id','=',session('LoggedUser'))->first();
        if($userdata->usertype=='instructor')
        {
            return view('dashboardi_avail',$data);
        }
        if($userdata->usertype=='student')
        {
            return redirect('student');
        }
    }
    function myreq()
    {
       
        $data = ['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))->first(),'req'=>conrec::where('student_id','like','%'.session('LoggedUser').'%')->orderBy('status','asc')->paginate(8)];

       

        
        $userdata= User::where('id','=',session('LoggedUser'))->first();
        if($userdata->usertype=='instructor')
        {
            return view('dashboardi_avail');
        }
        if($userdata->usertype=='student')
        {
            return view('myReq',$data);
        }
    }
    function requestform($id){

$data = ['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))->first(),'avail'=> availability::find($id)];


        $userdata= User::where('id','=',session('LoggedUser'))->first();
        if($userdata->usertype=='instructor')
        {
            return view('dashboardi');
        }
        if($userdata->usertype=='student')
        {
            return view('consultreq',$data);
        }
    }
    function home(){
      
        
               
            if(session()->has('LoggedUser'))
            {
                return back();
            }
            else{
                return view('welcome');
            }
            
    }


    function homesweet(){
        return view('welcome');
    }
    function asawhere(Request $request){
         
        $data = ['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))->first(),'avail'=>availability::where('instructor_id','like','%'.$request->insnem.'%')->paginate(5000)];
       
        $userdata= User::where('id','=',session('LoggedUser'))->first();
        if($userdata->usertype=='instructor')
        {
            return redirect('Instructor');
        }
        if($userdata->usertype=='student')
        {
            return view('dashboards',$data);
        }
      
           
    }
    function about(){
        return view('bout');
    }

}
