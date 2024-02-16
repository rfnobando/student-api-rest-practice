<?php

namespace App\Http\Controllers;

use App\Filters\GradeFilter;
use App\Models\Grade;
use App\Http\Requests\StoreGradeRequest;
use App\Http\Requests\UpdateGradeRequest;
use App\Http\Resources\GradeCollection;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new GradeFilter();
        $queryItems = $filter->transform($request);
        $grades = Grade::where($queryItems)->paginate()->appends($request->query());

        return new GradeCollection($grades);
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
    public function store(StoreGradeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grade $grade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGradeRequest $request, Grade $grade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grade $grade)
    {
        //
    }
}
