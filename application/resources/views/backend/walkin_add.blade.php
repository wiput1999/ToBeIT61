@extends('backend.partials')
@section('content')
    <div class="row">
        <h1>Add Walkin</h1>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger col-lg-12" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (isset($success))
        <div class="alert alert-success col-lg-12" role="alert">
            Added!
        </div>
    @endif
    <br />
    <form method="post" action="{{ url('/backend/walkin/new') }}">
        {{ csrf_field() }}
        <div class="row" id="profile-form-row">
            <div class="col-3">
                <div class="form-row">
                    <label for="prefix" class="col-sm-5 col-form-label">คำนำหน้า : </label>
                    <div class="col-sm-7">
                        <select class="custom-select" id="prefix" name="prefix">
                            <option value="นาย">นาย</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="เด็กชาย">เด็กชาย</option>
                            <option value="เด็กหญิง">เด็กหญิง</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-row">
                    <label for="firstname" class="col-sm-3 col-form-label">ชื่อ : </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="firstname" name="firstname">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-row">
                    <label for="lastname" class="col-sm-4 col-form-label">นามสกุล : </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="lastname" name="lastname">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-row">
                    <label for="nickname" class="col-sm-3 col-form-label">ชื่อเล่น : </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nickname" name="nickname">
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="profile-form-row">
            <div class="col-4">
                <div class="form-row">
                    <label for="religion" class="col-sm-3 col-form-label">ศาสนา : </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="religion" name="religion">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-row">
                    <label for="school" class="col-sm-3 col-form-label">โรงเรียน : </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="school" name="school">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-row">
                    <label for="degree" class="col-sm-5 col-form-label">คำนำหน้า : </label>
                    <div class="col-sm-7">
                        <select class="custom-select" id="degree" name="degree">
                            <option value="มัธยมศึกษาปีที่ 4">มัธยมศึกษาปีที่ 4</option>
                            <option value="มัธยมศึกษาปีที่ 5">มัธยมศึกษาปีที่ 5</option>
                            <option value="มัธยมศึกษาปีที่ 6">มัธยมศึกษาปีที่ 6</option>
                            <option value="ปวช.">ปวช.</option>
                            <option value="ปวส.">ปวส.</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="profile-form-row">

            <div class="col-4">
                <div class="form-row">
                    <label for="email" class="col-sm-3 col-form-label">อีเมล : </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-row">
                    <label for="tel" class="col-sm-4 col-form-label">เบอร์โทรศัพท์ : </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="tel" name="tel">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-row">
                    <label for="parent" class="col-sm-4 col-form-label">เบอร์ผู้ปกครอง : </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="parent" name="parent">
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="profile-form-row">
            <div class="col-4">
                <div class="form-row">
                    <label for="disease" class="col-sm-4 col-form-label">โรคประจำตัว : </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="disease" name="disease">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-row">
                    <label for="food" class="col-sm-4 col-form-label">อาหารที่แพ้ : </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="food" name="food">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-row">
                    <label for="line" class="col-sm-3 col-form-label">Line : </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="line" name="line">
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="profile-form-row">
            <div class="col-4">
                <div class="form-row">
                    <label for="facebook" class="col-sm-4 col-form-label">Facebook : </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="facebook" name="facebook">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-row">
                    <label for="appointment" class="col-sm-5 col-form-label">จุดนัดพบ : </label>
                    <div class="col-sm-7">
                        <select class="custom-select" id="appointment" name="appointment">
                            <option value="0" selected>Walk-in</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-row">
                    <label for="exam" class="col-sm-7 col-form-label">เข้าร่วม Pre-Exam : </label>
                    <div class="col-sm-5">
                        <select class="custom-select" id="exam" name="exam">
                            <option value="0">ไม่เข้า</option>
                            <option value="1">เช้า</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="form-row">
                    <label for="round" class="col-sm-4 col-form-label">รอบที่ : </label>
                    <div class="col-sm-8">
                        <select class="custom-select" id="round" name="round" disabled>
                            <option value="1" {{  ($round == 1 ? "selected":"") }}>1</option>
                            <option value="2" {{  ($round == 2 ? "selected":"") }}>2</option>
                            <option value="3" {{  ($round == 3 ? "selected":"") }}>3</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <button class="btn btn-success btn-md" title="Save"><i class="fa fa-save"></i> Save</button>
            </div>
        </div>
    </form>
@endsection