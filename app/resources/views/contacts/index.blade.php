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
                                    <a href="{{ route('contacts.create') }}" class="btn btn-success"><i
                                            class="bi bi-plus-square"></i> Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">


                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col">
                                            @includeUnless(empty($companies_data), 'contacts._company-selection')
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Search..."
                                                    aria-label="Search..." aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary mx-0" type="button">
                                                        <i class="bi bi-arrow-clockwise"></i>
                                                    </button>
                                                    <button class="btn btn-outline-secondary" type="button"
                                                        id="button-addon2">
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
                                    @forelse ($data as $key => $value)

                                        @include('contacts._contact')
                                    @empty
                                        @include('contacts._empty')
                                    @endforelse
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