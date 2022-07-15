<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function designRequest()
    {
        return view('design_request');
    }
    public function submitRequest(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        try{
            $admin_url=config('app.admin_url');
            if(isset( $admin_url)){
                $details = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'message' =>  $request->message
                ];

                \Mail::to($admin_url)->send(new \App\Mail\ContactMail($details));
            }

            return back()->with('success', 'Thank you for contact us!');
        }catch (\Exception $e) {
            return back()->with('failed', 'Something wrong!!!');
        }
    }
}
