@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $recipe->title }}</h1>
    <p><strong>説明:</strong> {{ $recipe->description }}</p>
    <p><strong>材料:</strong></p>
    <p>{{ nl2br(e($recipe->ingredients)) }}</p>
    <p><strong>作り方:</strong></p>
    <p>{{ nl2br(e($recipe->instructions)) }}</p>

    <a href="{{ route('recipes.index') }}" class="btn btn-secondary">戻る</a>
</div>
@endsection
