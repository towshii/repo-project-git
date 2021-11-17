<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\availability;

class availabilityController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $availableData = availability::all();
        // return view('instructor/expe',['avail'=>$availableData]);
    }
    public function store(Request $request)
    {
        $availability = new availability;
        $availability->instructor_id=$request->instructor_id;
        $availability->instructor_name=$request->instructor_name;
        $availability->day=$request->day;
        $availability->part_of_the_day=$request->part_of_the_day;
        $availability->time=$request->time;
        $availability->note=$request->note;
        $availability->available=$request->available;
        $availability->save();
        return redirect('mySchedules');
    }
    public function add()
    {
        // $availableData = availability::all();
        // return view('instructor/expe',['avail'=>$availableData]);
        $data = ['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))->first()];
        
        $userdata= User::where('id','=',session('LoggedUser'))->first();
        if($userdata->usertype=='instructor')
        {
            return view('addavail',$data);
        }
        if($userdata->usertype=='student')
        {
            return view('/student',$data);
        }
        
    }
    public function back()
    {
        // $availableData = availability::all();
        // return view('instructor/expe',['avail'=>$availableData]);
        
        return view('mySchedules');
    }
    function destroy($iD)
    { 
        $availabilityData= availability::where('id','like','%'.($iD).'%','and','instructor_id','like','%'.session('LoggedUser').'%');
        $availabilityData->delete();
        return redirect('mySchedules'); 
    }
    public function edit($id)
    {
        
        $availability = availability::find($id);
        return view('editavail',['availability'=>$availability]);
        
    }
    public function update(Request $request)
    {
        $availability = availability::find($request->id);
        $availability->day=$request->daay;
        $availability->part_of_the_day=$request->paart_of_the_day;
        $availability->time=$request->time;
        $availability->save();
        return redirect('mySchedules');
    } 
}
