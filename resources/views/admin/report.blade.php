@extends('layout_admin')
@section('title', 'report')

@section('styles')
    <link rel="stylesheet" href="/css/admin/report.css">
@endsection

@section('content')
    <div class="report">
        <p> รับเรื่องเเจ้งซ่อม </p>
        <div class="table-bg ">
            <table class="table table-bordered container ">
                <thead class="table-light">
                    <tr>
                        <th scope="col">วัน/เดือน/ปี</th>
                        <th scope="col">เลขห้อง</th>
                        <th scope="col">ข้อมูลการเเจ้ง</th>
                        <th scope="col"> รายละเอียดเพิ่มเติม </th>
                        <th scope="col">สถานะการซ่อม</th>
                    </tr>
                </thead>
                @foreach ($reports as $item)
                    <tbody>
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($item->created_at)->addYears(543)->format('d/m/Y') }}</td>
                            <td>{{ $item->Numroom }}</td>
                            <td>{{ $item->TitleReport }}</td>
                            <td type="btn" data-bs-toggle="modal" data-bs-target="#showDataReport{{ $item->id }}">
                                ข้อมูล</td>
                            <td type="btn" data-bs-toggle="modal" data-bs-target="#statusReport">
                                {{ $item->StatusReport }}
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>

    {{--  popup data report  --}}
    @foreach ($reports as $item)
        <form class="modal fade" id="showDataReport{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" method="POST"
            action="{{ route('update.report', $item->id) }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">รายละเอียดการเเจ้งซ่อม</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        @method('PUT')
                        <div class="mb-3  box-text">
                            <textarea class="form-control container" id="exampleFormControlTextarea1" rows="5" readonly>{{ $item->DetailReport }}</textarea>
                        </div>
                        <hr>
                        <select class="form-select container " name="statusReport">
                            <option selected>โปรดเลือกสถานะการเเจ้งซ่อม...</option>
                            <option value="รับเรื่องการเเจ้งซ่อม">รับเรื่องการเเจ้งซ่อม</option>
                            <option value="รอดำเนินการซ่อม">รอดำเนินการซ่อม</option>
                            <option value="การซ่อมเสร็จเรียบร้อย">การซ่อมเสร็จเรียบร้อย</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="บันทึก" class="btn btn-success">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </form>
    @endforeach

@endsection

@section('script')
    <script src="/js/admin/report.js"></script>
@endsection
