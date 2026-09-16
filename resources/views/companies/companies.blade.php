@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded shadow max-w-3xl mx-auto">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-semibold">Companies</h1>
            <a href="{{ url('companies/create') }}" class="px-3 py-2 bg-indigo-600 text-black rounded">Bedrijf +</a>
        </div>

        <ul class="divide-y">
            @foreach ($companies as $Company)
                <li class="py-3 flex items-center justify-between">
                    <a class="text-indigo-700 hover:underline" href="/companies/{{ $Company->id }}">{{ $Company->name }}</a>
                    <a class="text-indigo-700 hover:underline" href="/companies/{{ $Company->id }}">{{ $Company->email }}</a>
                    <form action="{{ url('companies/' . $Company->id) }}" method="post" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 text-sm hover:text-red-800" type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
