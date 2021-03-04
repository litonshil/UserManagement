@extends('layouts.app')

@section('content')
    <main class="mt-4">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header font-weight-bold text-lg">User Approval Form</div>
                        <div class="card-body">
                            <form class="bg-light" name="my-form" action="{{route('approveuser')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="email"
                                        class="col-md-4 col-form-label font-weight-bold text-md-right">Email</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="userapprove">
                                            @foreach ($user as $item)
                                                <option>{{ $item->email }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name"
                                        class="col-md-4 col-form-label font-weight-bold text-md-right">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" name="name" value="{{}}">
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="usertype"
                                        class="col-md-4 col-form-label font-weight-bold text-md-right">User Type</label>
                                    <div class="col-md-6">
                                        <input type="text" id="usertype" class="form-control" name="usertype">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="email"
                                        class="col-md-4 col-form-label font-weight-bold text-md-right">Status</label>
                                    <div class="col-md-6">
                                        <input type="email" id="email" class="form-control" name="email">
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Approved
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
