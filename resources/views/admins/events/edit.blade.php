@extends('layouts.admins')
@section('edit-events')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Danh Sách Thành Viên</h1>
        <ol class="breadcrumb mb-g4">
            <li class="breadcrumb-item active"><a href="{{route('admins.')}}">Trang chủ</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admins.events.lists')}}">Thành viên</a></li>
            <li class="breadcrumb-item">Danh sách</li>
        </ol>
        <div id="main">
            <div class="container">
                <h2>Sửa thành viên</h2>
                <!-- Start of Form -->
                <form action="/admins/events/edit/{{$event->eventId}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="eventName">Tên sự kiện</label>
                        <input type="text" class="form-control" name="eventName" id="eventName" value="{{$event->eventName}}" required>
                    </div>
                    <div class="form-group">
                        <label for="start_at">Ngày bắt đầu</label>
                        <input type="text" class="form-control" name="start_at" id="start_at" value="{{$event->start_at}}" required>
                    </div>
                    <div class="form-group">
                        <label for="end_at">Ngày kết thúc</label>
                        <input type="text" class="form-control" name="end_at" id="end_at" value="{{$event->end_at}}" required>
                    </div>
                    <div class="form-group">
                        <label for="money">Số tiền</label>
                        <input type="text" class="form-control" name="money" id="money" value="{{$event->money}}" required>
                    </div>
                    <div class="form-group">
                        <label for="eventDetail">Mô tả</label>
                        <input type="text" class="form-control" name="eventDetail" value="{{$event->eventDetail}}" id="eventDetail" required>
                    </div>
                    <div class="form-group">
                        <label for="img">Chọn ảnh</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="img">
                            </div>
                        </div>
                    </div>
                    <div class="input-group-btn">
                        <td style = "padding-left: 0;">
                            <button class="btn btn-danger" name="editMember" type="submit" >Sửa</button>
                        </td>
                    </div>
                </form>
                <!-- End Form -->
                <br/>
            </div>
        </div>
    </div>
</main>
@endsection
