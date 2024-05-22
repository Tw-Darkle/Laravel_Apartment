@extends('layout_user')

@section('title,datapersonal')
@endsection

@section('styles')
    <link rel="stylesheet" href="/css/user/datapersonal.css">
@endsection

@section('content')
    <p class="name-page">ข้อมูลส่วนตัวผู้เช่า</p>
    
    <div class="datarenters">
        <div class="input-group mb-3  mt-3 container">
            <span class="input-group-text">ชื่อ</span>
            <input type="text" class="form-control" aria-label="name" name="name" readonly>
            <span class="input-group-text">นามสกุล</span>
            <input type="text" class="form-control" aria-label="lastname" name="lastname" readonly>
        </div>
    
        <div class="input-group mb-3 container">
            <span class="input-group-text">ชื่อเล่น</span>
            <input type="text" class="form-control" aria-label="nickname" name="nickname" readonly>
            <span class="input-group-text">อายุ</span>
            <input type="text" class="form-control" aria-label="age" name="age" readonly>
            <span class="input-group-text">ว/ด/ป</span>
            <input type="date" class="form-control" aria-label="birthday" name="birthday" readonly>
        </div>
    
        <div class="input-group mb-3 container">
            <span class="input-group-text">เบอร์โทร</span>
            <input type="text" class="form-control" aria-label="tell" name="tell" readonly>
            <span class="input-group-text">เลขห้อง</span>
            <input type="text" class="form-control" aria-label="" name="numberroom" readonly>
            <label class="input-group-text" for="inputGroupSelect02">ประเภทห้อง</label>
            <input class="form-control" id="inputGroupSelect02" name="typeroom" readonly>
        </div>
    
        <div class="input-group mb-3 container">
            <span class="input-group-text">บ้านเลขที่</span>
            <input type="text" class="form-control" aria-label="codehouse" name="codehouse" readonly>
            <span class="input-group-text">หมู่</span>
            <input type="text" class="form-control" aria-label="moo" name="moo" readonly>
            <span class="input-group-text">ซอย</span>
            <input type="text" class="form-control" aria-label="soy" name="soy" readonly>
            <span class="input-group-text">ตำบล</span>
            <input type="text" class="form-control" aria-label="tambon" name="tambon" readonly>
        </div>
    
        <div class="input-group mb-3 container">
            <span class="input-group-text">อำเภอ</span>
            <input type="text" class="form-control" aria-label="district" name="distict" readonly>
            <span class="input-group-text">จังหวัด</span>
            <input type="text" class="form-control" aria-label="country" name="country" readonly>
            <span class="input-group-text">รหัสไปรษณีย์</span>
            <input type="text" class="form-control" aria-label="postcode" name="postcode" readonly>
        </div>
    
        <div class="input-group mb-3 container">
            <span class="input-group-text">มิเตอร์น้ำก่อนเข้าอยู่</span>
            <input type="text" class="form-control" aria-label="watermeter" name="watermeter" readonly>
            <span class="input-group-text">มิเตอร์ไฟก่อนเข้าอยู่</span>
            <input type="text" class="form-control" aria-label="electrimeter" name="electrimeter" readonly>
        </div>
    
        <div class="up-file mt-5">
            <div class="up-file1">
                <label class="form-label">สำเนาบัตรประชาชน</label><br>
                <img id="viewFile1" width="120">
            </div>
            <div class="up-file2">
                <label class="form-label">สำเนาทะเบียนบ้าน</label><br>
                <img id="viewFile2" width="120">
            </div>
        </div>
    </div>
    
@endsection

@section('script')
    <script src="/js/user/datapersonal.js"></script>
@endsection
