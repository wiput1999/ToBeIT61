<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Register;
use Carbon;

class dashboardController extends Controller
{
    public function getDashboard() {
        return view('backend.dashboard');
    }

    public function getList($id) {
        $registers = Register::where('round', $id)->get();
        return view('backend.list', [
            'id' => $id,
            'registers' => $registers
        ]);
    }

    public function doCheckSaturday($id) {
        $data = Register::find($id);

        if ($data->saturday == null) {
            $data->saturday = Carbon\Carbon::now();
            $data->save();
            return redirect('/backend/list/'. $data['round']);
        }
        $data->saturday = null;
        $data->save();
        return redirect('/backend/list/'. $data['round']);
    }

    public function doCheckSunday($id) {
        $data = Register::find($id);

        if ($data->sunday == null) {
            $data->sunday = Carbon\Carbon::now();
            $data->save();
            return redirect('/backend/list/'. $data['round']);
        }
        $data->sunday = null;
        $data->save();
        return redirect('/backend/list/'. $data['round']);
    }

    public function getProfile($id) {
        $data = Register::find($id);

        return view('backend.profile', ['data' => $data]);
    }

    public function getEdit($id) {
        $data = Register::find($id);

        return view('backend.edit', ['data' => $data]);
    }

    public function doEdit(Request $request, $id) {
        $inputs = $request->all();
        $rules = [
            'prefix'                => 'required|in:นาย,นางสาว,เด็กชาย,เด็กหญิง',
            'firstname'             => 'required',
            'lastname'              => 'required',
            'nickname'              => 'required',
            'religion'              => 'required',
            'degree'                => 'required',
            'school'                => 'required',
            'tel'                   => 'required|regex:/^0[0-9]{1,2}[0-9]{7}$/',
            'parent'                => 'required|regex:/^0[0-9]{1,2}[0-9]{7}$/',
            'email'                 => 'required|email',
            'disease'               => 'required',
            'food'                  => 'required',
            'line'                  => 'required',
            'facebook'              => 'required|url',
            'appointment'           => 'required|in:1,2,3,4',
            'exam'                  => 'required|in:0,1',
            'round'                 => 'required|in:1,2,3',
        ];
        $messages = [
            'prefix.required'		=> 'กรุณากรอก คำนำหน้าชื่อ',
            'prefix.in'             => 'คำนำหน้าชื่อต้องเป็น นาย นางสาว เด็กชาย เด็กหญิง เท่านั้น',
            'firstname.required'	=> 'กรุณากรอก ชื่อจริง',
            'lastname.required'	    => 'กรุณากรอก นามสกุล',
            'nickname.required'	    => 'กรุณากรอก ชื่อเล่น',
            'religion.required'	    => 'กรุณากรอก ศาสนา',
            'degree.required'	    => 'กรุณากรอก ระดับชั้น',
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
            'exam.required'	        => 'กรุณากรอก เข้าร่วม Pre Exam หรือไม่',
            'round.required'	    => 'กรุณากรอก รอบ',
        ];
        $validator = Validator::make($inputs, $rules, $messages);
        if($validator->fails()){
            return redirect('/backend/edit/'. $id)->withInput()->withErrors($validator);
        }

        $data = Register::find($id);

        $data['prefix'] = $inputs['prefix'];
        $data['firstname'] = $inputs['firstname'];
        $data['lastname'] = $inputs['lastname'];
        $data['nickname'] = $inputs['nickname'];
        $data['religion'] = $inputs['religion'];
        $data['degree'] = $inputs['degree'];
        $data['school'] = $inputs['school'];
        $data['tel'] = $inputs['tel'];
        $data['email'] = $inputs['email'];
        $data['disease'] = $inputs['disease'];
        $data['food'] = $inputs['food'];
        $data['line'] = $inputs['line'];
        $data['facebook'] = $inputs['facebook'];
        $data['appointment'] = $inputs['appointment'];
        $data['parent'] = $inputs['parent'];
        $data['exam'] = $inputs['exam'];
        $data['round'] = $inputs['round'];

        $data->save();

        return redirect('/backend/profile/'. $id);
    }

    public function doDelete($id) {
        $round = Register::find($id)['round'];

        Register::find($id)->delete();

        return redirect('/backend/list/'. $round);
    }
}
