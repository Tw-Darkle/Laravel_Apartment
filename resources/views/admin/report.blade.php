@extends('layout_admin')
@section('title', 'report')

@section('styles')
    <link rel="stylesheet" href="/css/admin/report.css">
@endsection

@section('content')
    <div class="report">
        <p> เรื่องเเจ้งซ่อม </p>
        <div class="table-bg ">
            <table class="table table-bordered container ">
                <thead class="table-light">
                    <tr>
                        <th scope="col">เลขห้อง</th>
                        <th scope="col">ข้อมูลการเเจ้ง</th>
                        <th scope="col"> รายละเอียดการเเจ้ง </th>
                        <th scope="col">สถานะการซ่อม</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td type="btn" data-bs-toggle="modal" data-bs-target="#showDataReport">ข้อมูล</td>
                        <td>
                            <div class="status-report">
                                รอดำเนินการซ่อมซ่อม
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{--  popup data report  --}}
    <div class="modal fade" id="showDataReport" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">รายละเอียดการเเจ้งซ่อม</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('script')
    <script src="/js/admin/report.js"></script>
@endsection
