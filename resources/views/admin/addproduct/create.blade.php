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

              <form action="{{route('addproduct.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group" style="margin: 3mm">
                        <label for="text-input" class=" form-control-label ">Product Series Number</label>
                        <input type="text" id="text-input" name="txtproduct_seriesnumber" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="form-group" style="margin: 3mm">
                        <label for="text-input" class="form-control-label">Product Name</label>
                        <input type="text" id="text-input" name="txtproduct_name" class="form-control">
                      </div>
                    </div>
                      <div class="col-md-5">
                        <div class="form-group" style="margin: 3mm">
                          <label for="select" class=" form-control-label">Product Categories</label>
                          <select name="txtid_categories" id="select" class="form-control">

                            @foreach($categories_data as $productcategories)
                            <option value={{$productcategories->id}} class="alert-primary">
                            {{$productcategories->categories_name}}</option>

                            @endforeach

                          </select>
                        </div>
                      </div>
                    <div class="col-md-12 ">
                      <div class="form-control-group" style="margin: 3mm">
                        <label for="file">Choose Image</label>
                        <input type="file" name="product_image" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group" style="margin: 3mm">
                        <label for="text-input" class=" form-control-label">Product Price</label>
                        <input type="text" id="text-input" name="txtproduct_price" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group" style="margin: 3mm">
                        <label for="text-input" class=" form-control-label">Tube Price</label>
                        <input type="text" id="text-input" name="txttube_price" class="form-control">
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary pull-right" style="padding-inline: 15mm">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection