<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    public function index()
    {
        $purchases = Purchase::all();
        return view('purchases.index', compact('purchases'));
    }
    public function indexur()
    {
        $purchases = Purchase::all();
        return view('purchases.indexur', compact('purchases'));
    }

    public function show($id)
    {
        $purchase = Purchase::findOrFail($id);
        return view('purchases.show', compact('purchase'));
    }

    public function create()
    {
        return view('purchases.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'user_id' => 'required',
            'total_price' => 'required',
        ]);

        Purchase::create($request->all());
        return redirect()->route('purchases.index')
            ->with('success', 'Purchase created successfully.');
    }

    public function edit($id)
    {
        $purchase = Purchase::findOrFail($id);
        return view('purchases.edit', compact('purchase'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'course_id' => 'required',
            'user_id' => 'required',
            'total_price' => 'required',
        ]);

        $purchase = Purchase::findOrFail($id);
        $purchase->update($request->all());

        return redirect()->route('purchases.index')
            ->with('success', 'Purchase updated successfully.');
    }

    public function destroy($id)
    {
        $purchase = Purchase::findOrFail($id);
        $purchase->delete();

        return redirect()->route('purchases.index')
            ->with('success', 'Purchase deleted successfully.');
    }
}
