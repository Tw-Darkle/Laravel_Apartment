@extends('layout_admin')
@section('title', 'bill')

@section('styles')
    <link rel="stylesheet" href="/css/admin/bill.css">
@endsection

@section('content')
    {{--  table Bill  --}}
    <div class="bill">
        <p> บิล ค่าน้ำค่าไฟ </p>
        <div class="table-bg ">
            <table class="table table-bordered container ">
                <thead class="table-light">
                    <tr>
                        <th scope="col">เลขห้อง</th>
                        <th scope="col">สถานะการส่งบิล</th>
                        <th scope="col">สถานะการชำระเงิน</th>
                        <th scope="col"> ประวัติการชำระเงิน </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <div class="status-bill">
                                ยังไม่มีบิล
                            </div>
                        </td>
                        <td>
                            <div class="status-pay" onclick="showPay()">
                                ชำระเงินเรียบร้อย
                            </div>
                        </td>
                        <td>
                            <div onclick="additional()">รายละเอียดเพิ่มเติม</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{--  popup data history bill  --}}
    <div class=" data-bill" id="dataBill">
        <p> ประวัติการชำระเงิน </p>
        <div class="table-bg ">
            <table class="table table-bordered container ">
                <thead class="table-light">
                    <tr>
                        <th scope="col">วัน/เดือน/ปี</th>
                        <th scope="col">สถานะการชำระเงิน</th>
                        <th scope="col">หลักฐานการชำระเงิน</th>
                        <th scope="col"> ข้อมูลบิล </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td onclick="DataBills()"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="btns-sub-close ">
            <button type="reset" class="btn btn-danger" id="closePopup" onclick="closepopup()">ยกเลิก</button>
        </div>
    </div>

    <div class="payment-bill" id="Bills">
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
        <div class="btns-sub-close ">
            <button type="reset" class="btn btn-danger" id="closePopup" onclick="closepopup1()">ยกเลิก</button>
        </div>
    </div>

@endsection

@section('script')
    <script src="/js/admin/bill.js"></script>
@endsection
