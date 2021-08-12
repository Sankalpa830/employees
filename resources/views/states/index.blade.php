@extends('layouts.main')
@section('content')

<!-- Page Heading -->
<div class="container">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">States</h1>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        @if (session()->has('message'))
          <div class="alert alert-success">
            {{ session('message') }}
          </div>
        @endif
        <div class="card-header">
          <div class="row">
            <div class="col-8">
              <form method="GET" action="{{ route('states.index') }}" class="d-flex">
                <input class="form-control me-2" type="search" name="search" placeholder="Search State" aria-label="Search">
                <button class="btn btn-outline-info ml-2" type="submit">Search</button>
              </form>
            </div>
            <div class="col-4 text-right">
              <a href="{{ route('states.create') }}" class=" btn btn-outline-info">
                Create
              </a>
            </div>
          </div>
        </div>
        <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Country ID</th>
                  <th scope="col">State Name</th>
                  <th scope="col">Manage</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($states as $state)
                  <tr>
                      <th scope="row">{{ $state->id }}</th>
                      <td>{{ $state->country->country_code}}</td>
                      <td>{{ $state->name }}</td>
                      <td>
                        <a href="{{ route('states.edit',$state->id) }}" class="btn btn-success" >
                          Edit
                        </a>
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

@endsection