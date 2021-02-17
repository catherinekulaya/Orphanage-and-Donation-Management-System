<?php

namespace App\Http\Controllers;

use App\RequiredItem;
use Illuminate\Http\Request;

class ItemsRequiredController extends Controller
{
    public function donorRequiredItems()
    {
        $items = RequiredItem::latest()->get();
        return view('user.items-required',  [ 'items' => $items]);
    }

    public function index() {
        $items = RequiredItem::latest()->get();
        return view('itemsrequested', [
          'items' => $items,
        ]);
    }

    public function store() {
        $item = new RequiredItem();
        $item->itemName = request('itemName');
        $item->quantity = request('quantity');
        $item->date = request('date');
        $item->save();

        return redirect('/itemsrequested')->with('response', 'Item Added Successfully');
      }

      public function destroy($id) {
        $item = RequiredItem::findOrFail($id);
        $item->delete();
        return redirect('/itemsrequested')->with('response', 'Item Deleted');;
      }

      public function show($id) {
        $item = RequiredItem::findOrFail($id);
        return view('operations.edit-itemsrequested', ['item' => $item]);
      }

      public function update(Request $request, $id) {
        $item = RequiredItem::find($id);
        $item->itemName = request('itemName');
        $item->quantity = request('quantity');
        $item->date = request('date');
        $item->save();

        return redirect('/itemsrequested')->with('response', 'Item Edited Successfully');

      }
}
