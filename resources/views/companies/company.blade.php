@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
        <div class="flex items-start justify-between">
            <div>
                <h1 class="text-2xl font-semibold">{{ $company->name }}</h1>
                <p class="text-sm text-gray-600">Email: {{ $company->email }}</p>
            </div>

            <div class="flex flex-col gap-2">
                <a class="px-3 py-2 bg-indigo-600 text-white rounded" href="{{ url('companies/' . $company->id . '/edit') }}">Edit</a>
                <a class="px-3 py-2 border rounded text-gray-700" href="{{ url('companies') }}">Back</a>
            </div>
        </div>

        <div class="mt-6">
            <h2 class="font-medium mb-2">employees</h2>
            <ul class="list-disc pl-5 text-gray-700">
                @foreach($company->Employees as $employee)
                    <li>{{ $employee->name }} ({{ $employee->email }})</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
