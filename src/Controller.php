<?php

namespace InvitationCodeControllerApi;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Support\Facades\DB;


class Controller extends BaseController
{
    public function list()
    {
        $free = DB::table('invitation_codes')->where('used_by', 0)->get();
        $used = DB::table('invitation_codes')->where('used_by', '<>', 0)->get();

        return response()->json()->setContent(compact('free', 'used'));
    }
}
