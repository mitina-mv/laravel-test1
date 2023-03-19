@extends('layouts.main')
@section('content')
<form action="{{ route('form.store') }}" method='post'>
    @csrf

    <div class="form-group">
        <label for="title">Заголовок</label>
        <input type="text"
            class="form-control"
            id="title"
            name="title"
            placeholder="Заголовок">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email"
            class="form-control"
            id="email"
            name="email"
            placeholder="Email">
    </div>

    <div class="form-group">
        <label for="name">Название</label>
        <input type="text"
            class="form-control"
            id="name"
            name="name"
            placeholder="Название">
    </div>

    <div class="form-check">
        <input type="checkbox"
            class="form-check-input"
            id="isActive"
            name="isActive"
            >
        <label class="form-check-label"
            for="isActive">Активный</label>
    </div>

    <button type="submit"
        class="btn btn-primary">Отправить</button>
</form>
@endsection
