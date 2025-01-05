@extends('layout_admin')
@section('title', 'showMeter')

@section('styles')
    <link rel="stylesheet" href="/css/admin/showMeter.css">
@endsection

@section('content')

    <div class="bill-meter container">
        <p>ใบเสร็จชำระเงินค่าห้อง</p>
        <p class="mt-2"> ห้อง {{ $meters->rooms->numroom }} </p>
        <p class="mt-2"> ประจำเดือน {{ $meters->created_at->translatedFormat('F') }} ปี
            {{ $meters->created_at->year + 543 }}</p>
        <form class="table-bg " method="POST" action="{{ route('bills.store', ['id' => $meters->id]) }}">
            @csrf
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
                        <td><input type="text" name="beforeWM" readonly  value="{{ $meters->beforeWM }}"></td>
                        <td><input type="text" name="afterWM" readonly  value="{{ $meters->afterWM }}"></td>
                        <td><input type="text" name="totalWM" readonly  value="{{ $meters->totalWM }}"></td>
                        <td><input type="text" name="priceWM" readonly  value="{{ $dataPriceRoom->priceWater }}">
                        </td>
                        <td><input type="text" name="totalPriceWM" readonly required value="{{ $totalPriceWM }}"></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">ค่าไฟ</th>
                        <td><input type="text" name="beforeEV" readonly  value="{{ $meters->beforeEVM }}"></td>
                        <td><input type="text" name="afterEV" readonly  value="{{ $meters->afterEVM }}"></td>
                        <td><input type="text" name="totalEV" readonly  value="{{ $meters->totalEV }}"></td>
                        <td><input type="text" name="priceEV" readonly  value="{{ $dataPriceRoom->priceEV }}">
                        </td>
                        <td><input type="text" name="totalPriceEV" readonly required value="{{ $totalPriceEV }}"></td>

                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">ค่าห้อง</th>
                        <td colspan="4"></td>
                        <td><input type="text" name="priceRoom" readonly  value="{{ $priceRoom }}"></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">ค่าส่วนกลาง</th>
                        <td colspan="4"></td>
                        <td><input type="text" name="CAMfee" readonly  value="{{ $dataPriceRoom->CAMfee }}">
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row" colspan="5">ราคารวมทั้งหมด</th>
                        <td><input type="text" name="totalAllPrice" readonly required value="{{ $totalAllPrice }}">
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="btns-show">
                <input type="submit" value="บันทึก" class="btn btn-success">
            </div>
        </form>
    </div>



@endsection

@section('script')
    <script src="/js/admin/showMeter.js"></script>
@endsection
