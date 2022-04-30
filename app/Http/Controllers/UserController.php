<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Register;

 use Illuminate\Support\Facades\Auth;
 use Illuminate\Support\Facades\Hash;
 use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
     public function index(Request $request)
    {
      $data=new Register;


         $data->firstname=$request->firstname;
          $data->lastname=$request->lastname;

         
          $data->email=$request->email;
         
          $data->password=$request->password;
          $data->date=$request->date;
          $data->gender=$request->gender;
          $data->income=$request->income;
          $data->occupation=$request->occupation;
          $data->family=$request->family;
          $data->manglik=$request->manglik;
          
          $data->save();
          return redirect()->back()->with('message','Registration successfully');
        
        }

        public function Login(){
          return view('auth.login');
        }
      

      public function Admin()
      {
        return view('admin.home');
      }

  public function showdata()
    {  
      $data=register::all();
      return view('admin.showdata',compact('data'));
    }
        // public function index(){
        //   return Register::all();
        // }



    public function search(Request $request)
    {
       $search=$request->search;

      

        $data=register::where('firstname','Like','%'.$search.'%')->orwhere('lastname','Like','%'.$search.'%')->orwhere('income','Like','%'.$search.'%')->orwhere('email','Like','%'.$search.'%')->orwhere('family','Like','%'.$search.'%')->orwhere('gender','Like','%'.$search.'%')->orwhere('manglik','Like','%'.$search.'%')->orwhere('date','Like','%'.$search.'%')->get();
       

       // $data = register::with(["category"])
       //                      ->where('name','like', '%'.$this->search.'%')
       //                      ->orWhereHas('category', function($query){$query->where('name', 'like', '%'.$this->search.'%');})
       //                      ->orderBy($this->orderByData, $this->orderByAsc ? 'asc' : 'desc');
                            



       return view('admin.showdata',compact('data'));
    }



    public function loginsign(Request $adlog){
    $user = new register();
    $email=$adlog->get('email');
    // var_dump($email);
    // die;
    // $password=$adlog->get('password');
    Hash::check(request('password'), $user->password);
    // $res=Registration::where('email',$email)->where('password',$password)->get();
      $res=register::where('email',$email)->get();
    
    if(count($res)>0)
    {
        Session::put('user_id',$res[0]->id); 
        $userdata=register::where('email',$email)->first();
          //  echo "<pre>";
          //   print_r($res[0]->id);
          //   die;
        return view('admin.home');
    }
 else{
      Session::flash( 'errMsg','Login Failed');
      return redirect('/');
 }
   return view('admin.home');

   }

   public function Logout(Request $request)
   {
      Auth::logout();
  return redirect('/login');

   }
}
