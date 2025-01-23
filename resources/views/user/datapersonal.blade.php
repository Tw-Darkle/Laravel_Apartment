@extends('layout_user')

@section('title', 'datapersonal')

@section('styles')
    <link rel="stylesheet" href="/css/user/datapersonal.css">
@endsection

@section('content')
    <p class="name-page">ข้อมูลส่วนตัวผู้เช่า</p>

    <div class="datarenters">
        <div class="input-group mb-3 container mt-5">
            <span class="input-group-text">ชื่อ</span>
            <input type="text" class="form-control" aria-label="name" name="name" readonly value="{{ $Datas->FullName }}">
            <span class="input-group-text">นามสกุล</span>
            <input type="text" class="form-control" aria-label="lastname" name="lastname" readonly
                value=" {{ $Datas->LastName }}">
        </div>

        <div class="input-group mb-3 container">
            <span class="input-group-text">ชื่อเล่น</span>
            <input type="text" class="form-control" aria-label="nickname" name="nickname" readonly
                value="{{ $Datas->NickName }}">
            <span class="input-group-text">อายุ</span>
            <input type="text" class="form-control" aria-label="age" name="age" value="{{ $Datas->Age }}" readonly>
            <span class="input-group-text">ว/ด/ป</span>
            <input type="date" class="form-control" aria-label="birthday" name="birthday" readonly
                value="{Datas->BirthDay }}">
        </div>

        <div class="input-group mb-3 container">
            <span class="input-group-text">เบอร์โทร</span>
            <input type="text" class="form-control" aria-label="tell" name="tell" readonly
                value="{{ $Datas->Tel }}">
            <span class="input-group-text">เลขห้อง</span>
            <input type="text" class="form-control" aria-label="" name="numberroom" readonly
                value="{{ $Datas->NumberRoom }}">
            <label class="input-group-text" for="inputGroupSelect02">ประเภทห้อง</label>
            <input class="form-control" id="inputGroupSelect02" name="typeroom" readonly value="{{ $Datas->TypeRoom }}">
        </div>

        <div class="input-group mb-3 container">
            <span class="input-group-text">บ้านเลขที่</span>
            <input type="text" class="form-control" aria-label="codehouse" name="codehouse" readonly
                value="{{ $Datas->HomeNumber }}">
            <span class="input-group-text">หมู่</span>
            <input type="text" class="form-control" aria-label="moo" name="moo" readonly value="{{ $Datas->Moo }}">
            <span class="input-group-text">ซอย</span>
            <input type="text" class="form-control" aria-label="soy" name="soy" readonly
                value="{{ $Datas->Soi }}">
            <span class="input-group-text">ตำบล</span>
            <input type="text" class="form-control" aria-label="tambon" name="tambon" readonly
                value="{{ $Datas->Tumbon }}">
        </div>

        <div class="input-group mb-3 container">
            <span class="input-group-text">อำเภอ</span>
            <input type="text" class="form-control" aria-label="district" name="distict" readonly
                value="{{ $Datas->Ampher }}">
            <span class="input-group-text">จังหวัด</span>
            <input type="text" class="form-control" aria-label="country" name="country" readonly
                value="{{ $Datas->Province }}">
            <span class="input-group-text">รหัสไปรษณีย์</span>
            <input type="text" class="form-control" aria-label="postcode" name="postcode" readonly
                value="{{ $Datas->Post }}">
        </div>

        <div class="input-group mb-3 container">
            <span class="input-group-text">มิเตอร์น้ำก่อนเข้าอยู่</span>
            <input type="text" class="form-control" aria-label="watermeter" name="watermeter" readonly
                value="{{ $Datas->BeforeWater }}">
            <span class="input-group-text">มิเตอร์ไฟก่อนเข้าอยู่</span>
            <input type="text" class="form-control" aria-label="electrimeter" name="electrimeter" readonly
                value="{{ $Datas->BeforeEV }}">
        </div>

        <div class="up-file ">
            <div class="up-file1">
                <label class="form-label">สำเนาบัตรประชาชน</label>
                <img src="{{ asset('uploads/' . $Datas->ImageID) }}" alt="{{ $Datas->ImageID }}" width="200">
            </div>
            <div class="up-file2">
                <label class="form-label">สำเนาทะเบียนบ้าน</label>
                <img src="{{ asset('uploads/' . $Datas->ImageAddress) }}" alt="{{ $Datas->ImageAddress }}"
                    width="200">
            </div>
        </div>

    </div>

@endsection

@section('script')
    <script src="/js/user/datapersonal.js"></script>
@endsection
