@extends('layouts.admins')
@section('lists-contacts')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Danh Sách Liên hệ</h1>
        <ol class="breadcrumb mb-g4">
            <li class="breadcrumb-item active"><a href="{{route('admins.')}}">Trang chủ</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admins.contacts.lists')}}">Liên hệ</a></li>
            <li class="breadcrumb-item">Danh sách</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Danh sách liên hệ
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>contactId</th>
                                <th>contactName</th>
                                <th>contactPhone</th>
                                <th>contactEmail</th>
                                <th>contactAddress</th>
                                <th>contactMessage</th>
                                <th>contactStatus</th>
                                <th>created_at</th>
                                <th>updated_at</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($contactsList))
                                @foreach ($contactsList as $item)
                                <tr>
                                    <td>{{$item->contactId}}</td>
                                    <td>{{$item->contactName}}</td>
                                    <td> {{$item->contactPhone}}</td>
                                    <td>{{$item->contactEmail}}</td>
                                    <td>{{$item->contactAddress}}</td>
                                    <td>{{$item->contactMessage}}</td>
                                    <td>{{$item->contactStatus}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td><a href="/admins/contacts/edit/{{$item->contactId}}">Edit</a></td>
                                    <td><a href="/admins/contacts/delete/{{$item->contactId}}">Delete</a></td>
                                </tr>
                                @endforeach
                            @else
                            <tr>
                                <td colspan="4">Không có liên hệ</td>
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
