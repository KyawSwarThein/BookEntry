<?php

namespace App\Http\Controllers;

use App\BookEntry;
use Illuminate\Http\Request;

class BookEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookentrys=BookEntry::paginate(5);
        return view("bookentry.index",compact("bookentrys"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("bookentry.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate(BookEntry::$rules);
        // dd("HI");
                BookEntry::create($request->except('_token'));

        return redirect()->route("bookentrys.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BookEntry  $bookEntry
     * @return \Illuminate\Http\Response
     */
    public function show(BookEntry $bookEntry)
    {
        dd($bookEntry);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookEntry  $bookEntry
     * @return \Illuminate\Http\Response
     */
    public function edit(BookEntry $bookentry)
    {
        return view("bookentry.edit",compact("bookentry"));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookEntry  $bookEntry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookEntry $bookentry)
    {
        $request->validate(BookEntry::$rules);
        $bookentry->update($request->except("_token"));
        return redirect()->route("bookentrys.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookEntry  $bookEntry
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookEntry $bookentry)
    {
         $bookentry->delete();
        return redirect()->route("bookentrys.index");
    }
}
