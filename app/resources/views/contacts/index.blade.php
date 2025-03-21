@extends('layouts.main')
@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-title m-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="m-0">All Contacts</h4>
                                <div class="m-0">
                                    <a href="{{ route('contacts.create') }}" class="btn btn-success"><i class="bi bi-plus-square"></i> Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col">
                                            <select class="form-select">
                                                <option value="" selected>All Companies</option>
                                                <option value="1">Company One</option>
                                                <option value="2">Company Two</option>
                                                <option value="3">Company Three</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary mx-0" type="button">
                                                        <i class="bi bi-arrow-clockwise"></i>
                                                    </button>
                                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                                        <i class="bi bi-search-heart"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Gender</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Phone</th>
                                        <th class="text-center">Company</th>
                                        <td class="text-center">Actions</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($data as $key => $value)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $value['name'] }}</td>
                                            <td>{{ $value['gender'] }}</td>
                                            <td>{{ $value['email'] }}</td>
                                            <td>{{ $value['phone'] }}</td>
                                            <td>{{ $value['company'] }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('contacts.show', $key) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="bi bi-eye-fill"></i></a>
                                                <a href="form.html" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                                <a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?')"><i class="bi bi-x-circle"></i></a>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <nav class="mt-4">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection