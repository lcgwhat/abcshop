<?php

namespace App\Http\Controllers;

use App\Exceptions\CouponCodeUnavailableException;
use App\Models\CouponCode;
use Illuminate\Http\Request;

class CouponCodesController extends Controller
{
    /**
     * 显示优惠码
     * @param $code
     * @param Request $request
     * @return mixed
     * @throws CouponCodeUnavailableException
     */
    public function show($code, Request $request)
    {
        if (!$record = CouponCode::where('code', $code)->first()) {
            throw new CouponCodeUnavailableException('优惠券不存在');
        }

        $record->checkAvailable($request->user());


        return $record;
    }
}
