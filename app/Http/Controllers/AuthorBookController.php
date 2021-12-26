<?php

namespace App\Http\Controllers;

use App\Models\AuthorBook;
use App\Http\Requests\StoreAuthorBookRequest;
use App\Http\Requests\UpdateAuthorBookRequest;

class AuthorBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAuthorBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAuthorBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AuthorBook  $authorBook
     * @return \Illuminate\Http\Response
     */
    public function show(AuthorBook $authorBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuthorBook  $authorBook
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthorBook $authorBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAuthorBookRequest  $request
     * @param  \App\Models\AuthorBook  $authorBook
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAuthorBookRequest $request, AuthorBook $authorBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuthorBook  $authorBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthorBook $authorBook)
    {
        //
    }
}
