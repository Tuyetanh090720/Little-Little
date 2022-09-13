@extends('layouts.admins')
@section('edit-contacts')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Sửa Khách hàng</h1>
        <ol class="breadcrumb mb-g4">
            <li class="breadcrumb-item active"><a href="{{route('admins.')}}">Trang chủ</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admins.contacts.lists')}}">Liên hệ</a></li>
            <li class="breadcrumb-item">Sửa</li>
        </ol>
        <section class="content">
            <div class="container-fluid" id="edit">
                <form action="/admins/contacts/edit/{{$contact->contactId}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="contactId">ID liên hệ</label>
                            <input type="text" name="contactId" class="form-control" id="contactId" value="{{$contact->contactId}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="contactName">Tên liên hệ</label>
                            <input type="text" name="contactName" class="form-control" id="contactName" value="{{$contact->contactName}}">
                        </div>
                        <div class="form-group">
                            <label for="contactPhone">Số điện thoại</label>
                            <input type="text" name="contactPhone" class="form-control" id="contactPhone" value="{{$contact->contactPhone}}">
                        </div>
                        <div class="form-group">
                            <label for="contactEmail">Email khách hàng</label>
                            <input type="text" name="contactEmail" class="form-control" id="contactEmail" value="{{$contact->contactEmail}}">
                        </div>
                        <div class="form-group">
                            <label for="contactAddress">Địa chỉ khách hàng</label>
                            <input type="text" name="contactAddress" class="form-control" id="contactAddress" value="{{$contact->contactAddress}}">
                        </div><div class="form-group">
                            <label for="contactMessage">Lời nhắn khách hàng</label>
                            <input type="text" name="contactMessage" class="form-control" id="contactMessage" value="{{$contact->contactMessage}}">
                        </div><div class="form-group">
                            <label for="contactStatus">Trạng thái liên hệ</label>
                            <input type="text" name="contactStatus" class="form-control" id="contactStatus" value="{{$contact->contactStatus}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</main>
@endsection
