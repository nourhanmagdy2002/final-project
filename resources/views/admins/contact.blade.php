@extends('admins.adLayouts')
@section('title','AdminUsers')
@section('content')

    <div class="product_admin">
        <div class="Product_content">
            <div class="container">

                <table class="table table-hover table-striped table-active">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>User_id</td>
                        <td>email</td>
                        <td>title</td>
                        <td>info</td>
                        <td>Date</td>
                        <td>Controllers</td>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($contacts as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->user_id}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->info}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger"><a href="/delete?modal_name=contacts&id={{$item->id}}">Delete</a> </button>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>








                </table>
            </div>

        </div>

    </div>

@endsection
