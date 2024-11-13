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
                        <th scope="col">สถานะการค้างชำระ</th>
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
                            <div class="status-pay" >
                                ชำระเงินเรียบร้อย
                            </div>
                        </td>
                        <td>
                            <div type="button" class="btn " data-bs-toggle="modal" data-bs-target="#dataBills">
                                รายละเอียดเพิ่มเติม
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    {{--  popup data history bill  --}}

    <div class="modal  fade" id="dataBills" tabindex="-1" aria-labelledby="dataBill" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ประวัติการชำระเงิน</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-bg ">
                        <table class="table table-bordered container border-dark ">
                            <thead class="table border-dark ">
                                <tr>
                                    <th scope="col">ประจำเดือนเดือน/ปี</th>
                                    <th scope="col">สถานะการชำระเงิน</th>
                                    <th scope="col">หลักฐานการชำระเงิน</th>
                                    <th scope="col"> ข้อมูลบิล </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td onclick="DataPayment()"></td>
                                    <td type="button" class="btn " data-bs-toggle="modal" data-bs-target="#ShowBill"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </div>


    {{--  popup data Payment  --}}

    <div class="modal fade" id="ShowBill" tabindex="-1" aria-labelledby="Bill" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ใบเสร็จชำระเงินค่าห้อง</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <p class="mt-2"> ห้อง </p>
                    <p class="mt-2"> ประจำเดือน    ปี </p>
                    <div class="table-bg ">
                        <table class="table table-bordered ">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('script')
    <script src="/js/admin/bill.js"></script>
@endsection
