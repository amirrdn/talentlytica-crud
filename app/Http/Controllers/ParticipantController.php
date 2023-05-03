<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Clasess\Participants;

use Validator;

class ParticipantController extends Controller
{
    public function __construct()
    {
        $this->particp          = new Participants;
    }
    public function index(Request $request)
    {
        $indexpart              = $this->particp->GetParticipant()->paginate(10);
        return view('index', compact('indexpart'));
    }
    public function create()
    {
        $participant            = null;
        return view('create', compact('participant'));
    }
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'mark_x' => 'required',
            'mark_y' => 'required',
            'mark_z' => 'required',
            'mark_w' => 'required',
        ]);
        if ($validated->fails()) {
            $message = $validated->errors();
            return response()->json($message);
        }
        $insert                 = $this->particp->store($request);
        return response()->json(['msg' => 'Data berhasil disimpan']);
    }
    public function view($id)
    {
        $participant            = $this->particp->GetParticipant()
                                ->find($id);
        return view('view', compact('participant'));
    }
    public function update(Request $request)
    {
        $participantupdate      = $this->particp->update($request);
        return response()->json(['msg' => 'Data berhasil diupdate']);   
    }
    public function destroy(Request $request, $id)
    {
        $participantdelete      = $this->particp->DeleteData($request);

        return  redirect()->back()->with('messages', 'data berhasil dihapus'); 
    }
    public function reportByuser(Request $request)
    {
        $participantarr         = $this->particp->GetParticipant()
                                ->find($request->id);
        return view('report', compact('participantarr'));
    }
}
