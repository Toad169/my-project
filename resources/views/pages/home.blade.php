@extends('index')

@section('content')

<div>
  <!-- When there is no desire, all things are at peace. - Laozi -->
  <div class="relative flex flex-col items-center max-w-screen-xl px-4 mx-auto md:flex-row sm:px-6 p-8">
      <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pr-10">
          <div class="text-left">
              <h2
                  class="text-4xl font-extrabold leading-10 tracking-tight text-gray-800 sm:text-5xl sm:leading-none md:text-6xl">
                  Hero
                  <span class="font-bold text-teal-500">Section</span>
                  <span class="text-xl font-semibold rounded-full text-blueGray-500">2.0</span>
              </h2>
              <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate dignissim augue, Nullam vulputate dignissim augue.
              </p>
              <div class="mt-5 sm:flex md:mt-8">
                  <div class="rounded-md shadow"><a href="{{ route('register') }}"
                          class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-teal-500 border border-transparent rounded-md hover:bg-teal-600 focus:outline-none focus:shadow-outline-blue md:py-4 md:text-lg md:px-10">
                          Sign in
                      </a></div>
                  <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                      <a href="{{ route('login') }}"
                          class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-teal-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-teal-600 focus:outline-none focus:shadow-outline-blue md:py-4 md:text-lg md:px-10">
                          Login
                      </a>
                  </div>
              </div>
          </div>
      </div>
      <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pl-10">
          <div class="relative w-full p-3 rounded  md:p-8">
              <div class="rounded-lg bg-white text-black w-full">
                  <img src="https://picsum.photos/400/300" />
              </div>
          </div>
      </div>
  </div>
</div>

<div>
    <div class="row py-6">
        <section>
            <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
              <div class="space-y-4 md:space-y-8">
                <div class="max-w-xl">
                  <h2 class="text-2xl font-semibold text-gray-900 sm:text-3xl">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </h2>
          
                  <p class="mt-4 text-gray-700">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur doloremque saepe
                    architecto maiores repudiandae amet perferendis repellendus, reprehenderit voluptas sequi.
                  </p>
                </div>
          
                <img
                  src="https://images.unsplash.com/photo-1731690415686-e68f78e2b5bd?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                  class="rounded"
                  alt=""
                />
              </div>
            </div>
          </section>
          
    </div>
</div>
@endsection