<?php

namespace App\Http\Controllers\client\cart;

use App\Models\coupon_usage;
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
        $rank = auth()->user()->rank_id;
        $coupon = Coupon::where('name', $couponCode)
            ->where('expiry_date', '>=', now())
            ->where('rank_id', '==', $rank)
            ->first();
            $is_used = false;
            if ($coupon) {
                $is_used = coupon_usage::where('user_id', auth()->user()->id)
                    ->where('coupon_id', $coupon->id)
                    ->first() != null;
            }
            
            if ($is_used) {
                session(['coupon_code' => null]);
                return redirect()->back()->with('error', 'Bạn chỉ có thể dùng phiếu giảm giá này 1 lần.');
            }
    
        if ($coupon) {
            // Lưu thông tin mã giảm giá trong Session
            session(['applied_coupon' => $coupon]);
            session(['coupon_code' => $couponCode]);
            return redirect()->back()->with('success', 'Áp dụng mã giảm giá thành công.');
        } else {
            session(['coupon_code' => null]);
            return redirect()->back()->with('error', 'Mã giảm giá không hợp lệ.');
        }
    }

}
