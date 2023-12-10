@extends('admain/layouts/app')
@section('title')
    categories
@endsection
@section('content')
<div class="container">
    <div class="table p-3">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Settings</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $categorie)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$categorie->name}}</td>
                    <td><img src="{{$categorie->photo}}"></td>
                    <td>
                        <a href="http://" class="btn btn-success">show</a>
                        <a href="http://" class="btn btn-warning">edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$categories->links()}}<!--عرض البجنيت الي هوه كل 5 في صفحه-->
    </div>
</div>
@endsection
