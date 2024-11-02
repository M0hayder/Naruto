<x-layout>
   <x-slot:title>
       Jobs
      </x-slot:title>
  This is jobs page
  <br>
  <br><strong>Job titles with salary</strong>
<ol>
   @foreach ($jobs as $job)
 <a href="/jobs/{{ $job['id'] }}">
      <li>{{$job['title']}} Pays <strong>{{$job['salary']}}</strong> per year.</li>
   </a>
   @endforeach

</ol>
</x-layout>