<?php

namespace App\Http\Controllers\client\cart;

use Carbon\Carbon;
use App\Models\coupon;
use App\Models\ShowTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CouponController extends Controller
{
    public function applyCoupon(Request $request)
    {
        $couponCode = $request->input('coupon_code');
        session(['coupon_code' => $couponCode]);
        $coupon = Coupon::where('name', $couponCode)
            ->where('expiry_date', '>=', now()) // Kiểm tra hạn sử dụng
            ->first();
    
        if ($coupon) {
            // Lưu thông tin mã giảm giá trong Session
            session(['applied_coupon' => $coupon]);
            return redirect()->back()->with('success', 'Áp dụng mã giảm giá thành công.');
        } else {
            return redirect()->back()->with('error', 'Mã giảm giá không hợp lệ.');
        }
    }
    
}
