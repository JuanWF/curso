<x-layout>
    <x-slot:heading>
      job
    </x-slot:heading>
    <h2>{{ $job['title'] }}</h2>
    <p>{{ $job['salary'] }}</p>
  </x-layout>