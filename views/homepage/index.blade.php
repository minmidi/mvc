@extends('layout.')   
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">

                <th>ID</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Price</th>
                <th>Description</th>
            </thead>
            <tbody>
                @foreach($listItem as $pro)
                    <tr>
                    <td>{{ $pro->id }}</td>
                    <td>{{ $pro->name }}</td>
                    <td>{{ $pro->slug }}</td>
                    <td>{{ $pro->price }}</td>
                    <td>{{ $pro->description }}</td>
                    </tr>
                @endforeach
            </tbody>
    </table>
