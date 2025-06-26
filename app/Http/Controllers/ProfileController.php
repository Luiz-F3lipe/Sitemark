<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('profile', [
            'user' => auth()->user(),
        ]);
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = auth()->user();
        $data = $request->validated();

        if ($request->hasFile('avatar')) {
            if ($user->avatar) {
                \Storage::delete($user->avatar);
            }
            $data['avatar'] = $request->file('avatar')->store('photos');
        }

        $user->update($data);

        return back();
    }
}
