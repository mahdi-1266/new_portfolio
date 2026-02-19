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
                  <th scope="col" class="border">Photo</th>
                  <th scope="col" class="border">Action</th>
                </tr>
              </thead>

              <tbody>
                @foreach($about as $about)
                  <tr>
                    <td scope="row" class="border">{{ $about->id }}</td>
                    <td class="border">{{ $about->name }}</td>
                    <td class="border">{{ $about->description }}</td>
                    <td class="border"><img src="{{ asset($about->photo) }}" width="100" height="100" alt="{{ $about->name}}"></td>
                    <td class="border">
                      <div class="d-flex gap-2">
                        <a class="btn btn-primary btn-sm btn-icon" href="{{ route('edit.about', $about->id) }}"><i class="ri-edit-line"></i></a>
                        <a class="btn btn-danger btn-sm btn-icon" href="{{ route('delete.about', $about->id) }}"><i class="ri-delete-bin-line"></i></a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
      
            </table>

            <div class="mt-3 d-inline-block">
              <a href="{{ route('add.about') }}" class="btn btn-primary py-2 px-4">Add About</a>
            </div>
          </div>
        </div>
        <!-- Table end -->

      </div>
    </div>
  </div>

</div>
@endsection