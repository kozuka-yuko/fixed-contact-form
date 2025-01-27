<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AuthController extends Controller
{
    public function admin()
    {
        $contents = Category::all();
        $contacts = Contact::all();
        return view('admin', compact('contents', 'contacts'));
    }

    public function downloadCsv()
    {
        $contacts = Contact::all();
        $csvHeader = ['id', 'first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'category',  'detail', 'created_at'];
        $csvData = $contacts->toArray();

        $response = new StreamedResponse(function () use ($csvHeader, $csvData) {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, $csvHeader);

            foreach ($csvData as $row) {
                fputcsv($handle, $row);
            }

            fclose($handle);
        }, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="contacts.csv"'
        ]);

        return $response;
    }
}
