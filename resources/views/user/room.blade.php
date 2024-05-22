@extends('layout_user')

@section('title,room')
@endsection

@section('styles')
    <link rel="stylesheet" href="/css/user/room.css">
@endsection

@section('content')
    <p class="name-page">สถานะห้อง</p>

    <div class="status-room">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" color="#dc3545"
                class="bi bi-dot" viewBox="0 0 16 16">
                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
            </svg>
            <span> มีคนเข้าพัก</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" color="#198754"
                class="bi bi-dot" viewBox="0 0 16 16">
                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
            </svg>
            <span> ห้องว่าง </span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" color="#ffc107"
                class="bi bi-dot" viewBox="0 0 16 16">
                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
            </svg>
            <span> ติดจอง </span>
        </div>
    </div>

    <div class="card-data-room ">
        <div class="card">
            <div class="card-header">
                ห้อง
            </div>
            <div class="card-body ">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" color="#198754"
                    class="bi bi-door-open" viewBox="0 0 16 16">
                    <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1" />
                    <path
                        d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z" />
                </svg>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/js/user/room.js"></script>
@endsection
