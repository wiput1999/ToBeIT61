{{--
 ad88888ba   88
d8"     "8b  ""
Y8,
`Y8aaaaa,    88   ,adPPYb,d8  8b,dPPYba,   88       88  8b,dPPYba,
  `"""""8b,  88  a8"    `Y88  88P'   `"8a  88       88  88P'    "8a
        `8b  88  8b       88  88       88  88       88  88       d8
Y8a     a8P  88  "8a,   ,d88  88       88  "8a,   ,a88  88b,   ,a8"
 "Y88888P"   88   `"YbbdP"Y8  88       88   `"YbbdP'Y8  88`YbbdP"'
                  aa,    ,88                            88
                   "Y8bbdP"                             88--}}

@extends('layouts.layout')
@section('content')
    <div class="signup section">
        <div class="layout-box" style="padding-top: 2%;">
            <div class="layout-title">
                ลงทะเบียน
            </div>
            <hr />
            @if (isset($success))
                <div class="form-success">
                    สมัครเสร็จสิ้น!
                </div>

                <a href="{{ URL('/') }}" class="download" style="border-radius: 5px; text-align: center;">
                    ย้อนกลับ
                </a>
            @endif
            @if (!isset($success) and ($count >= $limit))
                <div class="form-close">
                    ปิดรับสมัครแล้ว
                </div>

                <a href="{{ URL('/') }}" class="download" style="border-radius: 5px; text-align: center;">
                    ย้อนกลับ
                </a>
            @endif
            @if (!isset($success) and ($count < $limit))
                <form method="post" action="{{ url('/signup') }}" class="form">
                    {{--If validator error--}}
                    @if (count($errors) > 0)
                        <div class="form-alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{ csrf_field() }}
                    <div class="row gutters">
                        <div class="col col-2">
                            <div class="form-item">
                                <label>คำนำหน้าชื่อ: </label>
                                <select name="prefix" required>
                                    <option value="นาย">นาย</option>
                                    <option value="นางสาว">นางสาว</option>
                                    <option value="เด็กชาย">เด็กชาย</option>
                                    <option value="เด็กหญิง">เด็กหญิง</option>
                                </select>
                            </div>
                        </div>
                        <div class="col col-4">
                            <div class="form-item">
                                <label>ชื่อ: </label>
                                <input type="text" name="firstname" placeholder="ชื่อ" required>
                            </div>
                        </div>
                        <div class="col col-4">
                            <div class="form-item">
                                <label>นามสกุล: </label>
                                <input type="text" name="lastname" placeholder="นามสกุล" required>
                            </div>
                        </div>
                        <div class="col col-2">
                            <label>ชื่อเล่น: </label>
                            <div class="form-item">
                                <input type="text" name="nickname" placeholder="ชื่อเล่น" required>
                            </div>
                        </div>
                    </div>


                    <hr class="hr2 radius"/>


                    <div class="row gutters">
                        <div class="col col-4">
                            <div class="form-item">
                                <label>ศาสนา: </label>
                                <input type="text" name="religion" placeholder="ศาสนา" required>
                            </div>
                        </div>
                        <div class="col col-4">
                            <div class="form-item">
                                <label>โรงเรียน: </label>
                                <input type="text" name="school" placeholder="เช่น เตรียมอุดมศึกษา" required>
                            </div>
                        </div>
                        <div class="col col-4">
                            <div class="form-item">
                                <label>ระดับชั้น: </label>
                                <select name="degree" required>
                                    <option value="มัธยมศึกษาปีที่ 6">มัธยมศึกษาปีที่ 6</option>
                                    <option value="ปวช. ปี3">ปวช. ปี3</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr class="hr2 radius"/>

                    <div class="row gutters">
                        <div class="col col-4">
                            <div class="form-item">
                                <label>อีเมล: </label>
                                <input type="email" name="email" placeholder="*tobe@it.kmitl.ac.th" required>
                            </div>
                        </div>
                        <div class="col col-4">
                            <div class="form-item">
                                <label>เบอร์โทรศัพท์: </label>
                                <input type="text" name="tel" placeholder="เช่น 0818888888 ไม่ต่องมี -" required>
                            </div>
                        </div>
                        <div class="col col-4">
                            <div class="form-item">
                                <label>เบอร์โทรศัพท์ผู้ปกครอง: </label>
                                <input type="text" name="parent" placeholder="เช่น 0818888888 ไม่ต่องมี -" required>
                                <div class="desc">สำหรับติดต่อผู้ปกครอง กรณีเกิดเหตุฉุกเฉิน</div>
                            </div>
                        </div>
                    </div>

                    <hr class="hr2 radius"/>

                    <div class="row gutters">
                        <div class="col col-4">
                            <div class="form-item">
                                <label>โรคประจำตัว: </label>
                                <input type="text" name="disease" placeholder="เช่น หอบ ภูมิแพ้ หากไม่มัให้กรอก -" required>
                            </div>
                        </div>
                        <div class="col col-4">
                            <div class="form-item">
                                <label>อาหารที่แพ้: </label>
                                <input type="text" name="food" placeholder="เช่น อาหารทะเล หากไม่มัให้กรอก -" required>
                            </div>
                        </div>
                        <div class="col col-4">
                            <div class="form-item">
                                <label>Line ID: </label>
                                <input type="text" name="line" placeholder="Line ID" required>
                            </div>
                        </div>
                    </div>

                    <hr class="hr2 radius"/>

                    <div class="row gutters">
                        <div class="col col-4">
                            <div class="form-item">
                                <label>Facebook: </label>
                                <input type="text" name="facebook" placeholder="เช่น https://facebook.com/tobeit" required>
                            </div>
                        </div>
                        <div class="col col-4">
                            <div class="form-item">
                                <label>จุดนัดพบ: </label>
                                <select name="appointment" required>
                                    <option value="1">Airport Rail Link ลาดกระบัง</option>
                                    <option value="2">สนามบินสุวรรณภูมิ</option>
                                    <option value="3">สถานีรถไฟหัวตะเข้</option>
                                    <option value="4">หน้าคณะ IT</option>
                                    <option value="5">วินรถตู้</option>
                                </select>
                                <div class="desc">พี่ๆจะรอรับน้องที่จุดนัดพบต่างๆ</div>
                            </div>
                        </div>
                        <div class="col col-4">
                            <label>เข้าร่วม Pre-Exam: </label>
                            <div class="form-item">
                                <select name="exam" required>
                                    <option value="1">เข้าร่วม</option>
                                    <option value="0">ไม่เข้าร่วม</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr class="radius"/>

                    <center>
                        <button class="signup-button button large w50 secondary" style="">ลงทะเบียน</button>
                    </center>
                </form>
            @endif
        </div>
    </div>
@endsection
