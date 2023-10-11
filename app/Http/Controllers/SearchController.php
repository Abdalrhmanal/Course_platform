<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        $searchTerm = $request->input('search'); // الحصول على مصطلح البحث من النموذج الذي تم إرساله

        // قم بتنفيذ عملية البحث على الجلسات باستخدام مصطلح البحث
        $sessions = Session::where('title', 'LIKE', "%$searchTerm%")->get();

        // تحقق مما إذا كان هناك نتائج
        if ($sessions->isEmpty()) {
            return redirect()->route('sessions.index')->with('error', 'No sessions found for your search term.');
        } else {
            // إذا كان هناك نتائج، قم بتوجيه المستخدم إلى الجلسة الأولى مع نتائج البحث
            return redirect()->route('courses.sessions.show', $sessions->first());
        }
    }
}
