<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FormsAndDocuments;

class FormsAndDocumentsController extends Controller
{
    // public function saveHtmlCard(Request $request)
    // {
    //     // Retrieve HTML content from the request
    //     $html = $request->input('html');
    //     $unique_id = $request->input('unique_id');

    //     // Create a new instance of the HtmlCard model
    //     $htmlCard = new FormsAndDocuments();
    //     $htmlCard->html_content = $html;
    //     $htmlCard->unique_id = $unique_id;

    //     // Save the HTML card to the database
    //     $htmlCard->save();

    //     // Return a response
    //     return response()->json(['message' => 'HTML card saved successfully']);
    // }

    public function saveHtmlCard(Request $request)
    {
        // Retrieve HTML content from the request
        $html = $request->input('html');

        // Generate a unique ID
        $uniqueId = uniqid();

        // Check if the unique_id already exists in the database
        $existingHtmlCard = FormsAndDocuments::where('unique_id', $uniqueId)->exists();

        // Loop until a unique ID is generated
        while ($existingHtmlCard) {
            $uniqueId = uniqid();
            $existingHtmlCard = FormsAndDocuments::where('unique_id', $uniqueId)->exists();
        }

        // Create a new instance of the HtmlCard model and save it to the database
        $htmlCard = new FormsAndDocuments();
        $htmlCard->html_content = $html;
        $htmlCard->unique_id = $uniqueId;
        $htmlCard->save();

        // Return a success response
        return response()->json(['message' => 'HTML card saved successfully', 'unique_id' => $uniqueId], 200);
    }
}
