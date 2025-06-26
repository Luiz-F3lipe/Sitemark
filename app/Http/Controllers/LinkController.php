<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Models\Link;
use App\Models\User;

class LinkController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLinkRequest $request)
    {
        $data = $request->validated();

        if ($file = $request->photo) {
            $data['photo'] = $file->store('photos');
        }

        /** @var User $user */
        $user = auth()->user();

        $lastLinkSort = $user->links()->max('sort');

        if (!is_null($lastLinkSort)) {
            $data['sort'] = $lastLinkSort + 1;
        }

        $user->links()->create($data);

        return to_route('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {

        $links = Link::all();
        return view('dashboard', [
            'links' => $links,
            'linkEditando' => $link,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLinkRequest $request, Link $link)
    {
        $data = $request->validated();

        if ($file = $request->photo) {
            if ($link->photo) {
                \Storage::delete($link->photo);
            }
            $data['photo'] = $file->store('photos');
        }

        $link->update($data);

        return to_route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        // deletar a imagem do storage
        if ($link->photo) {
            \Storage::delete($link->photo);
        }
        $link->delete();

        return back();
    }

    public function up(Link $link)
    {
        $link->moveUp();
        return back();
    }

    public function down(Link $link)
    {
        $link->moveDown();

        return back();
    }
}
