<x-layout>
   <x-slot:title>
      Job Listings
   </x-slot:title>
  This is jobs page
  <br>
  <br><strong>Job titles with salary</strong>
<div class="space-y-4 pt">
   @foreach ($jobs as $job)
 <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-300 rounded-lg">
   <div class="font-bold text-blue-500">{{$job->employer->name}}</div>
      <strong>{{$job['title']}}</strong> Pays {{$job['salary']}} per year.
   </a>
   @endforeach

   <div>
      {{$jobs->links()}}
   </div>
</div>
</x-layout>