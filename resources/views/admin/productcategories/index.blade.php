@extends('admin.layout.master')
@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary card-header d-flex justify-content-between align-items-center">
              <h4 class="card-title" style="margin-left: 5mm">Categories Data Table</h4>
              <a href="{{route('productcategories.create')}}" class="btn btn-success btn-round">Add</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      No
                    </th>
                    <th>
                      Categories Name
                    </th>
                    <th>
                      Edit
                    </th>
                    <th>
                      Delete
                    </th>
                  </thead>
                  <tbody>
                    
                    @foreach($data as $i=>$row)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$row->categories_name}}</td>
                        <td><a href="{{route('productcategories.edit', $row->id)}}" class='btn btn-success'>Edit</a></td>
                        <td>
                            <form action="{{route('productcategories.destroy', $row->id)}}" method="post">
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