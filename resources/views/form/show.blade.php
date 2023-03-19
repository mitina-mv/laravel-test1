@extends('layouts.main')
@section('content')
    <div>{{ $test->name }}</div>
    <div>{{ $test->title }}</div>
    <div>{{ $test->email }}</div>
    <div>{{ $test->isActive }}</div>

    <div class="d-flex mt-3">
        <a class="btn btn-primary me-3" href="{{ route('form.index') }}" role="button">
            Назад
        </a>
        
        <a  class="btn btn-success me-3" href="{{ route('form.edit', $test->id) }}" role="button">
            Редактировать
        </a>
        
        <form action="{{ route('form.delete', $test->id) }}" method="post">
            @csrf
            @method('delete')
            
            <button class="btn btn-danger" type="submit">Удалить</button>
        </form>
    </div>

@endsection