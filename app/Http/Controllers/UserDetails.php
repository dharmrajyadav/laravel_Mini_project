<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userdata;


class UserDetails extends Controller
{

            public function index()
            {
                    $userdetails = userdata::all();
           //         $fetchdata=$userdetails->toarray();
         //           return  json_encode($fetchdata);
                
                
              return view('userlist.userlist',['userdetails'=>$userdetails]);
            }

            public function store(Request $request)
            {
                
            //$data=$request->all();  //to check all the datas dumped from the form
              //  var_dump($data);
                //die();
              

               $userdata = new userdata();
                
                $userdata->firstname = $request->input('firstname');
                $userdata->lastname = $request->input('lastname');
             $userdata->department = $request->input('department');
               $userdata->phone = $request->input('phone');
                        //dump($userdata);
                $userdata->save();
               // return redirect()->view('userlist.userlist');
                

            }

            public function create()
            {
                return view('userlist.create');
            }


            public function delete($id)
            {

                       //Retrieve the employee
                            $userdata = userdata::find($id);
                                 //delete
                             $userdata->delete();
                            //return redirect()->route('userlist.userlist');

            }



}
