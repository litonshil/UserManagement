@extends('layouts.app')

@section('content')
    <main class="mt-4">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header font-weight-bold text-lg">Login Form</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="row text-danger">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form class="bg-light" name="my-form" action="{{ route('login') }}" method="post">

                                @csrf
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
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
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
