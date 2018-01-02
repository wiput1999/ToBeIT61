<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Register;
use App\Models\Config;

class registerController extends Controller
{
    public function getRegister() {

        $round = Config::where('key', 'REGISTER_ROUND')->get()[0]['value'];
        $limit = Config::where('key', 'REGISTER_ROUND_LIMIT')->get()[0]['value'];
        $count = Register::where('round', $round)->count();

        return view('signup', ['limit' => $limit, 'count' => $count]);
    }

    public function doRegister(Request $request) {
        $inputs = $request->all();
        $rules = [
            'prefix'                => 'required|in:นาย,นางสาว,เด็กชาย,เด็กหญิง',
            'firstname'             => 'required',
            'lastname'              => 'required',
            'nickname'              => 'required',
            'religion'              => 'required',
            'degree'                => 'required|in:มัธยมศึกษาปีที่ 4,มัธยมศึกษาปีที่ 5,มัธยมศึกษาปีที่ 6,ปวช.,ปวส.',
            'school'                => 'required',
            'tel'                   => 'required|regex:/^0[0-9]{1,2}[0-9]{7}$/',
            'parent'                => 'required|regex:/^0[0-9]{1,2}[0-9]{7}$/',
            'email'                 => 'required|email',
            'disease'               => 'required',
            'food'                  => 'required',
            'line'                  => 'required',
            'facebook'              => 'required|url',
            'appointment'           => 'required|in:1,2,3,4,5',
            'exam'                  => 'required|in:0,1'
        ];
        $messages = [
            'prefix.required'		=> 'กรุณากรอก คำนำหน้าชื่อ',
            'prefix.in'             => 'คำนำหน้าชื่อต้องเป็น นาย นางสาว เด็กชาย เด็กหญิง เท่านั้น',
            'firstname.required'	=> 'กรุณากรอก ชื่อจริง',
            'lastname.required'	    => 'กรุณากรอก นามสกุล',
            'nickname.required'	    => 'กรุณากรอก ชื่อเล่น',
            'religion.required'	    => 'กรุณากรอก ศาสนา',
            'degree.required'	    => 'กรุณากรอก ระดับชั้น',
            'degree.in'             => 'ระดับชั้นต้องเป็น มัธยมศึกษาปีที่ 6 และ ปวช. ปี3 เท่านั้น',
            'school.required'	    => 'กรุณากรอก โรงเรียน',
            'tel.required'	        => 'กรุณากรอก เบอร์โทรศัพท์',
            'tel.regex'	            => 'กรุณากรอก เบอร์โทรศัพท์ให้ถูกต้อง (0812345678)',
            'parent.required'	    => 'กรุณากรอก เบอร์โทรศัพท์ผู้ปกครอง',
            'parent.regex'	        => 'กรุณากรอก เบอร์โทรศัพท์ผู้ปกครองให้ถูกต้อง (0812345678)',
            'email.required'	    => 'กรุณากรอก อีเมล',
            'email.email'	        => 'กรุณากรอก อีเมลที่ถูกต้อง',
            'disease.required'	    => 'กรุณากรอก โรคประจำตัว หากไม่มีให้ -',
            'food.required'	        => 'กรุณากรอก อาหารที่แพ้ หากไม่มีให้ -',
            'line.required'	        => 'กรุณากรอก Line ID',
            'facebook.required'	    => 'กรุณากรอก Facebook Link',
            'facebook.url'	        => 'กรุณากรอก Facebook ให้ถูกต้อง เช่น https://facebook.com/tobeit',
            'appointment.required'  => 'กรุณากรอก จุดนัดพบ',
            'exam.required'	        => 'กรุณากรอก เข้าร่วม Pre Exam หรือไม่'
        ];
        $validator = Validator::make($inputs, $rules, $messages);
        if($validator->fails()){
            return redirect('/signup')->withInput()->withErrors($validator);
        }

        $duplicate = Register::where([
            ['tel', '=', $inputs['tel']],
            ['email', '=', $inputs['email']]
        ])->count();

        $round = Config::where('key', 'REGISTER_ROUND')->get()[0]['value'];
        $limit = Config::where('key', 'REGISTER_ROUND_LIMIT')->get()[0]['value'];
        $count = Register::where('round', $round)->count();

        if ($duplicate > 0) {
            return view('signup', ['success' => 1, 'limit' => $limit, 'count' => $count]);
        }

        if ($count >= $limit) {
            return redirect('/signup');
        }

        $register = new Register();
        $register->fill($request->all());
        $register->round = $round;
        $register->tel = $inputs['tel'];
        $register->parent = $inputs['parent'];
        $register->save();

        return view('signup', ['success' => 1, 'limit' => $limit, 'count' => $count]);
    }
}
