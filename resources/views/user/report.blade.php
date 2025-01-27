@extends('layout_user')

@section('title','Report')

@section('styles')
    <link rel="stylesheet" href="/css/user/report.css">
@endsection

@section('content')
    <p class="name-page">เเจ้งซ่อม</p>
    <button type="button" class="btn btn-success btn-report" data-bs-toggle="modal" data-bs-target="#popupReport">+
        เเจ้งเรื่อง</button>

    <div class="table-report">
        <div class="table-bg ">
            <p>ประวัติการเเจ้งซ่อม</p>
            <table class="table table-bordered container">
                <thead class="table-light">
                    <tr>
                        <th scope="col">วัน/เดือน/ปี</th>
                        <th scope="col">เรื่องที่เเจ้ง</th>
                        <th scope="col">สถานะเเจ้งซ่อม</th>
                        <th scope="col"> ข้อมูลเพิ่มเติม </th>
                    </tr>
                </thead>
                @foreach ($reports as $item)
                <tbody>
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($item->created_at)->addYears(543)->format('d/m/Y') }}</td>
                        <td>{{ $item->TitleReport }}</td>
                        <td type="btn" data-bs-toggle="modal" data-bs-target="#showDataReport{{ $item->id }}">
                            ข้อมูล</td>
                        <td type="btn" data-bs-toggle="modal" data-bs-target="#statusReport">
                            {{ $item->StatusReport }}
                        </td>
                    </tr>
                </tbody>
            @endforeach
            </table>
        </div>
    </div>

    {{--  modal report  --}}
    <form class="modal fade" id="popupReport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" enctype="multipart/form-data" method="POST" action="/storeReport">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">เเจ้งเรื่อง</h1>
                </div>
                <div class="modal-body m-3">
                    @csrf
                    <select class="form-select container" name="TitleReport">
                        <option selected>โปรดเลือกหัวข้อการเเจ้ง</option>
                        <option value="อินเตอร์เน็ตเสีย">อินเตอร์เน็ตเสีย</option>
                        <option value="อุปกรณ์ไฟฟ้าเสีย">อุปกรณ์ไฟฟ้าเสีย</option>
                        <option value="ท่อน้ำชำรุด">ท่อน้ำชำรุด</option>
                    </select>

                    <div class="mb-3 mt-3 box-text w-100">
                        <label for="exampleFormControlTextarea1" class="form-label " >กรอกรายละเอียดเพิ่มเติม</label>
                        <textarea class="form-control container" id="exampleFormControlTextarea1" rows="5" name="DetailReport"></textarea>
                    </div>

                    <hr>
                    <div class="up-file mt-3" id="upFile">
                        <label class="form-label">โปรดอัพโหลดหลักฐานการชำระเงิน</label><br>
                        <img id="viewFile" width="120">
                        <input type="file" name="ImageReport" class="form-control mt-3" id="inputFile" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">เเจ้งเรื่อง</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </form>


    {{--  popup data report  --}}
    @foreach ($reports as $item)
        <form class="modal fade" id="showDataReport{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">รายละเอียดการเเจ้งซ่อม</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="fs-6">เรื่องที่เเจ้ง :::: {{ $item->TitleReport }}</p>
                        <div class="mb-3  w-100">
                            <textarea class="form-control container " id="exampleFormControlTextarea1" rows="5" readonly>{{ $item->DetailReport }}</textarea>
                        </div>
                        <hr>
                            <div class="up-file ">
                                <img src="{{ asset('uploads/' . $item->ImageReport) }}" alt="{{ $item->ImageReport }}" width="500"  >
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
@endsection

@section('script')
    <script src="/js/user/report.js"></script>
@endsection
