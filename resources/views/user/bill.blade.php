@extends('layout_user')

@section('title', 'Bill')

@section('styles')
    <link rel="stylesheet" href="/css/user/bill.css">
@endsection

@section('content')
    <p class="name-page">ใบเสร็จชำระเงิน</p>

    <div class=" data-bill ">
        @foreach ($bills as $item)
            <p>ใบเสร็จชำระเงินค่าห้อง</p>
            <span class="mt-2"> ห้อง {{ $item->rooms->numroom }}</span><span class="mt-2"> ประจำเดือน
                {{ $item->created_at->translatedFormat('F') }} ปี {{ $item->created_at->year + 543 }} </span>
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
                        <td>{{ $item->beforeWM }}</td>
                        <td>{{ $item->afterWM }}</td>
                        <td>{{ $item->totalWM }}</td>
                        <td>{{ $item->priceWM }}</td>
                        <td>{{ $item->totalPriceWM }}</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">ค่าไฟ</th>
                        <td>{{ $item->beforeEVM }}</td>
                        <td>{{ $item->afterEVM }}</td>
                        <td>{{ $item->totalEV }}</td>
                        <td>{{ $item->priceEV }}</td>
                        <td>{{ $item->totalPriceEV }}</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">ค่าส่วนกลาง</th>
                        <td colspan="4"></td>
                        <td>{{ $item->CAMfee }}</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">ค่าห้อง</th>
                        <td colspan="4"></td>
                        <td>{{ $item->priceRoom }}</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row" colspan="5">ราคารวมทั้งหมด</th>
                        <td>{{ $item->totalAllPrice }}</td>
                    </tr>
                </tbody>
            </table>

            {{--  btn pay bill  --}}
            <div class="btns-pay mt-4">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#PayBill{{ $item->payments->id }}">ชำระเงิน</button>
            </div>
        @endforeach
    </div>


    {{--  model pay bill  --}}
    @foreach ($bills as $item )
    <form class="modal fade" id="PayBill{{ $item->payments->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true" method="POST" enctype="multipart/form-data"
        action="{{ route('user.updateBill', $item->payments->id) }}">>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-4" id="staticBackdropLabel">การชำระเงิน</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body m-5">
                    @csrf
                    @method('PUT')
                    <select class="form-select" id="TypePay" name=" typePayment">
                        <option selected>โปรดเลือกวิธีการชำระ...</option>
                        <option value="แบบชำระด้วยเงินสด">แบบชำระด้วยเงินสด</option>
                        <option value="แบบชำระด้วยการโอน">แบบชำระด้วยการโอน</option>
                    </select>
                    <div class="up-file mt-3" id="upFile">
                        <label class="form-label">โปรดอัพโหลดหลักฐานการชำระเงิน</label><br>
                        <img id="viewFile" width="120">
                        <input type="file" name="Image" class="form-control mt-3" id="inputFile" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">ยืนยันการชำระเงิน</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </form>
    @endforeach
@endsection

@section('script')
    <script src="/js/user/bill.js"></script>
@endsection
