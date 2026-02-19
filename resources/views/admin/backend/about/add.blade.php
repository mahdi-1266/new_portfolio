@extends('admin.admin_dashboard')
@section('backend')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="content">
<div class="row gx-4">
  <div class="col-lg-12 col-md-12 col-ms-12">
    <div class="card mb-4">
      <div class="card-header">
        <h5 class="card-title">Basic Input Fields</h5>
      </div>

      <div class="card-body">
        <form action="{{ route('store.about') }}" class="row" method="POST" enctype="multipart/form-data">
          @csrf

          <!-- Text Input -->
          <div class="mb-3 col-lg-6 col-md-12 col-ms-12">
            <label for="name" class="form-label ms-2">Name</label>
            <input type="text" class="form-control @error('name') is-invalid
            @enderror" id="name" name="name" placeholder="Enter name">
            @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>

          <!-- Github -->
          <div class="mb-3 col-lg-6 col-md-12 col-ms-12">
            <label for="photo" class="form-label ms-2">Image</label>
            <input type="file" class="form-control  @error('photo') is-invalid
            @enderror" id="photo" name="photo" id="image">
            @error('photo') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>

          <!-- Textarea -->
          <div class="mb-3 col-lg-6 col-md-12 col-ms-12">
            <label for="description" class="form-label ms-2">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3"
            placeholder="Enter your message"></textarea>
            @error('description') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>

          {{-- show image --}}
          <div class="mb-3 col-lg-6 col-md-12 col-ms-12">
            <div class="">
              <img id="showImage" src="{{ url('upload/no_image.jpg') }}" width="100" height="100" class="rounded-pill" alt="">
            </div>
          </div>

          <div class="col-lg-12 col-md-12 col-ms-12">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>

        </form> 
      </div>
    </div>
</div>

</div>

<script type="text/javascript">
$(document).ready(function(){
  $('#image').change(function (e){
    let reader = new FileReader();
    reader.onload = function(e){
      $('#showImage').attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files['0']);
  });
});
</script>
@endsection