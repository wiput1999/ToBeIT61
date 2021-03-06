@extends('backend.partials')
@section('content')
    <div class="row">
        <h1>Profile</h1>
    </div>
    <br />
    <div class="row" id="profile-form-row">
        <div class="col-3">
            <div class="form-row">
                <label for="prefix" class="col-sm-5 col-form-label">คำนำหน้า : </label>
                <div class="col-sm-7">
                    <select class="custom-select" id="prefix" name="prefix" disabled>
                        <option value="นาย" {{  ($data['prefix'] == "นาย" ? "selected":"") }}>นาย</option>
                        <option value="นางสาว" {{  ($data['prefix'] == "นางสาว" ? "selected":"") }}>นางสาว</option>
                        <option value="เด็กชาย" {{  ($data['prefix'] == "เด็กชาย" ? "selected":"") }}>เด็กชาย</option>
                        <option value="เด็กหญิง" {{  ($data['prefix'] == "เด็กหญิง" ? "selected":"") }}>เด็กหญิง</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="form-row">
                <label for="firstname" class="col-sm-3 col-form-label">ชื่อ : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $data['firstname'] }}" disabled>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="form-row">
                <label for="lastname" class="col-sm-4 col-form-label">นามสกุล : </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $data['lastname'] }}" disabled>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="form-row">
                <label for="nickname" class="col-sm-3 col-form-label">ชื่อเล่น : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nickname" name="nickname" value="{{ $data['nickname'] }}" disabled>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="profile-form-row">
        <div class="col-4">
            <div class="form-row">
                <label for="religion" class="col-sm-3 col-form-label">ศาสนา : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="religion" name="religion" value="{{ $data['religion'] }}" disabled>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="form-row">
                <label for="school" class="col-sm-3 col-form-label">โรงเรียน : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="school" name="school" value="{{ $data['school'] }}" disabled>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="form-row">
                <label for="degree" class="col-sm-3 col-form-label">ระดับชั้น : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="degree" name="degree" value="{{ $data['degree'] }}" disabled>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="profile-form-row">

        <div class="col-4">
            <div class="form-row">
                <label for="email" class="col-sm-3 col-form-label">อีเมล : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" name="email" value="{{ $data['email'] }}" disabled>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="form-row">
                <label for="tel" class="col-sm-4 col-form-label">เบอร์โทรศัพท์ : </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tel" name="tel" value="{{ $data['tel'] }}" disabled>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="form-row">
                <label for="parent" class="col-sm-4 col-form-label">เบอร์ผู้ปกครอง : </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="parent" name="parent" value="{{ $data['parent'] }}" disabled>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="profile-form-row">
        <div class="col-4">
            <div class="form-row">
                <label for="disease" class="col-sm-4 col-form-label">โรคประจำตัว : </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="disease" name="disease" value="{{ $data['disease'] }}" disabled>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="form-row">
                <label for="food" class="col-sm-4 col-form-label">อาหารที่แพ้ : </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="food" name="food" value="{{ $data['food'] }}" disabled>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="form-row">
                <label for="line" class="col-sm-3 col-form-label">Line : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="line" name="line" value="{{ $data['line'] }}" disabled>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="profile-form-row">
        <div class="col-4">
            <div class="form-row">
                <label for="facebook" class="col-sm-4 col-form-label">Facebook : </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $data['facebook'] }}" disabled>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="form-row">
                <label for="appointment" class="col-sm-5 col-form-label">จุดนัดพบ : </label>
                <div class="col-sm-7">
                    <select class="custom-select" id="appointment" name="appointment" disabled>
                        <option value="0" {{  ($data['appointment'] == 0 ? "selected":"") }}>Walk-in</option>
                        <option value="1" {{  ($data['appointment'] == 1 ? "selected":"") }}>Airport Rail Link ลาดกระบัง</option>
                        <option value="2" {{  ($data['appointment'] == 2 ? "selected":"") }}>สนามบินสุวรรณภูมิ</option>
                        <option value="3" {{  ($data['appointment'] == 3 ? "selected":"") }}>สถาณีรถไฟหัวตะเข้</option>
                        <option value="4" {{  ($data['appointment'] == 4 ? "selected":"") }}>หน้าคณะ IT</option>
                        <option value="5" {{  ($data['appointment'] == 5 ? "selected":"") }}>วินรถตู้</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="form-row">
                <label for="exam" class="col-sm-7 col-form-label">เข้าร่วม Pre-Exam : </label>
                <div class="col-sm-5">
                    <select class="custom-select" id="exam" name="exam" disabled>
                        <option value="0" {{  ($data['exam'] == 0 ? "selected":"") }}>ไม่เข้า</option>
                        <option value="1" {{  ($data['exam'] == 1 ? "selected":"") }}>เช้า</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="form-row">
                <label for="round" class="col-sm-4 col-form-label">รอบที่ : </label>
                <div class="col-sm-8">
                    <select class="custom-select" id="round" name="round" disabled>
                        <option value="1" {{  ($data['round'] == 1 ? "selected":"") }}>1</option>
                        <option value="2" {{  ($data['round'] == 2 ? "selected":"") }}>2</option>
                        <option value="3" {{  ($data['round'] == 3 ? "selected":"") }}>3</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <a class="btn btn-info btn-md" href="{{ url('/backend/edit/'. $data['id']) }}" title="Edit"><i class="fa fa-pencil"></i> Edit</a>
        </div>
        <div class="col-2">
            <form action="{{ url('/backend/profile/'. $data['id'])  }}" method="post">
                {!! csrf_field() !!}
                {!! method_field('DELETE') !!}
                <button type="submit" class="btn btn-danger btn-md" title="Delete"><i class="fa fa-times"></i> Delete</button>
            </form>
        </div>
    </div>
@endsection