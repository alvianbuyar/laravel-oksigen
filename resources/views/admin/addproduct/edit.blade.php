@extends('admin.layout.master')
@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Add New Product</h4>
            </div>
            <div class="card-body">

              @if($errors->any())

                <div class="alert alert-danger">
                  <div class="list-group">
                      @foreach($errors->all() as $error)
                      <li class="list-group-item">
                        {{$error}}
                      </li>
                      @endforeach
                  </div>
                </div>

              @endif

              <form action="{{route('addproduct.update', $data->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @method('PATCH')
                @csrf

              <form>
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group" style="margin: 3mm">
                        <label for="text-input" class=" form-control-label">Product Series Number</label>
                        <input type="text" id="text-input" name="txtproduct_seriesnumber" value="{{$data->product_seriesnumber}}" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group" style="margin: 3mm">
                        <label for="text-input" class=" form-control-label">Product Name</label>
                        <input type="text" id="text-input" name="txtproduct_name" value="{{$data->product_name}}" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Product Categories</label></div>
                    <div class="col-12 col-md-9">
                        <select name="txtid_categories" id="select" class="form-control">

                           @foreach($categories_data as $productcategories)
                           <option value={{$productcategories->id}}>
                                @if($productcategories->id==$data->id_categories)
                                    selected
                                @endif

                            {{$productcategories->categories_name}}</option>

                           @endforeach

                        </select>
                    </div>
                </div>
                    <div class="col-md-12">
                      <div class="form-group" style="margin: 3mm">
                        <label for="text-input" class=" form-control-label">Stock</label>
                        <input type="text" id="text-input" name="txtstock" value="{{$data->stock}}" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group" style="margin: 3mm">
                        <label for="text-input" class=" form-control-label">Description</label>
                        <input type="text" id="text-input" name="txtdescription" value="{{$data->description}}" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group" style="margin: 3mm">
                        <label for="text-input" class=" form-control-label">Product Price</label>
                        <input type="text" id="text-input" name="txtproduct_price" value="{{$data->product_price}}" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group" style="margin: 3mm">
                        <label for="text-input" class=" form-control-label">Tube Price</label>
                        <input type="text" id="text-input" name="txttube_price" value="{{$data->tube_price}}" class="form-control">
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary pull-right">Save</button>
                  <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection