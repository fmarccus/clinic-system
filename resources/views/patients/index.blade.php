@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Patient List</h3>
            <div class="d-flex bd-highlight mb-2">
                <div class="mr-auto p-2 bd-highlight">
                    <div class="form-group">
                        <input type="search" name="search" id="search" class="form-control" placeholder="Search..."
                            aria-describedby="helpId">
                    </div>
                </div>
                <div class="p-2 bd-highlight">
                    <a name="" id="" class="btn btn-primary" href="{{route('patients.create')}}" role="button"><i
                            class="fas fa-plus"></i> </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-borderless">
                    <caption>List of Patients</caption>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($patients as $patient)
                        <tr>
                            <td>{{ $patient->id}} </td>
                            <td>{{ $patient->last_name}} </td>
                            <td>{{ $patient->first_name}}</td>
                            <td>{{ $patient->email}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$patients->links()}}
            </div>
        </div>
    </div>
</div>

@endsection