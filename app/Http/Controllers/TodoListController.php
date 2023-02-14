<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
use Illuminate\Contracts\View\View;

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
    public function Edit($id){
        return view('edit', ['listItems' => ListItem::where('id', $id)->get()]);
    }
    public function saveItem(Request $request) {
        

        $newListItem = new ListItem;
        $newListItem->name = $request->Item;
        $newListItem->is_complete = 0;
        $newListItem->save();


        return redirect('/');
    }

    public function updateItem(Request $request) {

        $listItem = ListItem::find($request->id);
        $listItem->name = $request->Item;
        $listItem->is_complete = 0;

        $listItem->save();

        return redirect('/');

    }
}