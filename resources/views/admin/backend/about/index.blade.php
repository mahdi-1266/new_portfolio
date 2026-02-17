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
                <tr>
                  <td>1</td>
                  <td>Mahdi</td>
                  <td>Description</td>
                  <td>Photo</td>
                  <td>Action</td>
                </tr>
              </tbody>

              {{-- <tbody>
                @php
                  $heroId = App\Models\HeroSection::get();
                @endphp

                @foreach($heroId as $hero)
                  <tr>
                    <td scope="row" class="border">{{ $hero->id }}</td>
                    <td class="border">{{ $hero->name }}</td>
                    <td class="border">{{ $hero->description }}</td>
                    <td class="border">{{ $hero->github_link }}</td>
                    <td class="border">{{ $hero->facebook_link }}</td>
                    <td class="border">{{ $hero->linkedin_link }}</td>
                    <td class="border">{{ $hero->instagram_link }}</td>
                    <td class="border">
                      <div class="d-flex gap-2">
                        <a class="btn btn-primary btn-sm btn-icon" href="#"><i class="ri-edit-line"></i></a>
                        <a class="btn btn-danger btn-sm btn-icon" href="#"><i class="ri-delete-bin-line"></i></a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody> --}}
      
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