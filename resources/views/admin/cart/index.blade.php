@extends('admin.layout.master')
@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary d-flex justify-content-between align-items-center">
              <h4 class="card-title" style="margin-left: 5mm">Cart Table</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive table-striped table-bordered">
                <table id="datatables" class="table">
                  <thead class=" text-primary" style="background-color: #202940">
                    <th>
                      Name
                    </th>
                    <th>
                      Phone Number
                    </th>
                    <th>
                      KTP
                    </th>
                    <th>
                      Purchase Date
                    </th>
                    <th>
                      Total
                    </th>
                    {{-- <th>
                      Price
                    </th> --}}
                    <th>
                      Delete
                    </th>
                  </thead>
                  <tbody style="background-color: #202940">
                    
                    @foreach($data as $i=>$row)
                    <tr>
                        <td>{{$row->users->name}}</td>
                        <td>{{$row->users->phone_number}}</td>
                        {{-- <td>{{$row->users->ktp_image}}</td> --}}

                        @if(!empty($row->users->ktp_image))
                          <td>
                            <img src="{{ asset('public/ktpImage/'. $row->users->ktp_image) }}" height="160px" width="235px">
                          </td>
                        @else
                          <td>
                          </td>
                        @endif

                        <td>{{$row->purchase_date}}</td>
                        <td>{{number_format($row->purchase_total)}}</td>
                        {{-- <td>{{$row->purchase_price}}</td> --}}
                        <td>
                            <form action="{{route('purchaselog.destroy', $row->id)}}" method="post">
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