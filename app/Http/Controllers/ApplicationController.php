<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        $application = new Application();
        $application->user_id = Auth::id(); // حفظ رقم المستخدم الحالي
        $application->job_id = $request->job_id; // حفظ رقم الوظيفة
    
        // إذا كان لديك حقول أخرى في النموذج مثل الاسم والبريد والسيرة الذاتية والرسالة
        // يمكنك حفظها بهذا الشكل:
        $application->cover_letter = $request->message; // إذا كان اسم الحقل في النموذج message
        $application->cv = $request->cv; // رابط السيرة الذاتية
    
        $application->save();
    
        // إعادة التوجيه مع رسالة نجاح
        return redirect()->back()->with('success', 'Application submitted successfully');
    }

    public function create($jobId)
    {
        return view('pages.application', ['jobId' => $jobId]);
    }
}