@extends('admin.layout.master')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-4 col-lg-12">
              <canvas id="chartUser" width="400" height="400"></canvas>
              <script>
                const ctx3 = document.getElementById('chartUser').getContext('2d');
                const chartUser = new Chart(ctx3, {
                    type: 'line',
                    data: {
                        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                        datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
                </script>
            </div>
            <div class="col-xl-4 col-lg-12">
              <canvas id="chartPeminjam" width="400" height="400"></canvas>
              <script>
                const ctx2 = document.getElementById('chartPeminjam').getContext('2d');
                const chartPeminjam = new Chart(ctx2, {
                    type: 'bar',
                    data: {
                        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                        datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
                </script>
            </div>
            <div class="col-xl-4 col-lg-12">
              <canvas id="chartPemesan" width="400" height="400"></canvas>
              <script>
              const ctx1 = document.getElementById('chartPemesan').getContext('2d');
              const chartPemesan = new Chart(ctx1, {
                  type: 'line',
                  data: {
                      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                      datasets: [{
                          label: '# of Votes',
                          data: [12, 19, 3, 5, 2, 3],
                          backgroundColor: [
                              'rgba(255, 99, 132, 0.2)',
                              'rgba(54, 162, 235, 0.2)',
                              'rgba(255, 206, 86, 0.2)',
                              'rgba(75, 192, 192, 0.2)',
                              'rgba(153, 102, 255, 0.2)',
                              'rgba(255, 159, 64, 0.2)'
                          ],
                          borderColor: [
                              'rgba(255, 99, 132, 1)',
                              'rgba(54, 162, 235, 1)',
                              'rgba(255, 206, 86, 1)',
                              'rgba(75, 192, 192, 1)',
                              'rgba(153, 102, 255, 1)',
                              'rgba(255, 159, 64, 1)'
                          ],
                          borderWidth: 1
                      }]
                  },
                  options: {
                      scales: {
                          y: {
                              beginAtZero: true
                          }
                      }
                  }
              });
              </script>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Loan Log's</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class=" text-primary" style="background-color: #202940">
                      <th>
                        Number
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        Call Number
                      </th>
                      <th>
                        Purchase Date
                      </th>
                      <th>
                        Tube Status
                      </th>
                    </thead>
  
                    <tbody style="background-color: #202940">
  
                        @foreach($loan as $i=>$row)
                          @if($row->loan_status != 0)
                            <tr>
                              <td>{{$row->addproducts->product_seriesnumber}}</td>
                              <td>{{$row->purchaselogs->users->name}}</td>
                              <td>{{$row->purchaselogs->users->phone_number}}</td>
                              <td>{{$row->purchaselogs->purchase_date}}</td>
  
                              @if($row->tube_status == 0)
                                <td>Belum kembali</td>
                              @else
                                <td>Sudah kembali</td>
                              @endif

                            </tr>
                          @endif  
                        @endforeach
  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-warning">
                  <h4 class="card-title">Tasks</h4>
                </div>
                @foreach($task as $i=>$row)
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <div>
                              <td>{{$row->task_description}}</td>
                              <td class="td-actions float-right">
                                <form action="{{route('task.edit', $row->id)}}">
                                  <button type="submit" rel="tooltip" class="btn btn-white btn-link btn-sm">
                                    <i class="material-icons">edit</i>
                                  </button>
                                </form>
                                <form action="{{route('task.destroy', $row->id)}}" method="post" style="margin-left: 3mm; margin-right: 3mm">
                                  @csrf
                                  @method('DELETE')
                                    <button type="submit" rel="tooltip" class="btn btn-white btn-link btn-sm">
                                      <i class="material-icons">close</i>
                                    </button>
                                </form>
                              </td>
                            </div>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </footer>

@endsection