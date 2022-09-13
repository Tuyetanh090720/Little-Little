@extends('layouts.admins')
@section('add-events')
<main>
    <div class="container-fluid">
    <h1 class="mt-4">Thêm Sự kiện</h1>
            <ol class="breadcrumb mb-g4">
                <li class="breadcrumb-item active"><a href="{{route('admins.')}}">Trang chủ</a></li>
                <li class="breadcrumb-item active"><a href="{{route('admins.events.lists')}}">Sự kiện</a></li>
                <li class="breadcrumb-item">Thêm</li>
            </ol>
        <section class="content">
            <div class="container-fluid">
                <div class="card-body">
                <form action="/admins/events/add" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="eventName">Tên sự kiện</label>
                      <input type="text" class="form-control" name="eventName" id="eventName" required>
                    </div>
                    <div class="form-group">
                      <label for="start_at">Ngày bắt đầu</label>
                      <input type="text" class="form-control" name="start_at" id="start_at" required>
                    </div>
                    <div class="form-group">
                      <label for="end_at">Ngày kết thúc</label>
                      <input type="text" class="form-control" name="end_at" id="end_at" required>
                    </div>
                    <div class="form-group">
                      <label for="money">Số tiền</label>
                      <input type="text" class="form-control" name="money" id="money" required>
                    </div>
                    <div class="form-group">
                        <label for="eventDetail">Mô tả</label>
                        <input type="text" class="form-control" name="eventDetail" id="eventDetail" required>
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
                      <button class="btn btn-danger" type="submit" >Thêm</button>
                      </td>
                    </div>
                </form>
              </div>
          </div>
        </section>
    </div>
</main>
@endsection
