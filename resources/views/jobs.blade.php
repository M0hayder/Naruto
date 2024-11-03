<x-layout>
   <x-slot:title>
       Job Listings
      </x-slot:title>
  This is jobs page
  <br>
  <br><strong>Job titles with salary</strong>
<ol class="list-decimal">
   @foreach ($jobs as $job)
 <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
      <li>{{$job['title']}} Pays <strong>{{$job['salary']}}</strong> per year.</li>
   </a>
   @endforeach

</ol>
</x-layout>