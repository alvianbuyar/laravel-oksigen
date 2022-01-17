@extends('admin.layout.master')
@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary d-flex justify-content-between align-items-center">
              <h4 class="card-title" style="margin-left: 5mm">Loan Log Table</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive table-striped table-bordered">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      No
                    </th>
                    <th>
                      Number
                    </th>
                    <th>
                      Name
                    </th>
                    <th>
                      Address
                    </th>
                    <th>
                      Call Number
                    </th>
                    <th>
                      Delete
                    </th>
                  </thead>
                  <tbody>
                    
                    @foreach($data as $i=>$row)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$row->loan_number}}</td>
                        <td>{{$row->loan_name}}</td>
                        <td>{{$row->loan_address}}</td>
                        <td>{{$row->loan_callnumber}}</td>
                        <td>
                            <form action="{{route('loanlog.destroy', $row->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
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