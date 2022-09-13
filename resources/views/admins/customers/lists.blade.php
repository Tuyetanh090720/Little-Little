@extends('layouts.admins')
@section('lists-customers')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Danh Sách Khách hàng</h1>
        <ol class="breadcrumb mb-g4">
            <li class="breadcrumb-item active"><a href="{{route('admins.')}}">Trang chủ</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admins.customers.lists')}}">Khách hàng</a></li>
            <li class="breadcrumb-item">Danh sách</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Danh sách khách hàng
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>customerId</th>
                                <th>customerName</th>
                                <th>customerPhone</th>
                                <th>customerEmail</th>
                                <th>created_at</th>
                                <th>updated_at</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($customersList))
                                @foreach ($customersList as $item)
                                <tr>
                                    <td>{{$item->customerId}}</td>
                                    <td>{{$item->customerName}}</td>
                                    <td> {{$item->customerPhone}}</td>
                                    <td>{{$item->customerEmail}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td><a href="/admins/customers/edit/{{$item->customerId}}">Edit</a></td>
                                    <td><a href="/admins/customers/delete/{{$item->customerId}}">Delete</a></td>
                                </tr>
                                @endforeach
                            @else
                            <tr>
                                <td colspan="4">Không có khách hàng</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
