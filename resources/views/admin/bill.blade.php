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

    <div class="" id="Bills">
        
    </div>

@endsection

@section('script')
    <script src="/js/admin/bill.js"></script>
@endsection
