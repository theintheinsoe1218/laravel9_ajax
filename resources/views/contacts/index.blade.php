@extends('layouts.master')

@section('title','contact')

@section('navbar')
    @parent
@endsection

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-10 mx-auto d-flex justify-content-between align-item-center">
                <h1>All Contacts</h1>
                <button class="btn btn-dark">Add Contact</button>
            </div>
            <div class="col-10 mx-auto mt-3">
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ Carbon\Carbon::parse($contact->created_at)->format('d-m-y') }}</td>
                                <td>
                                    <a href="#" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
