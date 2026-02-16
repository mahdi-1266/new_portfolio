@extends('admin.admin_dashboard')
@section('backend')
<div class="row gx-4">

  <div class="col-sm-12">
    <div class="card mb-4">
      <div class="card-body">

        <!-- Table start -->
        <div class="table-outer">
          <div class="table-responsive">
            <table class="table align-middle table-hover m-0">
              <thead>
                <tr>
                  <th scope="col" class="border">ID</th>
                  <th scope="col" class="border">Name</th>
                  <th scope="col" class="border">Description</th>
                  <th scope="col" class="border">Github</th>
                  <th scope="col" class="border">Facebook</th>
                  <th scope="col" class="border">Linkedin</th>
                  <th scope="col" class="border">Instagram</th>
                  <th scope="col" class="border">Action</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mahdi</td>
                  <td>Description</td>
                  <td>Github</td>
                  <td>Facebook</td>
                  <td>Linkedin</td>
                  <td>Instagram</td>
                  <td>Action</td>
                </tr>
              </tbody>      
            </table>

            <div class="mt-3 d-inline-block">
              <a href="{{ route('add.brand') }}" class="btn btn-primary py-2 px-4">Add Hero</a>
            </div>
          </div>
        </div>
        <!-- Table end -->

      </div>
    </div>
  </div>

</div>
@endsection