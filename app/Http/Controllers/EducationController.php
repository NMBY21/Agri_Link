<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller

{
  public function show($id)
{
    // Fetch the education record by ID
    $education = Education::findOrFail($id);

    // Return the view for the educational content
    return view('admin.education.show', compact('education'));
}

     public function publicIndex()
{
    // Use paginate to get paginated results
    $educations = Education::paginate(6); // Adjust the number to set how many items per page you want

    // Pass the data to the public view
    return view('admin.education.public_index', compact('educations'));
}

     public function edit($id)
    {
        // Find the education record by ID
        $education = Education::findOrFail($id);

        // Pass the data to the edit view
        return view('admin.education.edit', compact('education'));
    }

    // Update the specified education record in storage
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the existing education record
        $education = Education::findOrFail($id);

        // Update the record's data
        $education->title = $request->input('title');
        $education->content = $request->input('content');

        // Handle file upload if there is an image
        if ($request->hasFile('image')) {
            // Store the new image and update the path
            $education->image = $request->file('image')->store('images', 'public');
        }

        // Save the updated record
        $education->save();

        return redirect()->route('education.index')->with('success', 'Education record updated successfully.');
    }

    // Show the form for creating a new educational record
    public function create()
    {
        return view('admin.education.create');
    }

    // Store a newly created education record in storage
    public function store(Request $request)
    {
        // Validate and save the new education record
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload if there is an image
        $path = $request->hasFile('image') ? $request->file('image')->store('images', 'public') : null;

        Education::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $path,
        ]);

        return redirect()->route('education.index')->with('success', 'Education record created successfully.');
    }

    // Destroy an education record
    public function destroy($id)
    {
        $education = Education::findOrFail($id);
        $education->delete();

        return redirect()->route('education.index')->with('success', 'Education record deleted successfully.');
    }

    public function education(Request $request)
{
    // If you want to paginate the education content
    $educations = Education::paginate(6); // Adjust the number of items per page as needed

    return view('admin.education.public_index', compact('educations'));
}


    // Default: show a list of educations
    }


