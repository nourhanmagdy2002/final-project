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
                        <td>images</td>
                        <td>name</td>
                        <td>info</td>
                        <td>price</td>
                        <td>Controllers</td>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($products as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->images}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->info}}</td>
                            <td>{{$item->price}}</td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger"><a href="/delete?modal_name=products&id={{$item->id}}">Delete</a> </button>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>








                </table>
            </div>

        </div>

    </div>

@endsection
