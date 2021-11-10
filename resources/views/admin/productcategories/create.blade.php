@extends('admin.layout.master')
@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Add New Categories</h4>
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

              <form action="{{route('productcategories.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
              @csrf

              <form>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group" style="margin: 10mm">
                      <label for="text-input" class=" form-control-label">Categories Name</label>
                      <input type="text" id="text-input" name="txtcategories_name" class="form-control">
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