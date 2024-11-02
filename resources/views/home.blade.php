<x-layout>
    <x-slot:title>
        Home.
       </x-slot:title>
   This is home page
   <br>
   <br><strong>Job titles</strong>
   @foreach ($jobs as $job)
 
      <li>{{$job['title']}}</li>
   @endforeach
</x-layout>