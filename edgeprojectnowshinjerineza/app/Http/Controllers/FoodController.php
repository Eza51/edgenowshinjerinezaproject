<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
    public function index()
{
    $foods = Food::paginate(5); // 5 items per page
    return view('admin.foods.index', compact('foods'));
}

    


    // Show the form to create a new food item
    public function create()
    {
        return view('admin.foods.create');
    }

    public function store(Request $request)
{
    // Validate the incoming request data{{-- code by Nowshin Jerin Eza --}}
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Image validation
    ]);

    // Handle the image upload{{-- code by Nowshin Jerin Eza --}}
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('food_images', 'public'); // Store in 'storage/app/public/food_images'
    }

    // Create a new food item
    \App\Models\Food::create([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'image' => $imagePath, // Save image path{{-- code by Nowshin Jerin Eza --}}
    ]);

    return redirect()->route('admin.foods.index')->with('success', 'Food item added successfully!');
}


    // Show the form to edit an existing food item{{-- code by Nowshin Jerin Eza --}}
    public function edit(Food $food)
    {
        return view('admin.foods.edit', compact('food'));
    }

    // Update an existing food item{{-- code by Nowshin Jerin Eza --}}
    public function update(Request $request, \App\Models\Food $food)
{
    // Validate the incoming request data{{-- code by Nowshin Jerin Eza --}}
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Image validation{{-- code by Nowshin Jerin Eza --}}
    ]);

    // Handle the image upload if a new one is provided{{-- code by Nowshin Jerin Eza --}}
    if ($request->hasFile('image')) {
        // Delete the old image if it exists{{-- code by Nowshin Jerin Eza --}}
        if ($food->image) {
            Storage::disk('public')->delete($food->image);
        }
        $food->image = $request->file('image')->store('food_images', 'public');
    }

    // Update the food item
    $food->update([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'image' => $food->image, // Use existing or newly uploaded image{{-- code by Nowshin Jerin Eza --}}
    ]);

    return redirect()->route('admin.foods.index')->with('success', 'Food item updated successfully!');
}


    // Delete a food item{{-- code by Nowshin Jerin Eza --}}
    public function destroy(Food $food)
    {
        $food->delete();

        return redirect()->route('admin.foods.index')->with('success', 'Food item deleted successfully');
    }
}
