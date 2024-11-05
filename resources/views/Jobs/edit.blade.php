<x-layout>
        <x-slot:title>
            Edit Job: {{$job['title']}}
           </x-slot:title>

   
<form action="/jobs/{{ $job->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Here you can update a job</h2>
            <p class="mt-1 text-sm/6 text-gray-600">We'll never share your email with anyone else.</p>
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-4">
                <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                <div class="mt-2">
                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input type="text" value="{{$job->title}}" name="title" id="title" class="block rounded-md flex-1 border-0 py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6" placeholder="Software Engineer">
                  </div>
                  @error('title')
                      <span class="text-sm text-red-600">{{ $message }}</span>
                  @enderror
                </div>
              </div>
             
              <div class="sm:col-span-4">
                <label for="salary" class="block text-sm/6 font-medium text-gray-900">$ Salary</label>
                <div class="mt-2">
                  <div class="flex rounded-md shadow-sm ring-1 bg-white ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input type="text" value="{{$job->salary}}" name="salary" id="salary"  class="block rounded-md flex-1 border-0  py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6" placeholder="$50,000">
                  </div>
                  @error('salary')
                  <span class="text-sm text-red-600">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>
          </div>
        </div>
       
        <div class="mt-6 flex items-center justify-between gap-x-6">

          <div>
          <button form="deleteForm" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete</button>
          </div>

          <div>
          <button type="button" onclick="window.history.back();"  class="rounded-md bg-yellow-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cancel</button>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
          </div>

        </div>
      </form>
      <form action="/jobs/{{ $job->id }}" method="POST" id="deleteForm" class="hidden">
        @csrf
        @method('DELETE')
      </form>
 </x-layout>