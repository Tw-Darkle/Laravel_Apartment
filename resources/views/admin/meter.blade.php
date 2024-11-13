@extends('layout_admin')
@section('title', 'meter')

@section('styles')
    <link rel="stylesheet" href="/css/admin/meter.css">
@endsection

@section('content')
    <div class="name-page">
        <p> จดมิเตอร์</p>

        {{--  card meter  --}}


            <div class="card-meter ">
                @foreach ($statusrooms as $item)
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
                                data-bs-target="#readmeter{{ $item->id }}">จดมิเตอร์</button>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>



    <!-- Modal Read meter-->


        @foreach ($statusrooms as $item)
            <form class="modal fade" id="readmeter{{ $item->id }}" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"
                method="POST" action="{{ route('record.meter', $item->id) }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel" name="numroom">ห้อง
                                {{ $item->numroom }}
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <div class="input-group mb-3 container">
                                <span class="input-group-text">มิเตอร์น้ำก่อน</span>
                                <input type="text" class="form-control" aria-label="watermeter" name="BFwatermeter"
                                    readonly id="BFWaterMeter{{ $item->id }}" value="{{ $item->watermeter }}">
                                <span class="input-group-text">มิเตอร์ไฟก่อน</span>
                                <input type="text" class="form-control" aria-label="electrimeter" name="BFelectrimeter"
                                    id="BFElectriMeter{{ $item->id }}" readonly value="{{ $item->electrimeter }}">
                            </div>

                            <div class="input-group mb-3 container">
                                <span class="input-group-text">มิเตอร์น้ำหลัง</span>
                                <input type="text" class="form-control" aria-label="watermeter" name="AFwatermeter"
                                    id="AFWaterMeter{{ $item->id }}">
                                <span class="input-group-text">มิเตอร์ไฟหลัง</span>
                                <input type="text" class="form-control" aria-label="electrimeter" name="AFelectrimeter"
                                    id="AFElectriMeter{{ $item->id }}">
                            </div>

                            <div class="input-group mb-3 container">
                                <span class="input-group-text">มิเตอร์น้ำรวม</span>
                                <input type="text" class="form-control" aria-label="watermeter" name="TTwatermeter"
                                    id="TTWaterMeter{{ $item->id }}" readonly value="">
                                <span class="input-group-text">มิเตอร์ไฟหลังรวม</span>
                                <input type="text" class="form-control" aria-label="electrimeter" name="TTelectrimeter"
                                    id="TTElectriMeter{{ $item->id }}" readonly value="">
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
    <script src="/js/admin/meter.js"></script>
@endsection
