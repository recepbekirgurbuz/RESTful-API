<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return $messages;
    }

    public function store(Request $request)
    {
        $message = new Message();
        $message->sender = $request->sender;
        $message->receiver = $request->receiver;
        $message->text = $request->text;
        $message->save();
    }

    public function show($id)
    {
        $message = Message::findOrFail($id);
        // $message = Message::find($id); // ikiside sorunsuz çalışıyor
        return $message;
    }

    public function update(Request $request, $id)
    {
        $message = Message::findOrFail($id);
        $message->sender = $request->sender;
        $message->receiver = $request->message;
        $message->text = $request->message;
        // $message->save(); // ikiside sorunsuz çalışıyor
        $message->update($request->all());
        return $message;
    }

    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        return $message;
    }
}
