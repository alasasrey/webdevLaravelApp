@extends('base')
@section('title', 'Welcome Page')

<div>
    <div class="centered-div">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="float: left;"><strong>Student List</strong></h4>
                            <!-- Action btn for modal -->
                            <button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal"
                                data-bs-target="#addNewModal">
                                Add New Students
                            </button>
                        </div>

                        @if(Session("success"))
                            <span class="alert alert-success">
                                {{ session('success') }}
                            </span>
                        @endif

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">ID</th>
                                        <th style="text-align: center;">Name</th>
                                        <th style="text-align: center;">Age</th>
                                        <th style="text-align: center;">Gender</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $std)
                                        <tr>
                                            <th scope="row">{{ $std->id }}</th>
                                            <td>{{ $std->name }}</td>
                                            <td>{{ $std->age }}</td>
                                            <td>{{ $std->gender }}</td>
                                            <td style="width: 150px;">
                                                <a class="btn btn-primary"
                                                    href="{{ route('std.updateView', $std->id) }}">Edit</a>
                                                <a class="btn btn-danger"
                                                    href="{{ route('std.studentDelete', $std->id) }}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Modal component -->
        <div class=" modal fade" id="addNewModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Create New Student</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    </div>
                </div>
            </div>

        </div>