<?php

namespace Todoist\Http\Controllers;

use Todoist\Models\Todo;
use Illuminate\Http\Request;

class TodoController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::query()->orderByDesc('created_at')->paginate();

        return view('todoist::components.table', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
