@extends('layouts.admins')
@section('main')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Trang chủ</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Trang chủ</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card overview-item--c4 text-white mb-4">
                    <div class="card-body">KHÁCH HÀNG</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('admins.customers.lists')}}">Chi tiết</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card overview-item--c1 text-white mb-4">
                    <div class="card-body">LIÊN HỆ</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('admins.contacts.lists')}}">Chi tiết</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card overview-item--c2 text-white mb-4">
                    <div class="card-body">ĐƠN MUA VÉ</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('admins.orders.lists')}}">Chi tiết</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card overview-item--c3 text-white mb-4">
                    <div class="card-body">LOẠI VÉ</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('admins.ticket_types.lists')}}">Chi tiết</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card overview-item--c3 text-white mb-4">
                    <div class="card-body">SỰ KIỆN</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('admins.events.lists')}}">Chi tiết</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
