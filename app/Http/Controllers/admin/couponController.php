<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\coupon;
use App\Models\rank;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\Admin\CouponRequest;

class couponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupon = coupon::orderBy('created_at','desc')->get();
        return view('admin.coupons.index', compact('coupon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ranks = rank::get();
        return view('admin.coupons.create',compact('ranks'));
    }

    /**
     * Store a newly created resource in storage.
     */



     public function store(CouponRequest $request)
     {
         $newRecord = new coupon(); 
         $newRecord->name = $request->input('name');
         $newRecord->type = $request->input('type');
         $newRecord->value = $request->input('value');
         $newRecord->expiry_date = $request->input('expiry_date');
         $newRecord->rank_id = $request->input('rank_id');
     
         $newRecord->save();
     
         return redirect()->route('coupon.index')->with('success', 'Coupon created successfully');
     }
     
    
    
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $coupon = coupon::find($id);
        $ranks = rank::get();
        return view('admin.coupons.edit', compact('coupon','ranks'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $coupon = coupon::find($id);
    
        if (!$coupon) {
            return redirect()->back()->with('error', 'Coupon not found');
        }
    
        $coupon->name = $request->input('name');
        $coupon->type = $request->input('type');
        $coupon->value = $request->input('value');
        $coupon->expiry_date = $request->input('expiry_date');
        $coupon->rank_id = $request->input('rank_id');
            $coupon->save();
            return redirect()->route('coupon.index')->with('success', 'Coupon updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $coupon = coupon::find($id);
    
        if (!$coupon) {
            return redirect()->back()->with('error', 'Coupon not found');
        }
            $coupon->delete();
        return redirect()->route('coupon.index')->with('success', 'Coupon deleted successfully');
    }
}
