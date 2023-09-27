<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\coupon;
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
        $coupon = coupon::all();
        return view('admin.coupons.index', compact('coupon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     */



     public function store(CouponRequest $request)
     {
         $newRecord = new coupon(); 
         $newRecord->name = $request->input('name');
         $newRecord->type = $request->input('type');
         $newRecord->expiry_date = $request->input('expiry_date');
     
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
        $coupon = Coupon::find($id);
        return view('admin.coupons.edit', compact('coupon'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(CouponRequest $request, $id)
    {
        $coupon = Coupon::find($id);
    
        if (!$coupon) {
            return redirect()->back()->with('error', 'Coupon not found');
        }
    
        $coupon->name = $request->input('name');
        $coupon->type = $request->input('type');
        $coupon->expiry_date = $request->input('expiry_date');
            $coupon->save();
            return redirect()->route('coupon.index')->with('success', 'Coupon updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $coupon = Coupon::find($id);
    
        if (!$coupon) {
            return redirect()->back()->with('error', 'Coupon not found');
        }
            $coupon->delete();
        return redirect()->route('coupon.index')->with('success', 'Coupon deleted successfully');
    }
}
