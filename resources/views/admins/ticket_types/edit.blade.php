@extends('layouts.admins')
@section('edit-ticket-types')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Danh Sách Thành Viên</h1>
        <ol class="breadcrumb mb-g4">
            <li class="breadcrumb-item active"><a href="{{route('admins.')}}">Trang chủ</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admins.ticket_types.lists')}}">Thành viên</a></li>
            <li class="breadcrumb-item">Danh sách</li>
        </ol>
        <div id="main">
            <div class="container">
                <h2>Sửa thành viên</h2>
                <!-- Start of Form -->
                <form action="/admins/ticket_types/edit/{{$ticketType->ticketTypeId}}" method="POST"  >
                    @csrf
                    <div class="form-group">
                        <label for="ticketTypeId">ID loại vé</label>
                        <input type="text" class="form-control" name="ticketTypeId" id="ticketTypeId" value="{{$ticketType->ticketTypeId}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="ticketTypeName">Tên loại vé</label>
                        <input type="text" class="form-control" name="ticketTypeName" id="ticketTypeName" value="{{$ticketType->ticketTypeName}}">
                    </div>
                    <div class="form-group">
                        <label for="ticketTypeHeight">Chiều cao</label>
                        <input type="text" class="form-control" name="ticketTypeHeight" id="ticketTypeHeight" value="{{$ticketType->ticketTypeHeight}}">
                    </div>
                    <div class="form-group">
                        <label for="weekdays">Thứ</label>
                        <input type="text" class="form-control" name="weekdays" id="weekdays" value="{{$ticketType->weekdays}}">
                    </div>
                    <div class="form-group">
                        <label for="money">Số tiền</label>
                        <input type="text" class="form-control" name="money" id="money" value="{{$ticketType->money}}">
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
