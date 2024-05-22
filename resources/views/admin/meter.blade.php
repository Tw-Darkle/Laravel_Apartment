@extends('layout_admin')
@section('title','meter')

@section('styles')
<link rel="stylesheet" href="/css/admin/meter.css">
@endsection

@section('content')
    <div class="name-page">
        <p> จดมิเตอร์</p>

        {{--  card meter  --}}
        <div class="card-meter ">
            <div class="card">
                <div class="card-header">
                    ห้อง
                </div>
                <div class="card-body ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-door-open" viewBox="0 0 16 16">
                        <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1" />
                        <path
                            d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z" />
                    </svg>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-success" onclick="readmeter()">จดมิเตอร์</button>
                </div>
            </div>
        </div>
    </div>

    {{--  popup readmeter  --}}
    <form class="popup-read-meter" id="readmeter">
        <p> ห้อง </p>
        
        <div class="show-meter-before mb-3">
            <span class="shows-m-w">มิเตอร์น้ำก่อน</span>
            <span class="show-data-m-w"></span>
            <span class="shows-m-e">มิเตอร์ไฟก่อน</span>
            <span class="show-data-m-e"></span>
        </div>

        <div class="input-group mb-3 container">
            <span class="input-group-text">มิเตอร์น้ำหลัง</span>
            <input type="text" class="form-control" aria-label="watermeter" name="watermeter">
            <span class="input-group-text">มิเตอร์ไฟหลัง</span>
            <input type="text" class="form-control" aria-label="electrimeter" name="electrimeter">
        </div>
        
        <div class="show-meter-before mb-3">
            <span class="shows-m-w">มิเตอร์น้ำรวม</span>
            <span class="show-data-m-w"></span>
            <span class="shows-m-e">มิเตอร์ไฟรวม</span>
            <span class="show-data-m-e"></span>
        </div>

        <div class="btns-sub-close">
            <input type="submit" value="บันทึก" class="btn btn-success">
            <button type="reset" class="btn btn-danger" id="closePopup" onclick="closepopup()">ยกเลิก</button>
        </div>
        
    </form>
@endsection

@section('script')
    <script src="/js/admin/meter.js"></script>
@endsection
