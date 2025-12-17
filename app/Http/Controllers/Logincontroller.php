<?php

namespace App\Http\Controllers;
use session;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Addpro;

class Logincontroller extends Controller
{
    public function login(Request $request) {

          $user = $request->input('username');
           
          $pass = $request->input('password');  

          $request->session()->put('usernameid', $user);
  
  
  $value = $request->session()->get('usernameid');

  $sel_user = Admin::where('admin.username', '=', $user)
  ->where('admin.password', '=', $pass)
  ->first();
  $count = count((array)$sel_user);

  if ($count > 0) {

  return view('dashboard');
}
else
{
return redirect()->back()->with('error', 'invalid username or password');
}
}


  public function reg(Request $request) {

    $file = $request->file('img');
    
    $data = array(
        'name' => $request->input('name'), 
        'img'=> $file->getClientOriginalName(), 
        'price' => $request->input('price'),
        
    );

    $destinationPath = 'public/assestsadmin/images';
    $file->move($destinationPath,$file->getClientOriginalName());

   $lastInsertedId = Addpro::insertGetId($data); 

return view("addproduct"); 
}  

public function view(Request $request) {
  $data['viewproduct'] = Addpro::select('*')->get(); 
          return view('viewproduct', $data); 
    }
     
  



    public function dashboard(Request $request)
{
    $totalProducts = Addpro::count();

    // Pass to view
    return view('dashboard', compact('totalProducts'));
}

}





    


