@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-9 mx-auto">
            <div class="card ">
                <div class="card-body">
                    <a name="" id="" class="btn btn-primary mb-2" href="{{route('patients.index') }}" role="button"><i
                            class="fas fa-arrow-left"></i></a>
                    <h3 class="card-title">Create Patients</h3>
                    @if(session('saved'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        Record saved!
                    </div>
                    @endif
                    <form action="{{route('patients.store')}}" method="post">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name" id="last_name"
                                        class="form-control @error('last_name') is-invalid @enderror" placeholder=""
                                        aria-describedby="helpId" value="{{old('last_name')}}">
                                    @error('last_name')
                                    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" id="first_name"
                                        class="form-control  @error('first_name') is-invalid @enderror" placeholder=""
                                        aria-describedby="helpId" value="{{old('first_name')}}">
                                    @error('first_name')
                                    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sex">Sex</label>
                                    <select class="form-control  @error('sex') is-invalid @enderror" name="sex"
                                        id="sex">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    @error('sex')
                                    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="number" name="age" id="age"
                                        class="form-control  @error('age') is-invalid @enderror" placeholder=""
                                        aria-describedby="helpId" value="{{old('age')}}">
                                    @error('age')
                                    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email"
                                        class="form-control  @error('email') is-invalid @enderror" placeholder=""
                                        aria-describedby="helpId" value="{{old('email')}}">
                                    @error('email')
                                    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="contact_number">Contact Number</label>
                                    <input type="text" name="contact_number" id="contact_number"
                                        class="form-control  @error('contact_number') is-invalid @enderror"
                                        placeholder="" aria-describedby="helpId">
                                    @error('contact_number')
                                    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                                            value="{{old('contact_number')}}">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="medical_history">Medical History</label>
                                    <textarea class="form-control  @error('medical_history') is-invalid @enderror"
                                        name="medical_history" id="medical_history"
                                        rows="5"> {{old('medical_history')}} </textarea>
                                    @error('medical_history')
                                    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="general_condition">General Condition</label>
                                    <textarea class="form-control  @error('general_condition') is-invalid @enderror"
                                        name="general_condition" id="general_condition"
                                        rows="5"> {{old('general_condition')}} </textarea>
                                    @error('general_condition')
                                    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 text-right">
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>





                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection