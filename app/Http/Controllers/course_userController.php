<?php

namespace App\Http\Controllers;

use App\Models\course_user;
use Illuminate\Http\Request;

class course_userController extends Controller
{
    public function index()
    {
        $purchases = course_user::all();
        return view('purchases.index', compact('purchases'));
    }
    public function indexur()
    {
        $purchases = course_user::all();
        return view('purchases.indexur', compact('purchases'));
    }

    public function show($id)
    {
        $purchase = course_user::findOrFail($id);
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

        course_user::create($request->all());
        return redirect()->route('purchases.index')
            ->with('success', 'Purchase created successfully.');
    }

    public function edit($id)
    {
        $purchase = course_user::findOrFail($id);
        return view('purchases.edit', compact('purchase'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'course_id' => 'required',
            'user_id' => 'required',
            'total_price' => 'required',
        ]);

        $purchase = course_user::findOrFail($id);
        $purchase->update($request->all());

        return redirect()->route('purchases.index')
            ->with('success', 'Purchase updated successfully.');
    }

    public function destroy($id)
    {
        $purchase = course_user::findOrFail($id);
        $purchase->delete();

        return redirect()->route('purchases.index')
            ->with('success', 'Purchase deleted successfully.');
    }
}
