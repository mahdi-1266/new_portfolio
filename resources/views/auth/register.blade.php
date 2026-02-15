<!DOCTYPE html>
<html lang="en">

  
<!-- Mirrored from bootstrapget.com/demos/soft-admin-template/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Jan 2026 06:47:12 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Soft UI Admin Dashboard</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for admin templates" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.templatemonster.com/store/bootstrapgallery">
    <meta property="og:url" content="https://www.templatemonster.com/store/bootstrapgallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Softism UI Kit">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="BootstrapGet">
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.svg') }}" />

    <!-- *************
			************ CSS Files *************
		************* -->
    <!-- Remix Font Icons css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/remix/remixicon.css') }}" />

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/animate.css') }}" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/main.min.css') }}" />

  </head>

  <body class="login-bg">

    <!-- Container starts -->
    <div class="container">

      <!-- Auth wrapper starts -->
      <div class="auth-wrapper">

        <!-- Form starts -->
        <form action="https://bootstrapget.com/demos/soft-admin-template/hrm.html">

          <div class="auth-box">
            <a href="hrm.html" class="auth-logo mb-4">
              <img src="{{ asset('backend/assets/images/logo.svg') }}" alt="Softism Admin Template">
            </a>

            <h4 class="mb-4">Signup</h4>

            <div class="mb-3">
              <label class="form-label" for="name">Your name <span class="text-danger">*</span></label>
              <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
            </div>

            <div class="mb-3">
              <label class="form-label" for="email">Your email <span class="text-danger">*</span></label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
            </div>

            <div class="mb-3">
                <label class="form-label" for="password">Your password <span class="text-danger">*</span></label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
                </div>
                <div class="form-text">
                    Your password must be 8-20 characters long.
                </div>
            </div>

            <div class="mb-3 d-grid gap-2">
              <button type="submit" class="btn btn-primary">Signup</button>
              <a href="{{ route('login') }}" class="btn btn-outline-primary">Already have an Account? Login</a>
            </div>

          </div>

        </form>
        <!-- Form ends -->

      </div>
      <!-- Auth wrapper ends -->

    </div>
    <!-- Container ends -->

  </body>


<!-- Mirrored from bootstrapget.com/demos/soft-admin-template/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Jan 2026 06:47:12 GMT -->
</html>

<!-- 
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


-->