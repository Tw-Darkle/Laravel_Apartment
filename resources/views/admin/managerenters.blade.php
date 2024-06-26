@extends('layout_admin')
@section('title', 'manage-renters')

@section('styles')
    <link rel="stylesheet" href="/css/admin/managerenters.css">
@endsection

@section('content')
    <div class="table-data-renters">
        <p>หน้าจัดการผู้เช่า</p>
        <div class="table-bg ">
            <table class="table table-bordered container ">
                <thead class="table-light">
                    <tr>
                        <th scope="col">เลขห้อง</th>
                        <th scope="col">ชื่อ-นามสกุล</th>
                        <th scope="col">เบอร์โทร</th>
                        <th scope="col">ที่อยู่</th>
                        <th scope="col">รายละเอียดเพิ่มเติม</th>
                        <th scope="col">เเก้ไขข้อมูล</th>
                        <th scope="col">ลบข้อมูล</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>1111111111111111111111</td>
                        <td onclick="dataRenters()">รายละเอียด</td>
                        <td onclick="editRenter()">แก้ไข</td>
                        <td>ลบ</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{--  popup edit data renters  --}}
    <form class="edit-renters" method="POST" id="editdata" >
        @csrf
        <p>เเก้ไขข้อมูลผู้เช่า</p>

        <div class="input-group mb-3 container">
            <span class="input-group-text">ชื่อ</span>
            <input type="text" class="form-control" aria-label="name" name="name">
            <span class="input-group-text">นามสกุล</span>
            <input type="text" class="form-control" aria-label="lastname" name="lastname">
        </div>

        <div class="input-group mb-3 container">
            <span class="input-group-text">ชื่อเล่น</span>
            <input type="text" class="form-control" aria-label="nickname" name="nickname">
            <span class="input-group-text">อายุ</span>
            <input type="text" class="form-control" aria-label="age" name="age">
            <span class="input-group-text">ว/ด/ป</span>
            <input type="date" class="form-control" aria-label="birthday" name="birthday">
        </div>

        <div class="input-group mb-3 container">
            <span class="input-group-text">เบอร์โทร</span>
            <input type="text" class="form-control" aria-label="tell" name="tell">
            <span class="input-group-text">เลขห้อง</span>
            <input type="text" class="form-control" aria-label="" name="numberroom">
            <label class="input-group-text" for="inputGroupSelect02">ประเภทห้อง</label>
            <select class="form-select" id="inputGroupSelect02" name="typeroom">
                <option selected>โปรดเลือก...</option>
                <option value="1">ห้องแอร์</option>
                <option value="2">ห้องพัดลม</option>
            </select>
        </div>

        <div class="input-group mb-3 container">
            <span class="input-group-text">บ้านเลขที่</span>
            <input type="text" class="form-control" aria-label="codehouse" name="codehouse">
            <span class="input-group-text">หมู่</span>
            <input type="text" class="form-control" aria-label="moo" name="moo">
            <span class="input-group-text">ซอย</span>
            <input type="text" class="form-control" aria-label="soy" name="soy">
            <span class="input-group-text">ตำบล</span>
            <input type="text" class="form-control" aria-label="tambon" name="tambon">
        </div>

        <div class="input-group mb-3 container">
            <span class="input-group-text">อำเภอ</span>
            <input type="text" class="form-control" aria-label="district" name="distict">
            <span class="input-group-text">จังหวัด</span>
            <input type="text" class="form-control" aria-label="country" name="country">
            <span class="input-group-text">รหัสไปรษณีย์</span>
            <input type="text" class="form-control" aria-label="postcode" name="postcode">
        </div>

        <div class="input-group mb-3 container">
            <span class="input-group-text">มิเตอร์น้ำก่อนเข้าอยู่</span>
            <input type="text" class="form-control" aria-label="watermeter" name="watermeter">
            <span class="input-group-text">มิเตอร์ไฟก่อนเข้าอยู่</span>
            <input type="text" class="form-control" aria-label="electrimeter" name="electrimeter">
        </div>

        <div class="up-file ">
            <div class="up-file1">
                <label class="form-label">สำเนาบัตรประชาชน</label>
                <img id="viewFile1" width="120">
                <input type="file" name="file1" class="form-control mt-3"id="inputFile1">
            </div>
            <div class="up-file2">
                <label class="form-label">สำเนาทะเบียนบ้าน</label>
                <img id="viewFile2" width="120">
                <input type="file" name="file1" class="form-control mt-3"id="inputFile2">
            </div>
        </div>

        <div class="btns-sub-close">
            <input type="submit" value="บันทึก" class="btn btn-success">
            <button type="reset" class="btn btn-danger" id="closePopup" onclick="closepopup()">ยกเลิก</button>
        </div>
    </form>

    {{--  popup show data renters  --}}
    <form class="show-data-renters" id="showDataRenters" >
        <p>ข้อมูลผู้เช่า</p>

        <div class="input-group mb-3 container">
            <span class="input-group-text">ชื่อ</span>
            <input type="text" class="form-control" aria-label="name" name="name" readonly>
            <span class="input-group-text">นามสกุล</span>
            <input type="text" class="form-control" aria-label="lastname" name="lastname" readonly >
        </div>

        <div class="input-group mb-3 container">
            <span class="input-group-text">ชื่อเล่น</span>
            <input type="text" class="form-control" aria-label="nickname" name="nickname" readonly >
            <span class="input-group-text">อายุ</span>
            <input type="text" class="form-control" aria-label="age" name="age">
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

        <div class="up-file ">
            <div class="up-file1">
                <label class="form-label">สำเนาบัตรประชาชน</label>
                <img id="viewFile1" width="120">
            </div>
            <div class="up-file2">
                <label class="form-label">สำเนาทะเบียนบ้าน</label>
                <img id="viewFile2" width="120">
            </div>
        </div>

        <div class="btns-sub-close">
            <button type="reset" class="btn btn-danger" id="closePopup" onclick="closepopup1()">ยกเลิก</button>
        </div>
    </form>

@endsection

@section('script')
    <script src="/js/admin/managerenters.js"></script>
@endsection
