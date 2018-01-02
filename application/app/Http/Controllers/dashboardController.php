<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\Config;
use App\Models\Visitor;
use App\User;
use Carbon;
use DB;
use Maatwebsite\Excel\Facades\Excel;

class dashboardController extends Controller
{
    public function getDashboard() {
        $round = Config::where('key', 'REGISTER_ROUND')->get()[0]['value'];
        $register = Register::where([
            ['round', '=', $round],
            ['walkin', '=', 0]
        ])->count();

        $walkin = Register::where([
            ['round', '=', $round],
            ['walkin', '=', 1]
        ])->count();

        $checkin_saturday = Register::where([
            ['round', '=', $round],
            ['saturday', '<>', null]
        ])->count();

        $checkin_sunday = Register::where([
            ['round', '=', $round],
            ['sunday', '<>', null]
        ])->count();

        $checkin_both = Register::where([
            ['round', '=', $round],
            ['saturday', '<>', null],
            ['sunday', '<>', null]
        ])->count();

        return view('backend.dashboard', [
            'register' => $register,
            'walkin' => $walkin,
            'checkin_both' => $checkin_both,
            'checkin_sunday' => $checkin_sunday,
            'checkin_saturday' => $checkin_saturday
        ]);
    }

    public function getList($id) {
        $registers = Register::where([
            ['round', '=', $id],
            ['walkin', '=', 0]
        ])->get();
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

            if ($data['walkin'] == 0) {
                return redirect('/backend/list/'. $data['round']);
            }
            return redirect('/backend/walkin/'. $data['round']);
        }
        $data->saturday = null;
        $data->save();

        if ($data['walkin'] == 0) {
            return redirect('/backend/list/'. $data['round']);
        }
        return redirect('/backend/walkin/'. $data['round']);
    }

    public function doCheckSunday($id) {
        $data = Register::find($id);

        if ($data->sunday == null) {
            $data->sunday = Carbon\Carbon::now();
            $data->save();

            if ($data['walkin'] == 0) {
                return redirect('/backend/list/'. $data['round']);
            }
            return redirect('/backend/walkin/'. $data['round']);
        }
        $data->sunday = null;
        $data->save();

        if ($data['walkin'] == 0) {
            return redirect('/backend/list/'. $data['round']);
        }
        return redirect('/backend/walkin/'. $data['round']);
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
            'appointment'           => 'required|in:1,2,3,4,5',
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
        $walkin = Register::find($id)['walkin'];

        Register::find($id)->delete();

        if ($walkin == 0) {
            return redirect('/backend/list/'. $round);
        }
        return redirect('/backend/walkin/'. $round);
    }

    public function getChangePassword() {
        return view('backend.changepassword');
    }

    public function doChangePassword(Request $request) {
        $inputs = $request->all();
        $rules = [
            'oldpassword'           => 'required',
            'newpassword'           => 'required|min:8|regex:/^(?=\S*[a-z])(?=\S*[!@#$&*])(?=\S*[A-Z])(?=\S*[\d])\S*$/'
        ];
        $messages = [
        ];
        $validator = Validator::make($inputs, $rules, $messages);
        if($validator->fails()){
            return redirect('/backend/changepassword/')->withErrors($validator);
        }

        $current_password = \Auth::User()->password;
        if(\Hash::check($inputs['oldpassword'], $current_password)) {
            $user_id = \Auth::User()->id;
            $obj_user = User::find($user_id);
            $obj_user->password = \Hash::make($inputs['newpassword']);;
            $obj_user->save();
            return redirect('/backend/dashboard/');
        }
    }

    public function getConfig() {
        $configs = Config::all();
        return view('backend.config', ['configs' => $configs]);
    }

    public function doConfig(Request $request) {
        $inputs = $request->except('_token');

        foreach ($inputs as $key => $value) {
            DB::table('config')->where('key', $key)->update(['value' => $value]);
        }

        return redirect('/backend/config');
    }

    public function getExcel() {
        return Excel::create('registers_all_export_' . time(), function($excel)
        {
            $excel->sheet('Sheet', function($sheet)
            {
                $datas = Register::all();
                $sheet->loadView('backend.excel', ['datas' => $datas]);
            });
        })->download('xls');
    }

    public function getExcelRegister() {
        return Excel::create('registers_register_export_' . time(), function($excel)
        {
            $excel->sheet('Sheet', function($sheet)
            {
                $datas = Register::where('walkin', 0)->get();
                $sheet->loadView('backend.excel', ['datas' => $datas]);
            });
        })->download('xls');
    }

    public function getExcelWalkin() {
        return Excel::create('registers_walkin_export_' . time(), function($excel)
        {
            $excel->sheet('Sheet', function($sheet)
            {
                $datas = Register::where('walkin', 1)->get();
                $sheet->loadView('backend.excel', ['datas' => $datas]);
            });
        })->download('xls');
    }

    public function getExcelSaturday() {
        return Excel::create('registers_saturday_export_' . time(), function($excel)
        {
            $excel->sheet('Sheet', function($sheet)
            {
                $datas = Register::where('saturday', '<>', null)->get();
                $sheet->loadView('backend.excel', ['datas' => $datas]);
            });
        })->download('xls');
    }

    public function getExcelSunday() {
        return Excel::create('registers_sunday_export_' . time(), function($excel)
        {
            $excel->sheet('Sheet', function($sheet)
            {
                $datas = Register::where('sunday', '<>', null)->get();
                $sheet->loadView('backend.excel', ['datas' => $datas]);
            });
        })->download('xls');
    }

    public function getWalkin($id) {
        $registers = Register::where([
            ['round', '=', $id],
            ['walkin', '=', 1]
        ])->get();
        return view('backend.walkin_list', [
            'id' => $id,
            'registers' => $registers
        ]);
    }

    public function getWalkinForm() {
        $round = Config::where('key', 'REGISTER_ROUND')->get()[0]['value'];
        return view('backend.walkin_add', ['round' => $round]);
    }

    public function doSaveWalkin(Request $request) {
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
            'appointment'           => 'required|in:0',
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
            return redirect('/backend/walkin/new')->withInput()->withErrors($validator);
        }
        $round = Config::where('key', 'REGISTER_ROUND')->get()[0]['value'];

        $register = new Register();
        $register->fill($request->all());
        $register->round = $round;
        $register->tel = $inputs['tel'];
        $register->parent = $inputs['parent'];
        $register->walkin = 1;
        $register->save();

        return view('backend.walkin_add', ['success' => 1, 'round' => $round]);
    }

    public function getVisitor() {
        $visitors = Visitor::all();

        return view('backend.visitor_list', ['registers' => $visitors]);
    }

    public function getVisitorForm() {
        return view('backend.visitor_add');
    }

    public function doSaveVisitor(Request $request) {
        $inputs = $request->all();
        $rules = [
            'prefix'                => 'required|in:นาย,นางสาว,เด็กชาย,เด็กหญิง',
            'firstname'             => 'required',
            'lastname'              => 'required',
            'tel'                   => 'required|regex:/^0[0-9]{1,2}[0-9]{7}$/',
        ];
        $messages = [
            'prefix.required'		=> 'กรุณากรอก คำนำหน้าชื่อ',
            'prefix.in'             => 'คำนำหน้าชื่อต้องเป็น นาย นางสาว เด็กชาย เด็กหญิง เท่านั้น',
            'firstname.required'	=> 'กรุณากรอก ชื่อจริง',
            'lastname.required'	    => 'กรุณากรอก นามสกุล',
            'tel.required'	        => 'กรุณากรอก เบอร์โทรศัพท์',
            'tel.regex'	            => 'กรุณากรอก เบอร์โทรศัพท์ให้ถูกต้อง (0812345678)',
        ];
        $validator = Validator::make($inputs, $rules, $messages);
        if($validator->fails()){
            return redirect('/backend/visitor/new')->withInput()->withErrors($validator);
        }

        $visitor = new Visitor();
        $visitor->fill($request->all());
        $visitor->tel = $inputs['tel'];
        $visitor->save();

        return view('backend.visitor_add', ['success' => 1]);
    }

    public function doDeleteVisitor($id) {
        Visitor::find($id)->delete();

        return redirect('/backend/visitor');
    }

    public function getCheckoutList($id) {
        $registers = Register::where('round', $id)
            ->where(function($q) {
                $q->where('saturday', '<>', null)
                    ->orWhere('sunday', '<>', null);
            })
            ->get();
        return view('backend.checkout_list', [
            'id' => $id,
            'registers' => $registers
        ]);
    }

    public function doCheckoutSaturday($id) {
        $data = Register::find($id);

        if ($data->saturday_checkout == null) {
            $data->saturday_checkout = Carbon\Carbon::now();
            $data->save();

            return redirect('/backend/checkout/'. $data['round']);
        }
        $data->saturday_checkout = null;
        $data->save();

        return redirect('/backend/checkout/'. $data['round']);
    }

    public function doCheckoutSunday($id) {
        $data = Register::find($id);

        if ($data->sunday_checkout == null) {
            $data->sunday_checkout = Carbon\Carbon::now();
            $data->save();

            return redirect('/backend/checkout/'. $data['round']);
        }
        $data->sunday_checkout = null;
        $data->save();

        return redirect('/backend/checkout/'. $data['round']);
    }
}
