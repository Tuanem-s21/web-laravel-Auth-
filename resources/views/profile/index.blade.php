
{{-- @extends('layouts.app') --}}


@extends('layouts.user_type.auth')

@section('title', 'Profile')

@section('content')
  <main class="  mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class=" collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-between" id="navbar">
          <h1>Product</h1>
          <div class="d-flex">
            {{-- add --}}
            <div class="nav-item ">
              <a class="btn btn-primary active mb-0 text-white {{ (Request::is('profile/create') ? 'active' : '') }} " href="{{ url('profile/create') }}" target="_blank" role="button" aria-pressed="true">
                  Add
              </a>
            </div>
            {{-- search --}}
            <div class="ms-md-3 pe-md-3 d-flex align-items-center">
                <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Type here...">
                </div>
            </div>
          </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Authors table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <form action="" method="GET">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                        <th class="text-secondary opacity-7"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$user->name}}</h6>
                                <p class="text-xs text-secondary mb-0">{{$user->email}}</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="text-xs font-weight-bold mb-0">Manager</p>
                            <p class="text-xs text-secondary mb-0">Organization</p>
                          </td>
                          <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-success">Online</span>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                          </td>
                          <td class="align-middle">
                            <a  class="text-secondary font-weight-bold text-xs "  href="{{ ('edit')}}/{{$user->id}}">
                              Edit
                            </a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <table class=" table table-dark table-striped ">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Handle</th>
            <th scope="col" colspan="2" class="ps-6">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="ps-4" scope="row">1</th>
            <td class="ps-4">Mark</td>
            <td class="ps-4">Otto</td>
            <td class="ps-4">@mdo</td>
            <td class="ps-4"><a class="{{ (Request::is('profile/edit') ? 'active' : '') }} " href="{{ url('profile/edit') }}" style="color:rgb(255, 0, 0)">Edit</a></td>
            <td class="ps-4"><a href="" style="color:rgb(255, 0, 0)">Delete</a></td>
          </tr>
          <tr>
            <th class="ps-4" scope="row">2</th>
            <td class="ps-4" scope="row">Jacob</td>
            <td class="ps-4" scope="row">Thornton</td>
            <td class="ps-4" scope="row">@fat</td>
            <td class="ps-4"><a href="" style="color:rgb(255, 0, 0)">Edit</a></td>
            <td class="ps-4"><a href="" style="color:rgb(255, 0, 0)">Delete</a></td>
          </tr>
          <tr>
            <th class="ps-4" scope="row" scope="row">3</th>
            <td class="ps-4" scope="row">Larry the Bird</td>
            <td class="ps-4" scope="row">Larry the</td>
            <td class="ps-4" scope="row">@twitter</td>
            <td class="ps-4"><a href="" style="color:rgb(255, 0, 0)">Edit</a></td>
            <td class="ps-4"><a href="" style="color:rgb(255, 0, 0)">Delete</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

@endsection