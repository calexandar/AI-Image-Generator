@extends('layouts.app')

@section('content')
<div class="mt-14 w-1/4 flex mx-auto sm:mt-0">
    <div class="flex flex-col">
      <div class="">
        <div class="px-4 sm:px-0">
          <h1 class="text-center text-4xl font-semibold text-gray-900">Open AI Image Generator</h1>         
        </div>
      </div>
      <div class="mt-5   md:mt-0">
        <form action="{{ route('images.generate') }}" method="POST">
            @csrf
          <div class="overflow-hidden shadow sm:rounded-md">
            <div class="bg-white px-4 py-5 sm:p-6">
              <div class="flex flex-col">
                <div class="">
                  <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Insert Description for Image</label>
                  <input type="text" name="description" id="description" autocomplete="given-name" class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
 
                <div class="">
                  <label for="size" class="block text-sm font-medium leading-6 text-gray-900">Select the size of an Image</label>
                  <select id="size" name="size" autocomplete="size" class="mt-2 block w-full rounded-md border-0 bg-white py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <option value="sm">Small</option>
                    <option value="md">Medium</option>
                    <option value="lg">Lardge</option>
                  </select>
                </div>


              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 btn-loader">
                Generate Image
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection