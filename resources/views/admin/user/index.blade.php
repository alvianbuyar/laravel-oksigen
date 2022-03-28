@extends('admin.layout.master')
@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary d-flex justify-content-between align-items-center">
            <h4 class="card-title" style="margin-left: 5mm">User Data Table</h4>
            <a href="{{route('users.create')}}" class="btn btn-success btn-round">Add</a>
          </div>
          <div class="card-body">
            <div class="table-responsive table-striped table-bordered">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    No
                  </th>
                  <th>
                    Nama
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Role
                  </th>
                  <th>
                    Edit
                  </th>
                  <th>
                    Hapus
                  </th>
                </thead>
                <tbody>
                  
                  @foreach($data as $i=>$row)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>
                      @if (!empty($row->getRoleNames()))
                        @foreach ($row->getRoleNames() as $role)
                          <label class="badge badge-success">{{$role}}</label>
                        @endforeach
                      @endif
                    </td>
                    <td><a href="{{route('users.edit', $row->id)}}" class='btn btn-success'>Edit</a></td>
                    <td>
                      <form action="{{route('users.destroy', $row->id)}}" method="post">
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
    </div>
  </div>
</div>

@endsection