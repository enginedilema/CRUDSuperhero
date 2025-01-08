<?php

namespace App\Http\Controllers;

use App\Models\Lang;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\LangRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class LangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $langs = Lang::paginate();

        return view('lang.index', compact('langs'))
            ->with('i', ($request->input('page', 1) - 1) * $langs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $lang = new Lang();

        return view('lang.create', compact('lang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LangRequest $request): RedirectResponse
    {
        Lang::create($request->validated());

        return Redirect::route('langs.index')
            ->with('success', 'Lang created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $lang = Lang::find($id);

        return view('lang.show', compact('lang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $lang = Lang::find($id);

        return view('lang.edit', compact('lang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LangRequest $request, Lang $lang): RedirectResponse
    {
        $lang->update($request->validated());

        return Redirect::route('langs.index')
            ->with('success', 'Lang updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Lang::find($id)->delete();

        return Redirect::route('langs.index')
            ->with('success', 'Lang deleted successfully');
    }
}
