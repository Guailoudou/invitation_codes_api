<?php
use App\Services\Hook;
use Blessing\Filter;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events, Filter $filter) {
    //
    Hook::addRoute(function () {
        Route::namespace('InvitationCodes')
            ->middleware([])
            ->prefix('api/invitation-codes')
            ->group(function () {
                Route::get('', 'InvitationCodeControllerApi@list');
                // Route::post('generate', 'InvitationCodeControllerApi@generate');
            });
    });
};
