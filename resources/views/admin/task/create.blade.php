@extends('admin.layout.master')
@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Add New Task</h4>
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

              <form action="{{route('task.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group" style="margin: 3mm; margin-top: 10mm">
                      <label for="text-input" class=" form-control-label">Task Description</label>
                      <input type="text" id="text-input" name="txttask_description" class="form-control">
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