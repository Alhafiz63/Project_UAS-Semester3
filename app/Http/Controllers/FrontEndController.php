<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\Registrations;
use App\Models\Documents;
use App\Models\Payments;
use App\Models\PersonalProgrammer;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    // Formulir pendaftaran siswa
    public function showRegistrationForm()
    {
        return view('front.registration');
    }

    // Proses pendaftaran siswa
    public function processRegistration(Request $request)
    {
        $validated = $request->validate([
            'registration_number' => 'required|unique:students',
            'name' => 'required',
            'gender' => 'required',
            'birth_date' => 'required|date',
            'birth_place' => 'required',
            'address' => 'required',
            'phone' => 'nullable',
            'email' => 'required|email|unique:students',
            'previous_school' => 'nullable',
            'parent_name' => 'required',
            'parent_contact' => 'nullable',
        ]);

        $student = Students::create($request->all());
        Registrations::create([
            'student_id' => $student->id,
            'program_choice' => $request->input('program_choice', 'science'),
        ]);

        return redirect()->route('registration.status', ['id' => $student->id])
            ->with('success', 'Registration successful!');
    }

    // Cek status pendaftaran
    public function checkRegistrationStatus($id)
    {
        $registration = Registrations::where('student_id', $id)->firstOrFail();
        return view('front.registration-status', compact('registration'));
    }

    // Formulir untuk upload dokumen
    public function showDocumentUploadForm($id)
    {
        return view('front.upload-documents', ['student_id' => $id]);
    }

    // Proses unggah dokumen
    public function processDocumentUpload(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'document_type' => 'required|in:birth_certificate,report_card,photo,other',
            'file_path' => 'required|file|max:2048',
        ]);

        $path = $request->file('file_path')->store('documents');
        Documents::create([
            'student_id' => $request->input('student_id'),
            'document_type' => $request->input('document_type'),
            'file_path' => $path,
        ]);

        return back()->with('success', 'Document uploaded successfully!');
    }

    // Formulir pembayaran
    public function showPaymentForm($id)
    {
        return view('front.payment', ['student_id' => $id]);
    }

    // Proses pembayaran
    public function processPayment(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'amount' => 'required|numeric|min:1',
            'receipt_path' => 'nullable|file|max:2048',
        ]);

        $path = $request->file('receipt_path') ? $request->file('receipt_path')->store('receipts') : null;
        Payments::create([
            'student_id' => $request->input('student_id'),
            'amount' => $request->input('amount'),
            'status' => 'pending',
            'receipt_path' => $path,
        ]);

        return back()->with('success', 'Payment submitted successfully!');
    }

    
    public function index()
    {
        return view('front.index');
    }

    public function showAbout()
{
    // Ambil dua programmer pertama dari tabel PersonalProgrammer
    $programmers = PersonalProgrammer::take(2)->get();

    // Kembalikan data programmer ke view 'front.about'
    return view('front.about', compact('programmers'));
}


}
