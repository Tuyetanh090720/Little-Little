@extends('layouts.admins')
@section('edit-orders')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Sửa Khách hàng</h1>
        <ol class="breadcrumb mb-g4">
            <li class="breadcrumb-item active"><a href="{{route('admins.')}}">Trang chủ</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admins.customers.lists')}}">Khách hàng</a></li>
            <li class="breadcrumb-item">Sửa</li>
        </ol>
        <section class="content">
            <div class="container-fluid" id="edit">
                <form action="/admins/customers/edit/{{$customer->customerId}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="customerId">ID khách hàng</label>
                            <input type="text" name="customerId" class="form-control" id="customerId" value="{{$customer->customerId}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="customerName">Tên khách hàng</label>
                            <input type="text" name="customerName" class="form-control" id="customerName" value="{{$customer->customerName}}">
                        </div>
                        <div class="form-group">
                            <label for="customerPhone">Số điện thoại</label>
                            <input type="text" name="customerPhone" class="form-control" id="customerPhone" value="{{$customer->customerPhone}}">
                        </div>
                        <div class="form-group">
                            <label for="customerEmail">Email khách hàng</label>
                            <input type="text" name="customerEmail" class="form-control" id="customerEmail" value="{{$customer->customerEmail}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</main>
@endsection
