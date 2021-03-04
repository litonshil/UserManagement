@extends('layouts.app')

@section('content')
    <main class="mt-4">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header font-weight-bold text-lg">Registration Form</div>
                        <div class="card-body">
                            <form class="bg-light" name="my-form" action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="name"
                                        class="col-md-4 col-form-label font-weight-bold text-md-right">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" name="name">
                                        @error('name')
                                            <div class="error text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror                                   
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <label for="username"
                                        class="col-md-4 col-form-label font-weight-bold text-md-right">Username</label>
                                    <div class="col-md-6">
                                        <input type="text" id="username" class="form-control" name="username">
                                        @error('username')
                                            <div class="error text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="usertype"
                                        class="col-md-4 col-form-label font-weight-bold text-md-right">User Type</label>
                                    <div class="col-md-6">
                                        <input type="text" id="usertype" class="form-control" name="usertype">
                                        @error('usertype')
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
                                        <input type="email" id="email" class="form-control" name="email">
                                        @error('email')
                                            <div class="error text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-right font-weight-bold">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="email" class="form-control" name="password">
                                        @error('password')
                                            <div class="error text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password_confirmation"
                                        class="col-md-4 col-form-label text-md-right font-weight-bold">Confirm
                                        Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password_confirmation" class="form-control"
                                            name="password_confirmation">
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
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
