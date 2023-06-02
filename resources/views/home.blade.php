@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                
            </div>
        </div>

        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Health Data</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('health_data.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">Date</label>

                                <div class="col-md-6">
                                    <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autofocus>

                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="heart_rate" class="col-md-4 col-form-label text-md-right">Heart Rate</label>

                                <div class="col-md-6">
                                    <input id="heart_rate" type="number" class="form-control @error('heart_rate') is-invalid @enderror" name="heart_rate" value="{{ old('heart_rate') }}" required>

                                    @error('heart_rate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="blood_pressure_min" class="col-md-4 col-form-label text-md-right">Blood Pressure min</label>

                                <div class="col-md-6">
                                    <input id="blood_pressure_min" type="number" class="form-control @error('blood_pressure_min') is-invalid @enderror" name="blood_pressure_min" value="{{ old('blood_pressure_min') }}" required>

                                    @error('blood_pressure_min')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="blood_pressure_max" class="col-md-4 col-form-label text-md-right">Blood Pressure max</label>

                                <div class="col-md-6">
                                    <input id="blood_pressure_max" type="number" class="form-control @error('blood_pressure_max') is-invalid @enderror" name="blood_pressure_max" value="{{ old('blood_pressure_max') }}" required>

                                    @error('blood_pressure_max')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add Data
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
      
    </div>
</div>
@endsection
