<?php

use App\Paintings;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('painting.{painting_id}.messages', function ($user, $painting_id) {
    // return (int) $user->id === (int) $id;
    // return $user;
    $painting = Paintings::where('id', $painting_id)->first();
    if ((int) $user->id === (int) $painting->owner_id || (int) $user->id === (int) $painting->bidder_id) {
        return $user;
    }
});
