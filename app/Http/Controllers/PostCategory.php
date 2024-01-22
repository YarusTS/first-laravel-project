<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequestCategory;
use App\Models\Create;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;



class PostCategory extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
        return Create::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Factory|Application|View
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequestCategory $request): Create
    {
        $intelligence = $request->validated();

//        $image = $data ['poster'];
//        $imageName = Str::random(40) . '.' . $image->getClientOriginalExtension();
//        $image->move(
//            storage_path() . '/app/public/posts/posters',
//            $imageName
//        );

        $category = new Create();

        $category->name = $intelligence['name'];
        $category->poster = $intelligence['poster'];

        $category->save();

        return $category;
    }

    /**
     * Display the specified resource.
     */
    public function show(Create $category): Create
    {
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Create $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Create $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Create $category): ?bool
    {
        return $category->delete();
    }
}
