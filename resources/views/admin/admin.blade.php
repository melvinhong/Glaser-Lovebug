@extends('layouts.adminpage')

@section('title')
Admin | LoveBug
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">User Profile</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th><b>Name</b></th>
              <th><b>E-mail</b></th>
              <th><b>Actions</b></th>
              <!-- <th>Gender</th>
              <th>City</th> -->
            </thead>
            <tbody>
              @foreach($users as $user)
              <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                  <form action="{{ route('admin.admin.destroy', $user->id) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
