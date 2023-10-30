@extends('layouts.user_type.auth')

@section('title', 'category')

@section('content')
  <main class="  mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class=" collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-between" id="navbar">
        <h1>index category</h1>
            <div class="d-flex">
            {{-- add --}}
            <div class="nav-item ">
              <a class="btn btn-primary active mb-0 text-white {{ (Request::is('category/create') ? 'active' : '') }} " href="{{ url('category/create') }}" target="_blank" role="button" aria-pressed="true">
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
                          <th scope="col">ID</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Handle</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th class="ps-4" scope="row">1</th>
                          <td class="ps-4">Mark</td>
                          <td class="ps-4">Otto</td>
                          <td class="ps-4">@mdo</td>
                          <td class="ps-4"><a href="" style="color:rgb(255, 0, 0)">Delete</a></td>
                        </tr>
                      </tbody>
                  </table>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection