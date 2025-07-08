@extends('index')

@section('content')

<!-- component -->
<div class="bg-gray-100 flex justify-center items-center h-screen py-20">
    <!-- Left: Image -->
<div class="w-1/2 h-screen hidden lg:block">
  <img src="https://placehold.co/800x/667fff/ffffff.png?text=Your+Image&font=Montserrat" alt="Placeholder Image" class="object-cover w-full h-full">
</div>
<!-- Right: Login Form -->
<div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
  <h1 class="text-2xl font-semibold mb-4">Signin</h1>
  <form action="{{ route('register.post') }}" method="POST">
    @csrf
    <!-- Name Input -->
    <div class="mb-4">
      <label for="name" class="block text-gray-600">Name</label>
      <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off" value="{{ old('name') }}">
      @error('name')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror
    </div>
    <!-- Email Input -->
    <div class="mb-4">
      <label for="email" class="block text-gray-600">Email</label>
      <input type="text" id="email" name="email" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off" value="{{ old('email') }}">
      @error('email')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror
    </div>
    <!-- Password Input -->
    <div class="mb-4">
      <label for="password" class="block text-gray-600">Password</label>
      <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
      @error('password')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror
    </div>
    <!-- Password Confirmation Input -->
    <div class="mb-4">
      <label for="password_confirmation" class="block text-gray-600">Confirm Password</label>
      <input type="password" id="password_confirmation" name="password_confirmation" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
      @error('password_confirmation')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror
    </div>
    <!-- Register Button -->
    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">Sign up</button>
  </form>
  
</div>
</div>
@endsection