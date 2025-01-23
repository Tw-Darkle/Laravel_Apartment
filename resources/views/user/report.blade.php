@extends('layout_user')

@section('title','report')

@section('styles')
    <link rel="stylesheet" href="/css/user/report.css">
@endsection

@section('content')
    <p class="name-page">เเจ้งซ่อม</p>
    <button type="button" class="btn btn-primary btn-report" data-bs-toggle="modal" data-bs-target="#popupReport">+
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
                <tbody>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>
                            <div onclick="datareport()">เพิ่มเติม</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{--  modal report  --}}
    <div class="modal fade" id="popupReport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-4">เเจ้งเรื่อง</h1>
                </div>
                <div class="modal-body m-3">
                    <select class="form-select container">
                        <option selected>โปรดเลือกหัวข้อการเเจ้ง</option>
                        <option value="1">อินเตอร์เน็ตเสีย</option>
                        <option value="2">อุปกรณ์ไฟฟ้าเสีย</option>
                        <option value="3">ท่อน้ำชำรุด</option>
                    </select>

                    <div class="mb-3 mt-3 box-text">
                        <label for="exampleFormControlTextarea1" class="form-label ">กรอกรายละเอียดเพิ่มเติม</label>
                        <textarea class="form-control container" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">ยืนยัน</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/js/user/report.js"></script>
@endsection
