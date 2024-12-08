@extends('layouts.app')

@section('content')
<div class="container">
    <h1>新しいレシピを追加</h1>
    <form action="{{ route('recipes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">タイトル</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">説明</label>
            <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="ingredients" class="form-label">材料</label>
            <textarea name="ingredients" id="ingredients" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="instructions" class="form-label">作り方</label>
            <textarea name="instructions" id="instructions" class="form-control" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">保存</button>
    </form>
</div>
<!--@endsection-->
