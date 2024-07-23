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
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formroom">
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


    <!-- Modal Form create card room-->

    <form class="modal fade" id="formroom" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true" method="POST" action="/store">
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
                            <option value="ห้องแอร์">ห้องแอร์</option>
                            <option value="ห้องพัดลม">ห้องพัดลม</option>
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
                            <option value="ห้องว่าง">ห้องว่าง</option>
                            <option value="ห้องไม่ว่าง">ห้องไม่ว่าง</option>
                            <option value="ติดจอง">ติดจอง</option>
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
                        <span>
                            @error('electrimeter')
                                <div class=" container">
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </span>
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
        <div class="modal fade" id="showdata{{ $item->id }}" tabindex="-1" aria-labelledby="showdataModalLabel"
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
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#editRoom{{ $item->id }}">แก้ไขข้อมูล</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    <!-- Modal Form Edit Card Data Room-->

    @foreach ($rooms as $item)
        <form class="modal fade" id="editRoom{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="editRoomModalLabel" aria-hidden="true" method="POST" action="{{ route('update.room', $item->id) }}">
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
                                value="{{ $item->numroom }}" >
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
                                <option value="ห้องแอร์" {{ $item->typeroom == 'ห้องแอร์' ? 'selected' : '' }} >
                                    ห้องแอร์</option>
                                <option value="ห้องพัดลม" {{ $item->typeroom == 'ห้องพัดลม' ? 'selected' : '' }} >
                                    ห้องพัดลม</option>
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
                                <option value="ห้องว่าง" {{ $item->statusroom == 'ห้องว่าง' ? 'selected' : '' }} >
                                    ห้องว่าง</option>
                                <option value="ห้องไม่ว่าง" {{ $item->statusroom == 'ห้องไม่ว่าง' ? 'selected' : '' }} >
                                    ห้องไม่ว่าง</option>
                                <option value="ติดจอง" {{ $item->statusroom == 'ติดจอง' ? 'selected' : '' }} >ติดจอง
                                </option>
                            </select>
                            @error('statusroom')
                                <div class=" container">
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>

                        <div class="input-group mb-3 container">
                            <span class="input-group-text">มิเตอร์น้ำ</span>
                            <input type="text" class="form-control" aria-label="watermeter" name="watermeter"
                                value="{{ $item->watermeter }}" >
                            <span class="input-group-text">มิเตอร์ไฟ</span>
                            <input type="text" class="form-control" aria-label="electrimeter" name="electrimeter"
                                value="{{ $item->electrimeter }}" >
                            @error('watermeter')
                                <div class=" container">
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                            <span>
                                @error('electrimeter')
                                    <div class=" container">
                                        <span>{{ $message }}</span>
                                    </div>
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="บันทึก" class="btn btn-success">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
                    </div>
                </div>
            </div>
        </form>
    @endforeach

@endsection
@section('script')
    <script src="/js/admin/room.js"></script>
@endsection
