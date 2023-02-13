<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;

class TodoListController extends Controller
{

    public function index(){
        return view('welcome', ['listItems' => ListItem::where('is_complete', 0)->get()]);
    }
    public function complete($id){

        $ListItem = ListItem::find($id);
        $ListItem->is_complete = 1;
        $ListItem->save();

        return redirect('/');
    }
    public function saveItem(Request $request) {
        

        $newListItem = new ListItem;
        $newListItem->name = $request->Item;
        $newListItem->is_complete = 0;
        $newListItem->save();


        return redirect('/');
    }
}
