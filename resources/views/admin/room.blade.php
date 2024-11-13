@extends('layout_admin')
@section('title', 'Room')

@section('styles')
    <link rel="stylesheet" href="/css/admin/room.css">
@endsection

@section('content')
    <div class="room">
        <div class="dataroom">
            <div class="card">
                <div class="card-header">
                    ห้องทั้งหมด
                </div>
                <div class="card-body">
                    {{ $totalRoom }}
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    ห้องว่าง
                </div>
                <div class="card-body">
                    {{ $blankRoom }}
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    เข้าพัก
                </div>
                <div class="card-body">
                    {{ $unblankRoom }}
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    ติดจอง
                </div>
                <div class="card-body">
                    {{ $bookRoom }}
                </div>
            </div>
        </div>

        {{--  button addroom  --}}
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formroom">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
            </svg>
            สร้างห้อง
        </button>

        <a type="button" class="btn btn-success setlink" href="/admin/settingRoom">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0"/>
                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z"/>
              </svg>
            ตั้งค่าห้อง
        </a>

    </div>


    <!-- Modal Form create card room-->

    <form class="modal fade needs-validation" id="formroom" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" method="POST" action="/storeRoom">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">กรอกข้อมูลห้อง</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="input-group mb-3 container">
                        <span class="input-group-text">เลขห้อง</span>
                        <input type="text" class="form-control" aria-label="numroom" name="numroom">
                        <div class="invalid-feedback error-message">
                            กรุณาเลือกประเภทห้อง
                        </div>
                    </div>

                    <div class="input-group mb-3 container">
                        <label class="input-group-text" for="inputGroupSelect02">ประเภทห้อง</label>
                        <select class="form-select" id="inputGroupSelect02" name="typeroom">
                            <option selected>โปรดเลือก...</option>
                            <option value="ห้องแอร์">ห้องแอร์</option>
                            <option value="ห้องพัดลม">ห้องพัดลม</option>
                        </select>
                        <div class="invalid-feedback error-message">
                            กรุณาเลือกประเภทห้อง
                        </div>
                    </div>

                    <div class="input-group mb-3 container">
                        <label class="input-group-text" for="inputGroupSelect02">สถานะห้อง</label>
                        <select class="form-select" id="inputGroupSelect02" name="statusroom">
                            <option selected>โปรดเลือก...</option>
                            <option value="ห้องว่าง">ห้องว่าง</option>
                            <option value="ห้องไม่ว่าง">ห้องไม่ว่าง</option>
                            <option value="ติดจอง">ติดจอง</option>
                        </select>
                        <div class="invalid-feedback error-message">
                            กรุณาเลือกสถานะห้อง
                        </div>
                    </div>

                    <div class="input-group mb-3 container">
                        <span class="input-group-text">มิเตอร์น้ำ</span>
                        <input type="text" class="form-control" aria-label="watermeter" name="watermeter">
                        <div class="invalid-feedback error-message">
                            กรุณากรอกมิเตอร์น้ำ
                        </div>
                        <span class="input-group-text">มิเตอร์ไฟ</span>
                        <input type="text" class="form-control" aria-label="electrimeter" name="electrimeter">
                        <div class="invalid-feedback error-message">
                            กรุณากรอกมิเตอร์ไฟ
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" value="บันทึก" class="btn btn-success">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </form>


    {{--  card data room  --}}

    <div class="card-data-room">
        @foreach ($rooms as $item)
            <div class="card">
                <div class="card-header">
                    ห้อง {{ $item->numroom }}
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
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#showdata{{ $item->id }}">ข้อมูล</button>
                </div>
            </div>
        @endforeach
    </div>


    <!-- Modal Show Card Data Room -->

    @foreach ($rooms as $item)
        <div class="modal fade " id="showdata{{ $item->id }}" tabindex="-1" aria-labelledby="showdataModalLabel" data-bs-backdrop="static" data-bs-keyboard="false"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="showdataModalLabel">ข้อมูลห้อง </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3 container">
                            <span class="input-group-text">เลขห้อง</span>
                            <input type="text" class="form-control" id="numroom" aria-label="numroom"
                                name="numroom" readonly value="{{ $item->numroom }}">
                        </div>

                        <div class="input-group mb-3 container">
                            <label class="input-group-text" for="inputGroupSelect02">ประเภทห้อง</label>
                            <input type="text" class="form-control" id="typeroom" name="typeroom" readonly
                                value="{{ $item->typeroom }}">
                        </div>

                        <div class="input-group mb-3 container">
                            <label class="input-group-text" for="inputGroupSelect02">สถานะห้อง</label>
                            <input type="text" class="form-control" id="statusroom" name="statusroom" readonly
                                value="{{ $item->statusroom }}">
                        </div>

                        <div class="input-group mb-3 container">
                            <span class="input-group-text">มิเตอร์น้ำ</span>
                            <input type="text" class="form-control" aria-label="watermeter" name="watermeter"
                                readonly value="{{ $item->watermeter }}">
                            <span class="input-group-text">มิเตอร์ไฟ</span>
                            <input type="text" class="form-control" aria-label="electrimeter" name="electrimeter"
                                readonly value="{{ $item->electrimeter }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a type="button" class="btn btn-danger" href="{{ route('delete.room', $item->id) }}">ลบห้อง</a>
                        <button type="button" class="btn btn-warning edit-button" data-bs-toggle="modal" data-bs-target="#editRoom{{ $item->id }}">แก้ไขข้อมูล</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    <!-- Modal Form Edit Card Data Room-->

    @foreach ($rooms as $item)
        <form class="modal fade editRoom " id="editRoom{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="editRoomModalLabel" aria-hidden="true" method="POST"
            action="{{ route('update.room', $item->id) }}">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editRoomModalLabel">เเก้ไขข้อมูลห้อง</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        @method('PUT')
                        <div class="input-group mb-3 container">
                            <span class="input-group-text">เลขห้อง</span>
                            <input type="text" class="form-control" aria-label="numroom" name="numroom"
                                value="{{ $item->numroom }}">
                        </div>

                        <div class="input-group mb-3 container">
                            <label class="input-group-text" for="inputGroupSelect02">ประเภทห้อง</label>
                            <select class="form-select" id="inputGroupSelect02" name="typeroom">
                                <option selected>โปรดเลือก...</option>
                                <option value="ห้องแอร์" {{ $item->typeroom == 'ห้องแอร์' ? 'selected' : '' }}>
                                    ห้องแอร์</option>
                                <option value="ห้องพัดลม" {{ $item->typeroom == 'ห้องพัดลม' ? 'selected' : '' }}>
                                    ห้องพัดลม</option>
                            </select>
                        </div>

                        <div class="input-group mb-3 container">
                            <label class="input-group-text" for="inputGroupSelect02">สถานะห้อง</label>
                            <select class="form-select" id="inputGroupSelect02" name="statusroom">
                                <option selected>โปรดเลือก...</option>
                                <option value="ห้องว่าง" {{ $item->statusroom == 'ห้องว่าง' ? 'selected' : '' }}>
                                    ห้องว่าง</option>
                                <option value="ห้องไม่ว่าง" {{ $item->statusroom == 'ห้องไม่ว่าง' ? 'selected' : '' }}>
                                    ห้องไม่ว่าง</option>
                                <option value="ติดจอง" {{ $item->statusroom == 'ติดจอง' ? 'selected' : '' }}>ติดจอง
                                </option>
                            </select>

                        </div>

                        <div class="input-group mb-3 container">
                            <span class="input-group-text">มิเตอร์น้ำ</span>
                            <input type="text" class="form-control" aria-label="watermeter" name="watermeter"
                                value="{{ $item->watermeter }}">
                            <span class="input-group-text">มิเตอร์ไฟ</span>
                            <input type="text" class="form-control" aria-label="electrimeter" name="electrimeter"
                                value="{{ $item->electrimeter }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="บันทึก" class="btn btn-success">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" >ปิด</button>
                    </div>
                </div>
            </div>
        </form>
    @endforeach

@endsection
@section('script')
    <script src="/js/admin/room.js"></script>
@endsection
