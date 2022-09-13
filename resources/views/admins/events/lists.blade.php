@extends('layouts.admins')
@section('lists-events')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Danh Sách Sự kiện</h1>
        <ol class="breadcrumb mb-g4">
            <li class="breadcrumb-item active"><a href="{{route('admins.')}}">Trang chủ</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admins.events.lists')}}">Sự kiện</a></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Danh sách sự kiện
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>eventId</th>
                                <th>eventName</th>
                                <th>start_at</th>
                                <th>end_at</th>
                                <th>money</th>
                                <th>eventDetail</th>
                                <th>img</th>
                                <th>created_at</th>
                                <th>updated_at</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($eventsList))
                                    @foreach ($eventsList as $item)
                                    <tr>
                                        <td>{{$item->eventId}}</td>
                                        <td>{{$item->eventName}}</td>
                                        <td> {{$item->start_at}}</td>
                                        <td>{{$item->end_at}}</td>
                                        <td>{{$item->money}}</td>
                                        <td>{{$item->eventDetail}}</td>
                                        <td>
                                            <img width="100" src="{!! asset("storage/img/$item->eventId.jpg") !!}">
                                        </td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->updated_at}}</td>
                                        <td><a href="/admins/events/edit/{{$item->eventId}}">Edit</a></td>
                                        <td><a href="/admins/events/delete/{{$item->eventId}}">Delete</a></td>
                                    </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <td colspan="4">Không có sự kiện</td>
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
