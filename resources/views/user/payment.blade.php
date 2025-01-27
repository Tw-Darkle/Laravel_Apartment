@extends('layout_user')

@section('title', 'HistoryPayment')

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
                @foreach ($Datas as $item)
                    <tbody>
                        <tr>
                            <td>เดือน {{ $item->created_at->translatedFormat('F') }} ปี {{ $item->created_at->year + 543 }}
                            </td>
                            <td>{{ $item->payments->status_payment }}</td>
                            <td> <button class="btn "
                                    data-bs-toggle="modal"data-bs-target="#ShowBill{{ $item->id }}">เพิ่มเติม</button>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>

    {{--  peyment history   --}}
    @foreach ($Datas as $item)
        <div class="modal fade " id="ShowBill{{ $item->id }}" tabindex="-1" aria-labelledby="Bill" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ใบเสร็จชำระเงินค่าห้อง</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body container">

                        <p class="mt-2"> ห้อง {{ $item->rooms->numroom }}</p>
                        <p class="mt-2"> ประจำเดือน {{ $item->created_at->translatedFormat('F') }} ปี
                            {{ $item->created_at->year + 543 }}</p>
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
                        </div>
                    </div>

                    <hr>
                    <div class=" mt-2 img-data-pay">
                        หลักฐานการชำระเงิน : {{ $item->payments->type_payment }}
                        <img src="{{ asset('uploads/' . $item->payments->proof_payment) }}"
                            alt="{{ $item->payments->type_payment }}" width="200">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection

@section('script')
    <script src="/js/user/payment.js"></script>
@endsection
