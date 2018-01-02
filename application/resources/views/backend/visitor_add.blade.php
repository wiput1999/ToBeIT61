@extends('backend.partials')
@section('content')
    <div class="row">
        <h1>Add Visitor</h1>
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
    <form method="post" action="{{ url('/backend/visitor/new') }}">
        {{ csrf_field() }}
        <div class="row" id="profile-form-row">
            <div class="col-3">
                <div class="form-row">
                    <label for="prefix" class="col-sm-5 col-form-label">คำนำหน้า : </label>
                    <div class="col-sm-7">
                        <select class="custom-select" id="prefix" name="prefix">
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว">นางสาว</option>
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
                    <label for="tel" class="col-sm-4 col-form-label">เบอร์โทรศัพท์ : </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="tel" name="tel">
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