<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artwork;
use App\Models\Museum;
use Dotenv\Util\Str;
use Illuminate\Http\Request;

class MuseumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $museums = Museum::orderBy('id', 'desc')->paginate(8);
        $direction = 'desc';
        return view('admin.museums.index', compact('museums', 'direction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artworks = Artwork::all();
        return view('admin.museums.create', compact('artworks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $form_data = $request->all();
        $form_data['slug'] = Museum::generateSlug($form_data['name']);

        $new_museum = Museum::create($form_data);

        return redirect()->route('admin.museums.show', $new_museum)->with('create', "Museo $new_museum aggiunto al db.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Museum $museum)
    {
        return view('admin.museums.show', compact('museum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Museum $museum)
    {
        return view('admin.museums.edit', compact('museum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Museum $museum)
    {
        $form_data = $request->all();

        if ($form_data['name'] != $museum->name) {
            $form_data['slug'] = Museum::generateSlug($form_data['name']);
        } else {
            $form_data['slug'] = $museum->slug;
        }

        $museum->update($form_data);

        return redirect(route('admin.museums.show', compact('museum')))->with('edit', "Museo $museum->name aggiornato correttamente.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Museum $museum)
    {
        $museum->delete();

        return redirect(route('admin.museums.index'))->with('delete', "Museo $museum->name eliminato correttamente.");
    }
}
