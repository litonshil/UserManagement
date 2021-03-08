@extends('layouts.app')

@section('content')
    <main class="mt-4">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header font-weight-bold text-lg">View Student Details</div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Student</th>
                                        <th scope="col">Father</th>
                                        <th scope="col">Mother</th>
                                        <th scope="col">Birthdate</th>
                                        <th scope="col">Department</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col" colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($student as $item)
                                        <tr>
                                            <td>{{ $item->studentId }}</td>
                                            <td>{{ $item->studentName }}</td>
                                            <td>{{ $item->fathername }}</td>
                                            <td>{{ $item->mothername }}</td>
                                            <td>{{ $item->birthdate }}</td>
                                            <td>{{ $item->department }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>
                                                {{ $item->gender }}
                                            </td>
                                            <td class="row">
                                                <a class="btn" href="{{route('edit',['id'=>$item->id])}}">Edit</a>
                                                <a class="btn" href="{{route('delete',['id'=>$item->id])}}">Delete</a>
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
    </main>
@endsection
