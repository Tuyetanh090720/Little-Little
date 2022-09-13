@extends('layouts.admins')
@section('lists-ticket-types')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Danh Sách Loại Vé</h1>
        <ol class="breadcrumb mb-g4">
            <li class="breadcrumb-item active"><a href="{{route('admins.')}}">Trang chủ</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admins.ticket_types.lists')}}">Loại vé</a></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Danh sách loại vé
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ticketTypeId</th>
                                <th>ticketTypeName</th>
                                <th>ticketTypeHeight</th>
                                <th>weekdays</th>
                                <th>money</th>
                                <th>created_at</th>
                                <th>updated_at</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($ticketTypesList))
                                    @foreach ($ticketTypesList as $item)
                                    <tr>
                                        <td>{{$item->ticketTypeId}}</td>
                                        <td>{{$item->ticketTypeName}}</td>
                                        <td> {{$item->ticketTypeHeight}}</td>
                                        <td>{{$item->weekdays}}</td>
                                        <td>{{$item->money}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->updated_at}}</td>
                                        <td><a href="/admins/ticket_types/edit/{{$item->ticketTypeId}}">Edit</a></td>
                                        <td><a href="/admins/ticket_types/delete/{{$item->ticketTypeId}}">Delete</a></td>
                                    </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <td colspan="4">Không có loại vé</td>
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
