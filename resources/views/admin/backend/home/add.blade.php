@extends('admin.admin_dashboard')
@section('backend')
<div class="row gx-4">
  <div class="col-lg-6 col-md-12 col-ms-12">
    <div class="card mb-4">
      <div class="card-header">
        <h5 class="card-title">Basic Input Fields</h5>
      </div>
      <div class="card-body">
        <form action="{{ route('store.home') }}" method="POST">
          @csrf

          <!-- Text Input -->
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
          </div>

          <!-- Github -->
          <div class="mb-3">
            <label for="github_link" class="form-label">Github</label>
            <input type="text" class="form-control" id="github_link" name="github_link" placeholder="Enter link">
          </div>

          <!-- Facebook -->
          <div class="mb-3">
            <label for="facebook_link" class="form-label">Facebook</label>
            <input type="text" class="form-control" id="facebook_link" name="facebook_link" placeholder="Enter link">
          </div>

          <!-- Linkedin -->
          <div class="mb-3">
            <label for="linkedin_link" class="form-label">Linkedin</label>
            <input type="text" class="form-control" id="linkedin_link" name="linkedin_link" placeholder="Enter link">
          </div>

          <!-- Instagram -->
          <div class="mb-3">
            <label for="instagram_link" class="form-label">instagram</label>
            <input type="text" class="form-control" id="instagram_link" name="instagram_link" placeholder="Enter link">
          </div>

            <!-- Textarea -->
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"
              placeholder="Enter your message"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
</div>

</div>
@endsection