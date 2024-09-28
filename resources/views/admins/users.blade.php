@extends('admins.adLayouts')
@section('title','AdminUsers')
@section('content')

    <div class="user_admin">
        <div class="content">
            <div class="container">


            <table class="table table-hover table-striped table-active">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>username</td>
                    <td>email</td>
                    <td>phone</td>
                    <td>date</td>
                    <td>Controllers</td>
                </tr>
                </thead>
                <tbody>

                    @foreach($data as $item)
                        <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->username}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger"><a href="/delete?modal_name=users&id={{$item->id}}">Delete</a> </button>
                        </td>
                        </tr>
                    @endforeach


                </tbody>








            </table>
            </div>

        </div>

    </div>

@endsection
