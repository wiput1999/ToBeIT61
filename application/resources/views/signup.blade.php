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
                Sign Up
            </div>
            <hr />
            <form method="post" action="" class="form">
                <div class="row gutters">
                    <div class="col col-2">
                        <div class="form-item">
                            <label>เพศ: </label>
                            <select name="sex" required>
                                <option value="male">ชาย</option>
                                <option value="girl">หญิง</option>
                                <option value="other">อื่นๆ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col col-4">
                        <div class="form-item">
                            <label>ชื่อ: </label>
                            <input type="text" name="name" placeholder="ชื่อ" required>
                        </div>
                    </div>
                    <div class="col col-4">
                        <div class="form-item">
                            <label>นามสกุล: </label>
                            <input type="text" name="surname" placeholder="นามสกุล" required>
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
                            <input type="text" name="school" placeholder="*พุทธ" required>
                        </div>
                    </div>
                    <div class="col col-4">
                        <div class="form-item">
                            <label>โรงเรียน: </label>
                            <input type="text" name="school" placeholder="*โรงเรียนบ้านน้ำ" required>
                        </div>
                    </div>
                    <div class="col col-4">
                        <div class="form-item">
                            <label>ระดับชั้น: </label>
                            <input type="text" name="education" placeholder="*มัธยมศึกษาปีที 6" required>
                        </div>
                    </div>
                </div>

                <hr class="hr2 radius"/>

                <div class="row gutters">
                    <div class="col col-4">
                        <div class="form-item">
                            <label>อีเมล: </label>
                            <input type="email" name="email" placeholder="*email@email.com" required>
                        </div>
                    </div>
                    <div class="col col-4">
                        <div class="form-item">
                            <label>เบอร์โทรศัพ: </label>
                            <input type="text" name="tel1" placeholder="*023-456-7891" required>
                        </div>
                    </div>
                    <div class="col col-4">
                        <div class="form-item">
                            <label>เบอร์โทรผู้ปกครอง: </label>
                            <input type="text" name="tel2" placeholder="*023-456-7891" required>
                            <div class="desc">สำหรับติดต่อผู้ปกครอง กรณีเกิดเหตุฉุกเฉิน</div>
                        </div>
                    </div>
                </div>

                <hr class="hr2 radius"/>

                <div class="row gutters">
                    <div class="col col-4">
                        <div class="form-item">
                            <label>โรคประจำตัว: </label>
                            <input type="text" name="disease" placeholder="*หอบ ภูมิแพ้ etc." required>
                        </div>
                    </div>
                    <div class="col col-4">
                        <div class="form-item">
                            <label>อาหารที่แพ้: </label>
                            <input type="text" name="allergy" placeholder="*แพ้อาหารทะเล" required>
                        </div>
                    </div>
                    <div class="col col-4">
                        <div class="form-item">
                            <label>Line: </label>
                            <input type="text" name="line" placeholder="*lineID Tel" required>
                        </div>
                    </div>
                </div>

                <hr class="hr2 radius"/>

                <div class="row gutters">
                    <div class="col col-4">
                        <div class="form-item">
                            <label>Facebook: </label>
                            <input type="text" name="facebook" placeholder="*fb.com/kuma" required>
                        </div>
                    </div>
                    <div class="col col-4">
                        <div class="form-item">
                            <label>จุดนัดพบ: </label>
                            <select name="metting" required>
                                <option value="male">Airport Rail1</option>
                                <option value="girl">Airport Rail2</option>
                                <option value="other">Airport Rail3</option>
                            </select>
                            <div class="desc">พี่ๆจะรอรับน้องที่จุดนัดพบต่างๆ</div>
                        </div>
                    </div>
                    <div class="col col-4">
                        <label>เข้าร่วม Pre-Exam: </label>
                        <div class="form-item">
                            <select name="metting" required>
                                <option value="male">เช้า</option>
                                <option value="girl">เที่ยง</option>
                            </select>
                        </div>
                    </div>
                </div>

                <hr class="radius"/>

                <center>
                    <button class="signup-button button large w50 secondary" style="">ลงทะเบียน</button>
                </center>
            </form>
        </div>
    </div>
@endsection
