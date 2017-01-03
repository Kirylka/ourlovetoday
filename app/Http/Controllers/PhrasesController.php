<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Phrase;
use Illuminate\Http\Request;
use Session;

class PhrasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $phrases = Phrase::paginate(25);

        return view('phrases.index', compact('phrases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('phrases.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Phrase::create($requestData);

        Session::flash('flash_message', 'Phrase added!');

        return redirect('phrases');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $phrase = Phrase::findOrFail($id);

        return view('phrases.show', compact('phrase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $phrase = Phrase::findOrFail($id);

        return view('phrases.edit', compact('phrase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $phrase = Phrase::findOrFail($id);
        $phrase->update($requestData);

        Session::flash('flash_message', 'Phrase updated!');

        return redirect('phrases');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Phrase::destroy($id);

        Session::flash('flash_message', 'Phrase deleted!');

        return redirect('phrases');
    }
}
