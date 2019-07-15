@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Channels</div>

                    <div class="card-body">

                            <table class="table table-hover">
                                <thead>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                </thead>
                                <tbody>
                                    @foreach($channels as $channel )

                                        <tr>
                                            <td>{{$channel->title}}</td>
                                            <td><a href="{{route('channels.edit',['$channel'=>$channel->id])}}" class="btn btn-xs btn-info">Edit</a></td>
                                            <td><a href="{{route('channels.destroy',['$channel'=>$channel->id])}}" class="btn btn-xs btn-danger">Delete</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        <a href="{{route('channels.create')}}" class="btn btn-xs btn-success">Create new channel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
