@extends('layout_user')

@section('title,bill')
@endsection

@section('styles')
    <link rel="stylesheet" href="/css/user/bill.css">
@endsection

@section('content')
    <p class="name-page">ใบเสร็จชำระเงิน</p>

    <div class=" data-bill ">
        <p>ใบเสร็จชำระเงินค่าห้อง</p>
        <span class="mt-2"> ห้อง </span><span class="mt-2"> ประจำเดือน ปี </span>
        <table class="table table-bordered border-dark container mt-4">
            <caption>โปรดชำระก่อนวันที่ 5 ของทุกเดือน</caption>
            <thead>
                <tr>
                    <th scope="col">รายการ</th>
                    <th scope="col">เลขเดือนก่อน</th>
                    <th scope="col">เลขเดือนนี้</th>
                    <th scope="col"> จำนวนที่ใช้ไป </th>
                    <th scope="col"> หน่อยละ </th>
                    <th scope="col"> ราคารวม </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">ค่าน้ำ</th>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">ค่าไฟ</th>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">ค่าส่วนกลาง</th>
                    <td colspan="4"></td>
                    <td>3</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">ค่าห้อง</th>
                    <td colspan="4"></td>
                    <td>3</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row" colspan="5">ราคารวมทั้งหมด</th>
                    <td>3</td>
                </tr>
            </tbody>
        </table>

    </div>

    {{--  btn pay bill  --}}
    <div class="btns-pay mt-5">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#PayBill">ชำระเงิน</button>
    </div>

    {{--  model pay bill  --}}
    <div class="modal fade" id="PayBill" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-4" id="staticBackdropLabel">การชำระเงิน</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body m-5" >
                        <select class="form-select" id="TypePay"> 
                          <option selected>โปรดเลือกวิธีการชำระ...</option>
                          <option value="1">แบบชำระด้วยเงินสด</option>
                          <option value="2">แบบชำระด้วยการโอน</option>
                        </select>
                        <div class="up-file mt-3" id="upFile">
                                <label class="form-label">โปรดอัพโหลดหลักฐานการชำระเงิน</label><br>
                                <img id="viewFile" width="120" >
                                <input type="file" name="file" class="form-control mt-3" id="inputFile">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">ยืนยันการชำระเงิน</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/js/user/bill.js"></script>
@endsection
