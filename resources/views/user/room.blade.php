@extends('layout_user')

@section('title,room')
@endsection

@section('styles')
    <link rel="stylesheet" href="/css/user/room.css">
@endsection

@section('content')
    <p class="name-page">สถานะห้อง</p>

    <div class="status-room">
        <div class="card">
            <div class="card-header">
                ห้องทั้งหมด
            </div>
            <div class="card-body fs-3">
                {{ $totalRoom }}
            </div>
        </div>
        <div class="card ">
            <div class="card-header">
                ห้องว่าง
            </div>
            <div class="card-body fs-3">
                {{ $blankRoom }}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                เข้าพัก
            </div>
            <div class="card-body fs-3">
                {{ $unblankRoom }}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                ติดจอง
            </div>
            <div class="card-body fs-3">
                {{ $bookRoom }}
            </div>
        </div>
    </div>

    <div class="card-data-room ">
            @foreach ($rooms as $item)
            <div class="card">
                <div class="card-header" id="checkStatus">
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
        <div class="modal fade " id="showdata{{ $item->id }}" tabindex="-1" aria-labelledby="showdataModalLabel"
            data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
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
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('script')
    <script src="/js/user/room.js"></script>
@endsection
