<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Employee;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Employee::where('id','!=',Auth::user()->id)->get();
        return view('employees.index',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('employees.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $this->validate($request,[
              'name'=>'required|string',
              'email'=> 'required|email|unique:employees',
              'password'=>'required|min:5|confirmed',
              'address'=>'required|max:300',
              'salary'=>'required|max:22|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
              'mobile_no'=> 'required|digits:10',
        ]);
        $data['mobile_no'] = $request->mobile_no;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['salary'] = $request->salary;
        if($request->has('is_admin')){
            $data['is_admin'] = $request->name;
        }
        
        $data['password'] = Hash::make($request->password);
        
        $record = Employee::create($data);

        return redirect('/employees')->with('message','Employee has been Addded');
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
        $record = Employee::find($id);
        if(!$record)
            return redirect('/employees')->with('message','Employee Not Found');
        return view('employees.form',compact('record'));
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
        
        $this->validate($request,[
            'name'=>'required|string',
            'email'=> 'required|email|unique:employees,email,'.$id,
            'address'=>'required|max:300',
            'salary'=>'regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'mobile_no'=> 'required|digits:10', 
      ]);

      $record = Employee::find($id);
      $record->name = $request->name;
      $record->email = $request->email;
      $record->address = $request->address;
      $record->salary = $request->salary;
      $record->mobile_no = $request->mobile_no;
      $record->save();
      

      return redirect('/employees')->with('message','Employee has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
            
        $record = Employee::destroy([$request->id]);

        return redirect('/employees')->with('message','Employee has been Removed');
    }
}
