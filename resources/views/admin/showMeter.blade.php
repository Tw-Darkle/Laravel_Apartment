@extends('layout_admin')
@section('title', 'showMeter')

@section('styles')
    <link rel="stylesheet" href="/css/admin/showMeter.css">
@endsection

@section('content')

    <div class="bill-meter container">
        <p>ใบเสร็จชำระเงินค่าห้อง</p>
        <p class="mt-2"> ห้อง </p>
        <p class="mt-2"> ประจำเดือน ปี </p>
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



@endsection

@section('script')
    <script src="/js/admin/showMeter.js"></script>
@endsection
