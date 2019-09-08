@extends('layouts.adminpage')

@section('title')
Admin | LoveBug
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Dashboard</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
                Name
              </th>
              <th>
                Gender
              </th>
              <th>
                Age
              </th>
              <th class="text-right">
                City
              </th>
            </thead>
            <tbody>
              <!-- <tr>
                <td>
                  Dakota Rice
                </td>
                <td>
                  Niger
                </td>
                <td>
                  Oud-Turnhout
                </td>
                <td class="text-right">
                  $36,738
                </td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
