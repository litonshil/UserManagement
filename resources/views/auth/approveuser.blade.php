@extends('layouts.app')

@section('content')
    <main class="mt-4">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header font-weight-bold text-lg">User Approval Form</div>
                        <div class="card-body">
                            {{-- <form action="{{ route('approveuser') }}" method="post">
                                @csrf --}}
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Usertype</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $item)
                                            <tr>
                                                <td scope="">{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->usertype }}</td>
                                                <td>
                                                    @if($item->approvestatus=='0')
                                                        {{"Pending"}}
                                                    @endif
                                                </td>
                                                <td>
                                                    <a class="btn" href="{{route('approved',['email'=>$item->email])}}">Approve</a>
                                                    <a class="btn" href="{{route('decline',['email'=>$item->email])}}">Decline</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            {{-- </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

<!--
    <div class="form-group row">
                                    <label for="email"
                                        class="col-md-4 col-form-label font-weight-bold text-md-right">Email</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="userapprove" onclick="findEmail()">
                                            <option>Select an user email</option>
                                            foreach ($user as $item)
                                                <option>{ $item->email }}</option>
                                            endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <script  type="text/javascript">
                                    function findEmail() {
                                        var x = document.getElementById("userapprove").value;
                                        console.log(x);
                                    }
                                </script>

                                <div class="form-group row">
                                    <label for="name"
                                        class="col-md-4 col-form-label font-weight-bold text-md-right">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" name="name" value="">
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
-->
