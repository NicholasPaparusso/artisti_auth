<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArtistRequest;
use App\Models\Artist;
use App\Models\Artwork;
use App\Models\Museum;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artist::orderBy('name')->paginate(5);
        return view('admin.artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artworks = Artwork::all();
        return view('admin.artists.create', compact('artworks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ArtistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtistRequest $request)
    {
        $form_data = $request->all();
        $form_data['slug'] = Artist::generateSlug($form_data['name']);

        $new_artist = Artist::Create($form_data);

        if (array_key_exists('artworks', $form_data)) {
            $new_artist->artworks()->attach($form_data['artworks']);
        }

        return redirect()->route('admin.artists.show', $new_artist);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artist = Artist::findOrFail($id);
        return view('admin.artists.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        $artworks = Artwork::all();
        return view('admin.artists.edit', compact('artist', 'artworks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\ArtistRequest  $ArtistRequest
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArtistRequest $request, Artist $artist)
    {
        $form_data = $request->all();

        if ($form_data['name'] != $artist->name) {
            $form_data['slug'] = Artist::generateSlug(($form_data['name']));
        } else {
            $form_data['slug'] = $artist->slug;
        }

        $artist->update($form_data);
        /*
        if (array_key_exists('artworks', $form_data)) {
            $artist->artworks()->sync($form_data['artworks']);
        } else {
            $artist->artworks()->detach();
        } */

        return redirect()->route('admin.artists.show', $artist);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();
        return redirect()->route('admin.artists.index')->with('deleted', "$artist->name eliminato correttamente");
    }
}
