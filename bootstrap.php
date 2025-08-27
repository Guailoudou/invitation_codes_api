<?php
use App\Services\Hook;
use Blessing\Filter;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events, Filter $filter) {
    //
    Hook::addRoute(function (): void {
        Route::namespace('InvitationCodeControllerApi')
            ->middleware([])
            ->prefix('api/invitation-codes')
            ->group(function () {
                Route::get('', 'Controller@list');
                // Route::post('generate', 'InvitationCodeControllerApi@generate');
            });
    });
};
