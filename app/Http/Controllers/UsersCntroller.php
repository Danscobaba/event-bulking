<?php

namespace App\Http\Controllers;

use App\Mail\SuccessEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UsersCntroller extends Controller
{

    public function index()
    {
        // if (session()->has('user_id')) {
        return view('dashboard');
        // } else {
        //     session()->flush();
        //     return redirect('/');
        // }
    }
    public function saveMember(Request $request)
    {
        // $validator = new Validator::make($request->all(),[
        //     'fullname' => 'required',
        //     'email' => 'required',

        // ]);
        $data = DB::table('member')->insert([
            'full_name' => $request->fullname,
            'email' => $request->email,
            'gender' => $request->gender,
            'phone_no' => $request->phone_no,
            'status' => $request->status,
            'amount' => $request->amount,
            'reference_id' => $request->reference_id,
            'transaction_id' => $request->transaction_id,
            'created_at' => now(1)
        ]);
        if ($data) {
            $mailData = [
                'fullname' => $request->fullname,
                'amount' => $request->amount,
                'transaction_id' => $request->transaction_id

            ];
            $data = [
                'fullname' => $request->fullname,
                'amount' => $request->amount,
                'transaction_id' => $request->transaction_id

            ];

            Mail::to($request->email)->send(new SuccessEmail($mailData));
            return response()->json([
                'code' => 201,
                'message' => 'Success',
                'data' => $data
            ]);
        }
    }

    public function gotoSuccess($txn)
    {
        $data = DB::table('member')->where('reference_id', $txn)->first();
        return view('/success', get_defined_vars());
    }

    public function gotoPayment()
    {
        return view('payment-setting');
    }

    public function updatePayment(Request $request)
    {
        $data = DB::table('payment_settings')->where('id', 1)->update(
            [
                'secret_key' => $request->secret_key,
                'public_key' => $request->public_key
            ]
        );
        if ($data) {
            return redirect()->back()->with('success', 'Updated successfully');
        } else {
            return redirect()->back()->with('error', 'Unable to update');
        }
    }

    public function login(Request $request)
    {
        $data = DB::table('users')->where('email', $request->email)->first();
        if ($data) {
            $check = Hash::check($request->password, $data->password);
            if ($check) {
                $request->session()->put('user_id', $data->id);
                return redirect('admin/dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid Email or Password');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid Email or Password');
        }
    }

    public function logout()
    {
        if (session()->has('user_id')) {
            session()->flush();
            return redirect('/admin-login');
        }
        return redirect('/admin-login');
    }
}