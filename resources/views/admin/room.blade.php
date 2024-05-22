@extends('layout_admin')
@section('title', 'Room')

@section('styles')
    <link rel="stylesheet" href="/css/admin/room.css">
@endsection

@section('content')
    {{-- all body room  --}}
    <div class="room">
        <div class="dataroom">
            <div class="card">
                <div class="card-header">
                    ห้องทั้งหมด
                </div>
                <div class="card-body">

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    ห้องว่าง
                </div>
                <div class="card-body">

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    ติดจอง
                </div>
                <div class="card-body">

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    เข้าพัก
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>

        {{--  button addroom  --}}
        <button type="button" class="btn btn-success  " onclick="addroom()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
            </svg>
            สร้างห้อง
        </button>
        <div class="statusroom">

        </div>
    </div>
    
    {{--  popup addroom  --}}
    <form class="popupform " id="popupform" method="POST" action="/insert">
        @csrf
        <p>กรอกข้อมูลห้อง</p>

        <div class="input-group mb-3 container">
            <span class="input-group-text">เลขห้อง</span>
            <input type="text" class="form-control" aria-label="numroom" name="numroom">
            @error('numroom')
                <div class=" container">
                    <span>{{ $message }}</span>
                </div>
            @enderror
        </div>

        <div class="input-group mb-3 container">
            <label class="input-group-text" for="inputGroupSelect02">ประเภทห้อง</label>
            <select class="form-select" id="inputGroupSelect02" name="typeroom">
                <option selected>โปรดเลือก...</option>
                <option value="1">ห้องแอร์</option>
                <option value="2">ห้องพัดลม</option>
            </select>
            @error('typeroom')
                <div class=" container">
                    <span>{{ $message }}</span>
                </div>
            @enderror
        </div>

        <div class="input-group mb-3 container">
            <label class="input-group-text" for="inputGroupSelect02">สถานะห้อง</label>
            <select class="form-select" id="inputGroupSelect02" name="statusroom">
                <option selected>โปรดเลือก...</option>
                <option value="1">ห้องว่าง</option>
                <option value="2">ห้องไม่ว่าง</option>
                <option value="3">ติดจอง</option>
            </select>
            @error('statusroom')
                <div class=" container">
                    <span>{{ $message }}</span>
                </div>
            @enderror
        </div>

        <div class="input-group mb-3 container">
            <span class="input-group-text">มิเตอร์น้ำ</span>
            <input type="text" class="form-control" aria-label="watermeter" name="watermeter">
            <span class="input-group-text">มิเตอร์ไฟ</span>
            <input type="text" class="form-control" aria-label="electrimeter" name="electrimeter">
            @error('watermeter')
                <div class=" container">
                    <span>{{ $message }}</span>
                </div>
            @enderror
        </div>

        {{--  btn-summit and btn-close  --}}
        <div class="btns-sub-close">
            <input type="submit" value="บันทึก" class="btn btn-success">
            <button type="reset" class="btn btn-danger" id="closePopup" onclick="closepopup()">ยกเลิก</button>
        </div>
    </form>

    {{--  card data room  --}}
    <div class="card-data-room ">
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
                <button type="button" class="btn btn-success" onclick="showdata()">ข้อมูล</button>
            </div>
        </div>
    </div>

    {{--  Show Data and edit data  --}}
    <div class="show-data " id="showdata">
        <p>ข้อมูลห้อง</p>

        <div class="input-group mb-3 container">
            <span class="input-group-text">เลขห้อง</span>
            <input type="text" class="form-control" aria-label="numroom" name="numroom" readonly>
        </div>

        <div class="input-group mb-3 container">
            <label class="input-group-text" for="inputGroupSelect02">ประเภทห้อง</label>
            <input class="form-control" id="inputGroupSelect02" name="typeroom" readonly>
        </div>

        <div class="input-group mb-3 container">
            <label class="input-group-text" for="inputGroupSelect02">สถานะห้อง</label>
            <input class="form-control" id="inputGroupSelect02" name="statusroom" readonly>
        </div>

        <div class="input-group mb-3 container">
            <span class="input-group-text">มิเตอร์น้ำ</span>
            <input type="text" class="form-control" aria-label="watermeter" name="watermeter" readonly>
            <span class="input-group-text">มิเตอร์ไฟ</span>
            <input type="text" class="form-control" aria-label="electrimeter" name="electrimeter" readonly>
        </div>

        <div class="btns-sub-close">
            <input type="submit" value="แก้ไข" class="btn btn-warning" onclick="editdataroom()">
            <button type="button" class="btn btn-danger" id="closeshowdata" onclick="closeshowdata()"> ปิด </button>
        </div>
    </div>

    {{--  edit data room  --}}
    <form class="edit-data" id="editdata">
        <p>แก้ไข้อมูลห้อง</p>

        <div class="input-group mb-3 container">
            <span class="input-group-text">เลขห้อง</span>
            <input type="text" class="form-control" aria-label="numroom" name="numroom">
            @error('numroom')
                <div class=" container">
                    <span>{{ $message }}</span>
                </div>
            @enderror
        </div>

        <div class="input-group mb-3 container">
            <label class="input-group-text" for="inputGroupSelect02">ประเภทห้อง</label>
            <select class="form-select" id="inputGroupSelect02" name="typeroom">
                <option selected>โปรดเลือก...</option>
                <option value="1">ห้องแอร์</option>
                <option value="2">ห้องพัดลม</option>
            </select>
            @error('typeroom')
                <div class=" container">
                    <span>{{ $message }}</span>
                </div>
            @enderror
        </div>

        <div class="input-group mb-3 container">
            <label class="input-group-text" for="inputGroupSelect02">สถานะห้อง</label>
            <select class="form-select" id="inputGroupSelect02" name="statusroom">
                <option selected>โปรดเลือก...</option>
                <option value="1">ห้องว่าง</option>
                <option value="2">ห้องไม่ว่าง</option>
                <option value="3">ติดจอง</option>
            </select>
            @error('statusroom')
                <div class=" container">
                    <span>{{ $message }}</span>
                </div>
            @enderror
        </div>

        <div class="input-group mb-3 container">
            <span class="input-group-text">มิเตอร์น้ำ</span>
            <input type="text" class="form-control" aria-label="watermeter" name="watermeter">
            <span class="input-group-text">มิเตอร์ไฟ</span>
            <input type="text" class="form-control" aria-label="electrimeter" name="electrimeter">
            @error('watermeter')
                <div class=" container">
                    <span>{{ $message }}</span>
                </div>
            @enderror
        </div>

        {{--  btn-summit and btn-close  --}}
        <div class="btns-sub-close">
            <input type="submit" value="บันทึก" class="btn btn-success">
            <button type="reset" class="btn btn-danger" id="closePopup" onclick="closeEditdata()">ยกเลิก</button>
        </div>
    </form>


@endsection
@section('script')
    <script src="/js/admin/room.js"></script>
@endsection
