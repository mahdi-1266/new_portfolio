@extends('admin.admin_dashboard')
@section('backend')
<div class="row gx-4">
  <div class="col-lg-12 col-md-12 col-ms-12">
    <div class="card mb-4">
      <div class="card-header">
        <h5 class="card-title">Basic Input Fields</h5>
      </div>

      <div class="card-body">
        <form action="{{ route('update.home') }}" class="row" method="POST" enctype="multipart/form-data">
          @csrf

          <!-- Text Input -->
          <div class="mb-3 col-lg-6 col-md-12 col-ms-12">
            <label for="name" class="form-label ms-2">Name</label>
            <input type="text" class="form-control @error('name') is-invalid
            @enderror" id="name" name="name" value="{{ $home->name }}">
            @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>

          <!-- Github -->
          <div class="mb-3 col-lg-6 col-md-12 col-ms-12">
            <label for="github_link" class="form-label ms-2">Github</label>
            <input type="text" class="form-control  @error('github_link') is-invalid
            @enderror" id="github_link" name="github_link" value="{{ $home->github_link }}">
            @error('github_link') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>

          <!-- Facebook -->
          <div class="mb-3 col-lg-6 col-md-12 col-ms-12">
            <label for="facebook_link" class="form-label ms-2">Facebook</label>
            <input type="text" class="form-control @error('facebook_link') is-invalid 
            @enderror" id="facebook_link" name="facebook_link" value="{{ $home->facebook_link }}">
            @error('facebook_link') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>

          <!-- Linkedin -->
          <div class="mb-3 col-lg-6 col-md-12 col-ms-12">
            <label for="linkedin_link" class="form-label ms-2">Linkedin</label>
            <input type="text" class="form-control @error('linkedin_link') is-invalid 
            @enderror" id="linkedin_link" name="linkedin_link" value="{{ $home->linkedin_link }}">
            @error('linkedin_link') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>

          <!-- Instagram -->
          <div class="mb-3 col-lg-6 col-md-12 col-ms-12">
            <label for="instagram_link" class="form-label ms-2">instagram</label>
            <input type="text" class="form-control @error('instagram_link') is-invalid 
            @enderror" id="instagram_link" name="instagram_link" value="{{ $home->instagram_link }}">
            @error('instagram_link') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>

            <!-- Textarea -->
          <div class="mb-3 col-lg-6 col-md-12 col-ms-12">
            <label for="description" class="form-label ms-2">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3"
            placeholder="Enter your message">{{ $home->description }}</textarea>
            @error('description') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>

          <div class="col-lg-3 col-md-12 col-ms-12">
            <button type="submit" class="btn btn-primary py-2 px-4">Submit</button>
          </div>


          <div class="mb-3 col-lg-6 col-md-12 col-ms-12">
            <input type="hidden" class="form-control" name="id" value="{{ $home->id }}">
          </div>
        </form>
      </div>
    </div>
</div>

</div>
@endsection