@extends('main')
@section('content')
    <div id="title-sol" style="text-align:center; border-radius: 10px 10px 0 0;">
        <h3>Hướng dẫn cài đặt maple cho hệ thống</h3>
    </div>

    <div style="text-align:left; padding-left: 20px;" >
        <ul>
            <li>Cài đặt gói phần mềm MAPLE vào máy</li>
            <li>Tìm đường dẫn tới file cmaple trên máy tính (Windows và MacOS đều có file này) </li>
            <li>Set đường dẫn tới file cmaple vào biến <b>MAPLE_DIR</b> trong file <b>.env</b> theo cú pháp: <b>\path\to\file\cmaple.exe</b> </li>
            <li>Chạy chương trình</li>
        </ul>
    </div>

@endsection