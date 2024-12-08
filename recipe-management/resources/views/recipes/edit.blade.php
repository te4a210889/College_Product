@extends('layouts.app')

@section('content')
<div class="container">
    <h1>レシピ編集</h1>
    <form action="{{ route('recipes.update', $recipe->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">タイトル</label>
            <input type="text" name="title" id="title" value="{{ $recipe->title }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">説明</label>
            <textarea name="description" id="description" class="form-control" rows="3" required>{{ $recipe->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="ingredients" class="form-label">材料</label>
            <textarea name="ingredients" id="ingredients" class="form-control" rows="3" required>{{ $recipe->ingredients }}</textarea>
        </div>

        <div class="mb-3">
            <label for="instructions" class="form-label">作り方</label>
            <textarea name="instructions" id="instructions" class="form-control" rows="5" required>{{ $recipe->instructions }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">更新</button>
    </form>
</div>
@endsection
