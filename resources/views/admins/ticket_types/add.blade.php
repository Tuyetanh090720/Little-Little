@extends('layouts.admins')
@section('add-ticket-types')
<main>
    <div class="container-fluid">
    <h1 class="mt-4">Thêm Loại vé</h1>
            <ol class="breadcrumb mb-g4">
                <li class="breadcrumb-item active"><a href="{{route('admins.')}}">Trang chủ</a></li>
                <li class="breadcrumb-item active"><a href="{{route('admins.ticket_types.lists')}}">Loại vé</a></li>
                <li class="breadcrumb-item">Thêm</li>
            </ol>
        <section class="content">
            <div class="container-fluid">
                <div class="card-body">
                <form action="/admins/ticket_types/add" method="POST"  >
                    @csrf
                    <div class="form-group">
                      <label for="ticketTypeName">Tên loại vé</label>
                      <input type="text" class="form-control" name="ticketTypeName" id="ticketTypeName">
                    </div>
                    <div class="form-group">
                      <label for="ticketTypeHeight">Chiều cao</label>
                      <input type="text" class="form-control" name="ticketTypeHeight" id="ticketTypeHeight">
                    </div>
                    <div class="form-group">
                      <label for="weekdays">Thứ</label>
                      <input type="text" class="form-control" name="weekdays" id="weekdays">
                    </div>
                    <div class="form-group">
                      <label for="money">Số tiền</label>
                      <input type="text" class="form-control" name="money" id="money">
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
