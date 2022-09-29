<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class RegistrationController extends Controller
{
    public function index(){
        $url = url('/register');
        $title = "Registration Form";
        $data= compact('url','title');
        return view('form')->with($data);
    }

    public function register(Request $request){

        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'message'=>'required',
            ]
        );

    //     echo "<pre>";
    //   print_r($request->all()); 
    //   echo  "</pre>";

    //   Insert Query
      $customer = new Customer;
      $customer->name = $request['name'];
      $customer->email = $request['email'];
      $customer->message= $request['message'];
      $customer->checkbox = $request['checkbox'];
      $customer->save();

      return redirect('/register/view');

    }

    public function view()
    {
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);

    }

    public function delete($id)
    {
        // echo $id;
        // Customer::find($id)->delete();
        // return redirect()->back();
        $customer = Customer::find($id);
        if(!is_null($customer)) {
           $customer->delete();
        }
        return redirect('/register/view');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        if(is_null($customer)){
            return redirect('/register/view');
        }
        else {

            $url = url('/register/update') ."/". $id;
            $title = "Update Registration form";
            $data = compact('customer', 'url','title');
            return view('form')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $customer = Customer::find($id);
        $customer->name = $request['name'];
      $customer->email = $request['email'];
      $customer->message= $request['message'];
      $customer->checkbox = $request['checkbox'];
      $customer->save();

      return redirect('/register/view');
    }
}
