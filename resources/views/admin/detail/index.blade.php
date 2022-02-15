@extends('admin.layout.master')
@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary d-flex justify-content-between align-items-center">
              <h4 class="card-title" style="margin-left: 5mm">Detail's Table</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive table-striped table-bordered">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      Number
                    </th>
                    <th>
                      Name
                    </th>
                    {{-- <th>
                      Address
                    </th>
                    <th>
                      Call Number
                    </th> --}}
                    <th>
                      Purchase Status
                    </th>
                    <th>
                      Return
                    </th>
                    <th>
                      Delete
                    </th>
                  </thead>
                  <tbody>
                    
                    @foreach($data as $i=>$row)
                    <tr>
                      <td>{{$row->addproducts->product_seriesnumber}}</td>
                      <td>{{$row->addproducts->product_name}}</td>
                      {{-- WE NEED ADDRESS --}}
                      {{-- WE NEED CALL NUMBER --}}
                      <td>{{$row->purchaselogs->purchase_status}}</td>
                      <td>{{$row->purchaselogs->purchase_date}}</td>
                      <td>{{$row->status}}</td>
                      <td>
                        <form action="{{route('detail.destroy', $row->id)}}" method="post">
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