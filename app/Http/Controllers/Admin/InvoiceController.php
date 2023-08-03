<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Enrollment;
use App\Models\User;
use App\Models\Balance;

class InvoiceController extends Controller
{
    function index()  {
        $collection = Enrollment::whereFeePaid(false)->paginate();
        return view('admin.invoices.index', compact('collection'));
    }

    public function show(string $id)
    {
        //
        $model = Enrollment::find($id);
        return view('admin.invoices.show', compact('model'));
    }
    

    public function update(Request $request, string $id)
    {
        try {
            if($request->status == 'rejected'){
                // remove proof image and update user about rejected
                return redirect()->back()->withErrors(['error' => 'somthing went wron'])->withInput();
            }

            $invoice = Enrollment::find($id);
            $invoice->update(['fee_paid' => true, 'cashier_id' => auth()->id()]);
            $course =  $invoice->course;
            if($course->active && $course->referral_reward > 0){
                $user = $invoice->user;
                if($user && $user->referral_id){
                    $referral = User::find($user->referral_id);
                    Balance::updateOrCreate(
                        ['user_id'=> $referral->id],
                        ['amount' => DB::raw("amount + $course->referral_reward")]
                    );
                }
            }
            if($course->active && $course->teamleader_reward > 0){
                $user = $invoice->user;
                // check user exits and referred from any one
                if($user && $user->referral_id){
                    $referral = User::find($user->referral_id);
                    // check the referral have the teamleader 
                    if($referral->referral_id){
                        $teamLeader = User::find($referral->referral_id);
                        Balance::updateOrCreate(
                            ['user_id'=> $teamLeader->id],
                            ['amount' => DB::raw("amount + $course->teamleader_reward")]
                        );
                    }
                }
            }
            // update balance of the admin to received amount
            Balance::updateOrCreate(
                ['user_id'=> 1],
                ['amount' => DB::raw("amount + $course->fee")]
            );
            return redirect('admin/invoices')->with(['success' => 'Payment done successfuly']);
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
            // something went wrong
        }
    }
}
