@extends('layouts.main')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Название</th>
                <th scope="col">Title</th>
                <th scope="col">Email</th>
                <th scope="col">IsActive</th>
            </tr>
        </thead>

        <tbody>
            @foreach($tests as $test)
                <tr>
                    <td>{{ $test->id }}</td>
                    <td>
                        <a href="{{ route('form.show', $test->id) }}">
                            {{ $test->name }}
                        </a>
                    </td>
                    <td>{{ $test->title }}</td>
                    <td>{{ $test->email }}</td>
                    <td>{{ $test->isActive }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection