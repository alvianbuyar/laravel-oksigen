@extends('layouts.app')

@section('content')

<div class="main">
    <div class="section section-basic" id="basic-elements">
    <div class="squares square3"></div>
    <div class="squares square7"></div>
    {{-- <div class="squares square5"></div> --}}
      <div class="container" style="margin-top: 28mm">
        <div class="card-body">
            <h3>Check out</h3>
            {{-- ketika keranjang memiliki barang --}}
            @if(!empty($purchase))
            <table class="table">
              <thead class="text-primary">
                <th>
                  No
                </th>
                <th>
                  Nama Barang
                </th>
                <th>
                  Harga Oksigen
                </th>
                <th>
                  Harga Tabung
                </th>
                <th>
                  Pinjam Tabung
                </th>
                <th>
                  Total
                </th>
                <th>
                  Delete
                </th>
              </thead>
              <tbody>
                
                @foreach($detail as $i=>$row)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$row->addproducts->product_name}}</td>
                    <td>{{$row->addproducts->product_price}}</td>
                    <td>{{$row->addproducts->tube_price}}</td>
                    {{-- <td>{{$row->purchaselogs->purchase_status}}</td> --}}
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td>{{$row->total_detail}}</td>
                    <td>
                        <form action="{{ url('checkout') }}/{{ $row->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm btn-round btn-icon" type="submit">
                              <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                <tr>
                  <td colspan="5"> <strong>Total Harga : </strong> </td>
                  <td> <strong> Rp. {{ $purchase->purchase_total }} </strong> </td>
                </tr>
              </tbody>
            </table>
            {{-- <a href="#" class="btn btn-primary btn-block">Checkout</a> --}}
            <a href="{{ url('confirmation') }}" class="btn btn-primary btn-block">Checkout</a>

            @else

            <table class="table">
              <thead class="text-primary">
                <th>
                  No
                </th>
                <th>
                  Nama Barang
                </th>
                <th>
                  Harga Oksigen
                </th>
                <th>
                  Harga Tabung
                </th>
                <th>
                  Pinjam Tabung
                </th>
                <th>
                  Total
                </th>
                <th>
                  Delete
                </th>
              </thead>
              <tbody>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tbody>
            </table>
                
            @endif
          </div>
      </div>
    </div>
</div>
@endsection