<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\conrec;
use App\Models\User;
use App\Models\availability;
class conrecController extends Controller
{
    function store(Request $request)
    {
       
    
            
           
            $ava= availability::where('id','=',$request->avai)->first();
           
             
                    $conrec = new conrec;
          
                   
                     
                    $conrec->status=$request->status;
                    $conrec->avail_id=$request->avai;
                    $conrec->student_name=$request->student_name;
                    $conrec->student_id=$request->student_id;
                    $conrec->instructor_name=$request->instructor_name;
                    $conrec->instructor_id=$request->instructor_id;
                    $conrec->other_students=$request->other_students;
                    $conrec->subject=$request->subject;
                    $conrec->meeting_place=$request->meeting_place;
                    $conrec->message=$request->message;
                    $conrec->day=$request->day;
                    $conrec->part_of_the_day=$request->part_of_the_day;
                    $conrec->time=$request->time;
                   
                    $conrec->save();
                    return redirect('student');
                
               
                
            
                
                
            
                  
    }
    function destroy($id,$avail_id)
    {
        $cancel=conrec::where('id','like','%'.($id).'%','and','student_id','like','%'.session('LoggedUser').'%');
        $availl=availability::where('id','=',$avail_id)->update(['available'=>'yes']);
            if($availl)
            {
                $cancel->delete();
                return redirect('/myRequests');
            }
       
        
    }
    function updatereq($id,$avail_id)
    {
      

        $availl=availability::where('id','=',$avail_id)->update(['available'=>'no']);
        $update=conrec::where('id','=',$id)->update(['status'=>'accepted']);
      
        if($update&&$availl)
        {
           
            return redirect('/Instructor');
        }
    }
    function cancelreq($id,$avail_id)
    {
        $availl=availability::where('id','=',$avail_id)->update(['available'=>'yes']);
        $update=conrec::where('id','=',$id)->update(['status'=>'pending request']);
        if($update&&$availl)
        {
           
            return redirect('/Instructor');
        }
    }
    function cancelrej($id)
    {
        $update=conrec::where('id','=',$id)->update(['status'=>'pending request']);
        if($update)
        {
           
            return redirect('/Instructor');
        }
    }
    function rejectreq($id)
    {
        $update=conrec::where('id','=',$id)->update(['status'=>'rejected']);
        if($update)
        {
           
            return redirect('/Instructor');
        }
    }
    function deletereq($id)
    {
        $delete=conrec::where('id','like','%'.($id).'%','and','instructor_id','like','%'.session('LoggedUser').'%');
        $delete->delete();
        return redirect('/Instructor');
    }
    function trandone($id,$avail_id)
    {
        $availl=availability::where('id','=',$avail_id)->update(['available'=>'yes']);
        $update=conrec::where('id','=',$id)->update(['status'=>'consultation done']);
        if($update&&$availl)
        {
           
            return redirect('/Instructor');
        }
    }
   
}
