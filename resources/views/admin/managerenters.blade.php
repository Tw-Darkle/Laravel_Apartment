@extends('layout_admin')
@section('title', 'manage-renters')

@section('styles')
    <link rel="stylesheet" href="/css/admin/managerenters.css">
@endsection

@section('content')
    <div class="Data-renters">
        <p>หน้าจัดการผู้เช่า</p>
        <button type="button" class="btn btn-success btns" data-bs-toggle="modal" data-bs-target="#CreateRenters">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
            </svg>
            กรอกข้อมูลผู้เช่าใหม่
        </button>
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
                @foreach ($Datas as $item)
                    <tbody>
                        <tr>
                            <td>{{ $item->NumberRoom }}</td>
                            <td>{{ $item->FullName }} {{ $item->LastName }}</td>
                            <td> {{ $item->Tel }} </td>
                            <td> {{ $item->HomeNumber }} {{ $item->Moo }} ...</td>
                            <td> <button class="btn "
                                    data-bs-toggle="modal"data-bs-target="#ShowData{{ $item->id }}">รายละเอียด</button>
                            </td>
                            <td><button class="btn "
                                    data-bs-toggle="modal"data-bs-target="#editData{{ $item->id }}">แก้ไข</button></td>
                            </td>
                            <td>ลบ</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>

    {{--  popup create data renters  --}}

    <form class="modal fade" id="CreateRenters" tabindex="-1" aria-labelledby="data" aria-hidden="true" method="POST"
        enctype="multipart/form-data" action="/storeRenters">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">กรอกข้อมูลผู้เช่าใหม่</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @csrf
                <div class="modal-body">
                    <div class="input-group mb-3 container">
                        <span class="input-group-text">ชื่อ</span>
                        <input type="text" class="form-control" aria-label="name" name="fullname" required>
                        <span class="input-group-text">นามสกุล</span>
                        <input type="text" class="form-control" aria-label="lastname" name="lastname" required>
                    </div>

                    <div class="input-group mb-3 container">
                        <span class="input-group-text">ชื่อเล่น</span>
                        <input type="text" class="form-control" aria-label="nickname" name="nickname" required>
                        <span class="input-group-text">อายุ</span>
                        <input type="text" class="form-control" aria-label="age" name="age"required>
                        <span class="input-group-text">ว/ด/ป</span>
                        <input type="date" class="form-control" aria-label="birthday" name="birthday" required>
                    </div>

                    <div class="input-group mb-3 container">
                        <span class="input-group-text">เบอร์โทร</span>
                        <input type="text" class="form-control" aria-label="tell" name="tel" required>
                        <label class="input-group-text" for="inputGroupSelect02">เลขห้อง</label>
                        <select class="form-select" id="inputGroupSelect02" name="numroom" required>
                            <option selected>โปรดเลือก...</option>
                            @foreach ($numrooms as $num)
                                <option value="{{ $num->numroom }}">{{ $num->numroom }}</option>
                            @endforeach
                        </select>
                        <label class="input-group-text" for="inputGroupSelect02">ประเภทห้อง</label>
                        <select class="form-select" id="inputGroupSelect02" name="typeroom" required>
                            <option selected>โปรดเลือก...</option>
                            <option value="ห้องแอร์">ห้องแอร์</option>
                            <option value="ห้องพัดลม">ห้องพัดลม</option>
                        </select>

                    </div>

                    <div class="input-group mb-3 container">
                        <span class="input-group-text">บ้านเลขที่</span>
                        <input type="text" class="form-control" aria-label="codehouse" name="homenumber" required>
                        <span class="input-group-text">หมู่</span>
                        <input type="text" class="form-control" aria-label="moo" name="moo" required>
                        <span class="input-group-text">ซอย</span>
                        <input type="text" class="form-control" aria-label="soi" name="soi" required>
                        <span class="input-group-text">ตำบล</span>
                        <input type="text" class="form-control" aria-label="tambon" name="tambon" required>
                    </div>

                    <div class="input-group mb-3 container">
                        <span class="input-group-text">อำเภอ</span>
                        <input type="text" class="form-control" aria-label="district" name="ampher" required>
                        <span class="input-group-text">จังหวัด</span>
                        <input type="text" class="form-control" aria-label="country" name="province" required>
                        <span class="input-group-text">รหัสไปรษณีย์</span>
                        <input type="text" class="form-control" aria-label="postcode" name="post" required>
                    </div>

                    <div class="input-group mb-3 container">
                        <span class="input-group-text">มิเตอร์น้ำก่อนเข้าอยู่</span>
                        <input type="text" class="form-control" aria-label="watermeter" name="BFWater" required>
                        <span class="input-group-text">มิเตอร์ไฟก่อนเข้าอยู่</span>
                        <input type="text" class="form-control" aria-label="electrimeter" name="BFEV" required>
                    </div>

                    <div class="up-file ">
                        <div class="up-file1">
                            <label class="form-label">สำเนาบัตรประชาชน</label>
                            <img id="viewFile1" width="120">
                            <input type="file" name="ImageID" class="form-control mt-3"id="inputFile1" required>
                        </div>
                        <div class="up-file2">
                            <label class="form-label">สำเนาทะเบียนบ้าน</label>
                            <img id="viewFile2" width="120">
                            <input type="file" name="ImageAddress" class="form-control mt-3"id="inputFile2" required>
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

    {{--  popup edit data renters  --}}

    @foreach ($Datas as $item)
        <form class="modal fade" id="editData{{ $item->id }}" tabindex="-1" aria-labelledby="data"
            aria-hidden="true" method="POST" enctype="multipart/form-data"
            action="{{ route('update.renters', $item->id) }}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">เเก้ไขข้อมูลผู้เช่า</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="input-group mb-3 container">
                            <span class="input-group-text">ชื่อ</span>
                            <input type="text" class="form-control" aria-label="name" name="fullname"
                                value="{{ $item->FullName }}">
                            <span class="input-group-text">นามสกุล</span>
                            <input type="text" class="form-control" aria-label="lastname" name="lastname"
                                value=" {{ $item->LastName }}">
                        </div>

                        <div class="input-group mb-3 container">
                            <span class="input-group-text">ชื่อเล่น</span>
                            <input type="text" class="form-control" aria-label="nickname" name="nickname"
                                value="{{ $item->NickName }}">
                            <span class="input-group-text">อายุ</span>
                            <input type="text" class="form-control" aria-label="age" name="age"
                                value="{{ $item->Age }}">
                            <span class="input-group-text">ว/ด/ป</span>
                            <input type="date" class="form-control" aria-label="birthday" name="birthday"
                                value="{{ $item->BirthDay }}">
                        </div>

                        <div class="input-group mb-3 container">
                            <span class="input-group-text">เบอร์โทร</span>
                            <input type="text" class="form-control" aria-label="tell" name="tel"
                                value="{{ $item->Tel }}">
                            <label class="input-group-text" for="inputGroupSelect02">เลขห้อง</label>
                            <select class="form-select" id="inputGroupSelect02" name="numroom"  required >
                                <option selected >{{ $item->NumberRoom }}</option>
                                @foreach ($numrooms as $num)
                                    <option value="{{ $num->numroom }}">{{ $num->numroom }}</option>
                                @endforeach
                            </select>
                            <label class="input-group-text" for="inputGroupSelect02">ประเภทห้อง</label>
                            <input class="form-control" id="inputGroupSelect02" name="typeroom"
                                value="{{ $item->TypeRoom }}" readonly>
                        </div>

                        <div class="input-group mb-3 container">
                            <span class="input-group-text">บ้านเลขที่</span>
                            <input type="text" class="form-control" aria-label="codehouse" name="homenumber"
                                value="{{ $item->HomeNumber }}">
                            <span class="input-group-text">หมู่</span>
                            <input type="text" class="form-control" aria-label="moo" name="moo"
                                value="{{ $item->Moo }}">
                            <span class="input-group-text">ซอย</span>
                            <input type="text" class="form-control" aria-label="soy" name="soi"
                                value="{{ $item->Soi }}">
                            <span class="input-group-text">ตำบล</span>
                            <input type="text" class="form-control" aria-label="tambon" name="tambon"
                                value="{{ $item->Tumbon }}">
                        </div>

                        <div class="input-group mb-3 container">
                            <span class="input-group-text">อำเภอ</span>
                            <input type="text" class="form-control" aria-label="district" name="ampher"
                                value="{{ $item->Ampher }}">
                            <span class="input-group-text">จังหวัด</span>
                            <input type="text" class="form-control" aria-label="country" name="province"
                                value="{{ $item->Province }}">
                            <span class="input-group-text">รหัสไปรษณีย์</span>
                            <input type="text" class="form-control" aria-label="postcode" name="post"
                                value="{{ $item->Post }}">
                        </div>

                        <div class="input-group mb-3 container">
                            <span class="input-group-text">มิเตอร์น้ำก่อนเข้าอยู่</span>
                            <input type="text" class="form-control" aria-label="watermeter" name="BFWater"
                                value="{{ $item->BeforeWater }}">
                            <span class="input-group-text">มิเตอร์ไฟก่อนเข้าอยู่</span>
                            <input type="text" class="form-control" aria-label="electrimeter" name="BFEV"
                                value="{{ $item->BeforeEV }}">
                        </div>

                        <div class="up-file ">
                            <div class="up-file1">
                                <label class="form-label">สำเนาบัตรประชาชน</label>
                                <img src="{{ asset('uploads/' . $item->ImageID) }}" alt="{{ $item->ImageID }}"
                                    width="150" id="viewFileEdit1">
                                <input type="file" name="ImageID" class="form-control mt-3"id="inputFileEdit1"
                                    required>
                            </div>
                            <div class="up-file2">
                                <label class="form-label">สำเนาทะเบียนบ้าน</label>
                                <img src="{{ asset('uploads/' . $item->ImageAddress) }}" alt="{{ $item->ImageAddress }}"
                                    width="150" id="viewFileEdit2">
                                <input type="file" name="ImageAddress" class="form-control mt-3"id="inputFileEdit2"
                                    required>
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
    @endforeach

    {{--  popup show data renters  --}}

    @foreach ($Datas as $item)
        <div class="modal fade" id="ShowData{{ $item->id }}" tabindex="-1" aria-labelledby="Bill"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ข้อมูลผู้เช่า</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3 container">
                            <span class="input-group-text">ชื่อ</span>
                            <input type="text" class="form-control" aria-label="name" name="name" readonly
                                value="{{ $item->FullName }}">
                            <span class="input-group-text">นามสกุล</span>
                            <input type="text" class="form-control" aria-label="lastname" name="lastname" readonly
                                value=" {{ $item->LastName }}">
                        </div>

                        <div class="input-group mb-3 container">
                            <span class="input-group-text">ชื่อเล่น</span>
                            <input type="text" class="form-control" aria-label="nickname" name="nickname" readonly
                                value="{{ $item->NickName }}">
                            <span class="input-group-text">อายุ</span>
                            <input type="text" class="form-control" aria-label="age" name="age"
                                value="{{ $item->Age }}" readonly>
                            <span class="input-group-text">ว/ด/ป</span>
                            <input type="date" class="form-control" aria-label="birthday" name="birthday" readonly
                                value="{{ $item->BirthDay }}">
                        </div>

                        <div class="input-group mb-3 container">
                            <span class="input-group-text">เบอร์โทร</span>
                            <input type="text" class="form-control" aria-label="tell" name="tell" readonly
                                value="{{ $item->Tel }}">
                            <span class="input-group-text">เลขห้อง</span>
                            <input type="text" class="form-control" aria-label="" name="numberroom" readonly
                                value="{{ $item->NumberRoom }}">
                            <label class="input-group-text" for="inputGroupSelect02">ประเภทห้อง</label>
                            <input class="form-control" id="inputGroupSelect02" name="typeroom" readonly
                                value="{{ $item->TypeRoom }}">
                        </div>

                        <div class="input-group mb-3 container">
                            <span class="input-group-text">บ้านเลขที่</span>
                            <input type="text" class="form-control" aria-label="codehouse" name="codehouse" readonly
                                value="{{ $item->HomeNumber }}">
                            <span class="input-group-text">หมู่</span>
                            <input type="text" class="form-control" aria-label="moo" name="moo" readonly
                                value="{{ $item->Moo }}">
                            <span class="input-group-text">ซอย</span>
                            <input type="text" class="form-control" aria-label="soy" name="soy" readonly
                                value="{{ $item->Soi }}">
                            <span class="input-group-text">ตำบล</span>
                            <input type="text" class="form-control" aria-label="tambon" name="tambon" readonly
                                value="{{ $item->Tumbon }}">
                        </div>

                        <div class="input-group mb-3 container">
                            <span class="input-group-text">อำเภอ</span>
                            <input type="text" class="form-control" aria-label="district" name="distict" readonly
                                value="{{ $item->Ampher }}">
                            <span class="input-group-text">จังหวัด</span>
                            <input type="text" class="form-control" aria-label="country" name="country" readonly
                                value="{{ $item->Province }}">
                            <span class="input-group-text">รหัสไปรษณีย์</span>
                            <input type="text" class="form-control" aria-label="postcode" name="postcode" readonly
                                value="{{ $item->Post }}">
                        </div>

                        <div class="input-group mb-3 container">
                            <span class="input-group-text">มิเตอร์น้ำก่อนเข้าอยู่</span>
                            <input type="text" class="form-control" aria-label="watermeter" name="watermeter"
                                readonly value="{{ $item->BeforeWater }}">
                            <span class="input-group-text">มิเตอร์ไฟก่อนเข้าอยู่</span>
                            <input type="text" class="form-control" aria-label="electrimeter" name="electrimeter"
                                readonly value="{{ $item->BeforeEV }}">
                        </div>

                        <div class="up-file ">
                            <div class="up-file1">
                                <label class="form-label">สำเนาบัตรประชาชน</label>
                                <img src="{{ asset('uploads/' . $item->ImageID) }}" alt="{{ $item->ImageID }}"
                                    width="200">
                            </div>
                            <div class="up-file2">
                                <label class="form-label">สำเนาทะเบียนบ้าน</label>
                                <img src="{{ asset('uploads/' . $item->ImageAddress) }}" alt="{{ $item->ImageAddress }}"
                                    width="200">
                            </div>
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
    <script src="/js/admin/managerenters.js"></script>
@endsection
