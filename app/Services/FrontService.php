<?php

namespace App\Services;

use App\Models\Students;
use App\Models\Registrations;
use App\Models\Documents;
use App\Models\Payments;
use App\Models\PersonalProgrammer;

class FrontService
{
    /**
     * Mendapatkan data profil siswa berdasarkan ID
     *
     * @param int $studentId
     * @return \App\Models\Student
     */
    public function getStudentProfile(int $studentId)
    {
        return Students::findOrFail($studentId);
    }

    /**
     * Mendapatkan status registrasi siswa berdasarkan ID
     *
     * @param int $studentId
     * @return \App\Models\Registration
     */
    public function getRegistrationStatus(int $studentId)
    {
        return Registrations::where('student_id', $studentId)->latest()->first();
    }

    /**
     * Mendapatkan semua dokumen yang diupload oleh siswa
     *
     * @param int $studentId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getStudentDocuments(int $studentId)
    {
        return Documents::where('student_id', $studentId)->get();
    }

    /**
     * Mendapatkan riwayat pembayaran siswa
     *
     * @param int $studentId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getPaymentHistory(int $studentId)
    {
        return Payments::where('student_id', $studentId)->get();
    }

    /**
     * Mendapatkan data programmer pribadi
     *
     * @param int $programmerId
     * @return \App\Models\PersonalProgrammer
     */
    public function getPersonalProgrammer(int $programmerId)
    {
        return PersonalProgrammer::findOrFail($programmerId);
    }

    /**
     * Mendapatkan daftar semua programmer
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllProgrammers()
    {
        return PersonalProgrammer::all();
    }
}
