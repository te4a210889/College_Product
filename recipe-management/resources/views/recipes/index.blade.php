@extends('layouts.app')

@section('content')
<div class="container">
    <h1>レシピ一覧</h1>
    <a href="{{ route('recipes.create') }}" class="btn btn-primary">新しいレシピを追加</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>タイトル</th>
                <th>説明</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        @if(isset($recipes))
            @forelse ($recipes as $recipe)
                <tr>
                    <td>{{ $recipe->title }}</td>
                    <td>{{ Str::limit($recipe->description, 50) }}</td>
                    <td>
                        <a href="{{ route('recipes.show', $recipe->id) }}" class="btn btn-info">詳細</a>
                    </td>
                </tr>
            @empty
        @endif
                <tr>
                    <td colspan="3">レシピがありません。</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
