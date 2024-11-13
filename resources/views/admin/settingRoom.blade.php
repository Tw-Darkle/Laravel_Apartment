@extends('layout_admin')
@section('title', 'SettingRoom')

@section('styles')
    <link rel="stylesheet" href="/css/admin/settingRoom.css">
@endsection

@section('content')


    <div class="settings container">
        <p> ตั้งค่าห้อง </p>

        <form>
                @foreach ($showSetting as $items)
                    <div class="input-group mb-3 container">
                        <span class="input-group-text">ค่าน้ำหน่วยละ</span>
                        <input type="text" class="form-control" aria-label="priceWater" name="priceWater"
                            value="{{ $items->priceWater }}" readonly>
                        <span class="input-group-text">บาท</span>
                    </div>
                    <div class="input-group mb-3 container">
                        <span class="input-group-text">ค่าไฟหน่วยละ</span>
                        <input type="text" class="form-control" aria-label="priceEV" name="priceEV"
                            value="{{ $items->priceEV }}" readonly>
                        <span class="input-group-text">บาท</span>
                    </div>
                    <div class="input-group mb-3 container">
                        <span class="input-group-text">ห้องเเอร์</span>
                        <input type="text" class="form-control" aria-label="priceAirRoom" name="priceAirRoom"
                            value="{{ $items->priceAirRoom }}" readonly>
                        <span class="input-group-text">บาท</span>
                    </div>
                    <div class="input-group mb-3 container">
                        <span class="input-group-text">ห้องพัดลม</span>
                        <input type="text" class="form-control" aria-label="priceFanRoom" name="priceFanRoom"
                            value="{{ $items->priceFanRoom }}" readonly>
                        <span class="input-group-text">บาท</span>
                    </div>
                    <div class="input-group mb-3 container">
                        <span class="input-group-text">ค่าส่วนกลาง</span>
                        <input type="text" class="form-control" aria-label="CAMfee" name="CAMfee"
                            value="{{ $items->CAMfee }}" readonly>
                        <span class="input-group-text">บาท</span>
                    </div>
                @endforeach

            <div class=" button ">
                <button type="button" class="btn btn-warning " data-bs-toggle="modal"
                    data-bs-target="#editSettingRoom">แก้ไขข้อมูล</button>
                <button type="button" class="btn btn-success " data-bs-toggle="modal"
                    data-bs-target="#setRoom">บันทึกการตั้งค่าห้อง</button>
                <a type="button" class="btn btn-danger" href="/admin/room">ย้อนกลับ</a>
            </div>
        </form>
    </div>


    <!-- setting room-->
    <form class="modal fade editRoom " id="setRoom" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="editRoomModalLabel" aria-hidden="true" method="POST" action="/setRoom">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editRoomModalLabel">บันทึกการตั้งค่าห้อง</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf

                    <div class="input-group mb-3 container">
                        <span class="input-group-text">ค่าน้ำหน่วยละ</span>
                        <input type="text" class="form-control" aria-label="priceWater" name="priceWater">
                        <span class="input-group-text">บาท</span>
                    </div>
                    <div class="input-group mb-3 container">
                        <span class="input-group-text">ค่าไฟหน่วยละ</span>
                        <input type="text" class="form-control" aria-label="priceEV" name="priceEV">
                        <span class="input-group-text">บาท</span>
                    </div>
                    <div class="input-group mb-3 container">
                        <span class="input-group-text">ห้องเเอร์</span>
                        <input type="text" class="form-control" aria-label="priceAirRoom" name="priceAirRoom">
                        <span class="input-group-text">บาท</span>
                    </div>
                    <div class="input-group mb-3 container">
                        <span class="input-group-text">ห้องพัดลม</span>
                        <input type="text" class="form-control" aria-label="priceFanRoom" name="priceFanRoom">
                        <span class="input-group-text">บาท</span>
                    </div>
                    <div class="input-group mb-3 container">
                        <span class="input-group-text">ค่าส่วนกลาง</span>
                        <input type="text" class="form-control" aria-label="CAMfee" name="CAMfee">
                        <span class="input-group-text">บาท</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" value="บันทึก" class="btn btn-success">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </form>



    <!--edit setting room-->

    @foreach ($showSetting as $item)
        <form class="modal fade " id="editSettingRoom" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="editRoomModalLabel" aria-hidden="true"
            method="POST" action="{{ route('update.setRoom', $item->id) }}">
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
                            <span class="input-group-text">ค่าน้ำหน่วยละ</span>
                            <input type="text" class="form-control" aria-label="priceWater" name="priceWater"
                                value="{{ $item->priceWater }}">
                            <span class="input-group-text">บาท</span>
                        </div>
                        <div class="input-group mb-3 container">
                            <span class="input-group-text">ค่าไฟหน่วยละ</span>
                            <input type="text" class="form-control" aria-label="priceEV" name="priceEV"
                                value="{{ $item->priceEV }}">
                            <span class="input-group-text">บาท</span>
                        </div>
                        <div class="input-group mb-3 container">
                            <span class="input-group-text">ห้องเเอร์</span>
                            <input type="text" class="form-control" aria-label="priceAirRoom" name="priceAirRoom"
                                value="{{ $item->priceAirRoom }}">
                            <span class="input-group-text">บาท</span>
                        </div>
                        <div class="input-group mb-3 container">
                            <span class="input-group-text">ห้องพัดลม</span>
                            <input type="text" class="form-control" aria-label="priceFanRoom" name="priceFanRoom"
                                value="{{ $item->priceFanRoom }}">
                            <span class="input-group-text">บาท</span>
                        </div>
                        <div class="input-group mb-3 container">
                            <span class="input-group-text">ค่าส่วนกลาง</span>
                            <input type="text" class="form-control" aria-label="CAMfee" name="CAMfee"
                                value="{{ $item->CAMfee }}">
                            <span class="input-group-text">บาท</span>
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

@endsection
