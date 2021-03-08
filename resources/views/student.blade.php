@extends('layouts.app')

@section('content')
    <main class="mt-4">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header font-weight-bold text-lg">Student Registration</div>
                        <div class="card-body">
                            <form class="bg-light" name="my-form" action="{{ route('student.create') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="studentid"
                                        class="col-md-4 col-form-label font-weight-bold text-md-right">Student ID</label>
                                    <div class="col-md-6">
                                        <input type="text" id="studentid" class="form-control" name="studentid" value="">
                                        @error('studentid')
                                            <div class="error text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="studentname"
                                        class="col-md-4 col-form-label font-weight-bold text-md-right">Student Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="studentname" class="form-control" name="studentname"
                                            value="">
                                        @error('studentname')
                                            <div class="error text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fathername"
                                        class="col-md-4 col-form-label font-weight-bold text-md-right">Father Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="fathername" class="form-control" name="fathername" value="">
                                        @error('fathername')
                                            <div class="error text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mothername"
                                        class="col-md-4 col-form-label font-weight-bold text-md-right">Mother Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="mothername" class="form-control" name="mothername" value="">
                                        @error('mothername')
                                            <div class="error text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="birthdate"
                                        class="col-md-4 col-form-label font-weight-bold text-md-right">Birth Date</label>
                                    <div class="col-md-6">
                                        <input type="date" id="birthdate" class="form-control" name="birthdate" value="">
                                        @error('birthdate')
                                            <div class="error text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="department"
                                        class="col-md-4 col-form-label font-weight-bold text-md-right">Department</label>
                                    <div class="col-md-6">
                                        <input type="text" id="department" class="form-control" name="department" value="">
                                        @error('department')
                                            <div class="error text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email"
                                        class="col-md-4 col-form-label font-weight-bold text-md-right">Email</label>
                                    <div class="col-md-6">
                                        <input type="email" id="email" class="form-control" name="email" value="">
                                        @error('email')
                                            <div class="error text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="gender"
                                        class="col-md-4 col-form-label font-weight-bold text-md-right">Gender
                                    </label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="Male" id="male">
                                        <label class="form-check-label" for="male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Female" name="gender"
                                            id="female">
                                        <label class="form-check-label" for="female">
                                            Female
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-4 row">
                                    <button type="submit" class="btn btn-primary btn-group mr-2">
                                        Add
                                    </button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>

@endsection
