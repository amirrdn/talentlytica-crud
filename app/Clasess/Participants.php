<?php

namespace App\Clasess;

use Illuminate\Http\Request;

use App\Models\MParticipant;


class Participants {

    public function GetParticipant()
    {
        return MParticipant::query();
    }
    public function store(Request $request)
    {
        $particip               = new MParticipant;

        $particip->name         = $request->name;
        $particip->email        = $request->email;
        $particip->mark_x       = $request->mark_x;
        $particip->mark_y       = $request->mark_y;
        $particip->mark_z       = $request->mark_z;
        $particip->mark_w       = $request->mark_w;

        $particip->save();
        return $particip;
    }
    public function update(Request $request)
    {
        $particip               = MParticipant::find($request->id);

        $particip->name         = $request->name;
        $particip->email        = $request->email;
        $particip->mark_x       = $request->mark_x;
        $particip->mark_y       = $request->mark_y;
        $particip->mark_z       = $request->mark_z;
        $particip->mark_w       = $request->mark_w;

        $particip->save();
        return $particip;
    }
    public function DeleteData(Request $request)
    {
        $particip               = MParticipant::FindOrFail($request->id);
        if($particip){
            $particip->delete();
        }
    }
}