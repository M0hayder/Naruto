<x-layout>
   <x-slot:title>
       Job
      </x-slot:title>
  <div class="block px-4 py-6 border border-gray-300 rounded-lg">
     
     <h2 class="text-lg font-bold">{{$job['title']}}</h2>
   
     <p>This job pays {{$job['salary']}} per year</p>
  </div>
  <p class="mt-4">
     <x-button class="bg-yellow-400 hover:bg-red-300" href='/jobs/edit/{{$job->id}}'>
      Edit
     </x-button>
  </p>
</x-layout>