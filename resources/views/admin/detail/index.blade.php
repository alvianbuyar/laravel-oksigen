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
                      Edit Tube Status
                    </th>
                    {{-- <th>
                      Delete
                    </th> --}}
                  </thead>

                  <tbody style="background-color: #202940">

                      @foreach($data as $i=>$row)
                        @if($row->purchaselogs->purchase_status !=0)
                          <tr>
                            <td>{{$row->addproducts->product_seriesnumber}}</td>
                            <td>{{$row->addproducts->product_name}}</td>
                            <td>{{$row->purchaselogs->users->name}}</td>
                            <td>{{$row->purchaselogs->users->address}}</td>
                            <td>{{$row->purchaselogs->users->phone_number}}</td>

                            @if($row->loan_status == 0)
                              <td>Tidak</td>
                            @else
                              <td>Pinjam</td>
                            @endif

                            <td>{{$row->purchaselogs->purchase_date}}</td>

                            @if($row->loan_status == 0)
                              <td>Dibeli</td>
                            @else
                              @if($row->tube_status == 0)
                                <td>Belum kembali</td>
                              @else
                                <td>Sudah kembali</td>
                              @endif
                            @endif

                            @if($row->loan_status == 0)
                              <td><a href="#" class='btn btn-danger'>Edit</a></td>
                            @else
                              @if($row->tube_status == 0)
                                <td><a href="{{route('detail.edit', $row->id)}}" class='btn btn-success'>Edit</a></td>
                              @else
                                <td><a href="{{route('detail.edit', $row->id)}}" class='btn btn-danger'>Edit</a></td>
                              @endif
                            @endif
                          </tr>
                        @endif  
                      @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

@endsection