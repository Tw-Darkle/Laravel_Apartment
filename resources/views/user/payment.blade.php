@extends('layout_user')

@section('title,payment')
@endsection

@section('styles')
    <link rel="stylesheet" href="/css/user/payment.css">
@endsection

@section('content')
    <p class="name-page">ประวัติการชำระเงิน</p>

    <div class="table-bill">
        <div class="table-bg ">
            <table class="table table-bordered container ">
                <thead class="table-light">
                    <tr>
                        <th scope="col">เดือน</th>
                        <th scope="col">สถานะการชำระเงิน</th>
                        <th scope="col"> ข้อมูลบิลเพิ่มเติม </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <div class="status-pay">
                                ชำระเงินเรียบร้อย
                            </div>
                        </td>
                        <td>
                            <div onclick="additional()">เพิ่มเติม</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{--  peyment history   --}}
    <div class="payment-history" id="">
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
        
        <div class=" mt-2 img-data-pay">
            หลักฐานการชำระเงิน : โอนจ่าย    
            <img src="" alt=""  width="150">
        </div>
        <button type="button" class="btn-close" aria-label="Close"></button>
    </div>
@endsection

@section('script')
    <script src="/js/user/payment.js"></script>
@endsection
