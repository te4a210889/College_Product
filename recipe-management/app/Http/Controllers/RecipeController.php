<?php

namespace App\Http\Controllers;
#require_once 'Recipe.php';
use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth; 

class RecipeController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::all(); // すべてのレシピを取得
        // コントローラー

        // データベースに仮のレシピを挿入
        Recipe::create(['title' => 'Sample Recipe', 'description' => 'This is a test recipe']);

        #return $recipes->get();
        return view('recipes.index', compact('recipes'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recipes.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // バリデーションルールの定義
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'ingredients' => 'required|string',
        'instructions' => 'required|string',
    ]);

    // 現在の認証ユーザーのIDを追加
    $validatedData['user_id'] = Auth::id();

    // レシピの保存
    Recipe::create($validatedData);

    // レシピ一覧へリダイレクト
    return redirect()->route('recipes.index')->with('success', 'レシピが作成されました');
}


    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $recipes = Recipe::findOrFail($id);  // IDに基づいてレシピを取得、なければ404エラー
        return view('recipes.show');
        #return view('recipes.show', compact('recipe'));  // ビューに渡す
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('recipes.edit');
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view('recipes.update');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('recipes.destoroy');
        //
    }
}
