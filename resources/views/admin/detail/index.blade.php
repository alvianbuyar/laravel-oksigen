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
                <table id="datatables" class="table">
                  <thead class=" text-primary" style="background-color: #202940">
                    <th>
                      Number
                    </th>
                    <th>
                      Product
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
                      Loan
                    </th>
                    <th>
                      Purchase Date
                    </th>
                    <th>
                      Tube Status
                    </th>
                    <th>
                      Delete
                    </th>
                  </thead>
                  <tbody style="background-color: #202940">
                    
                    @foreach($data as $i=>$row)
                    <tr>
                      <td>{{$row->addproducts->product_seriesnumber}}</td>
                      <td>{{$row->addproducts->product_name}}</td>
                      <td>{{$row->purchaselogs->users->name}}</td>
                      <td>{{$row->purchaselogs->users->address}}</td>
                      <td>{{$row->purchaselogs->users->phone_number}}</td>
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