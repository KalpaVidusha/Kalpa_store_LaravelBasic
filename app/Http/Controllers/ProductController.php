<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Show the list of all products 
    public function index() {
        $products = Product::all(); 
        return view('products.index', compact('products'));
    }

    // Just show the form to add a new product 
    public function create() {
        return view('products.create');
    }

    // Handle saving the form data to the database 
    public function store(Request $request) {
        // Check if the inputs are valid and meet requirements 
        $data = $request->validate([
            // Only allow letters and spaces for names and categories
            'name'     => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255', 
            'category' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255', 
            'price'    => 'required|numeric|min:0.01', 
            'quantity' => 'required|integer|min:1',  

            // Custom messages for the red error display in the UI 
            'name.regex'       => 'Product Name must contain only letters.',
            'category.regex'   => 'Category must contain only letters.',
            'price.numeric'    => 'Price must be a valid number.',
            'quantity.integer' => 'Quantity must be a whole number.',
        ]);

        // Create the record in MySQL poducts table 
        Product::create($data);

        // success message
        return redirect()->route('products.index')
                        ->with('success', 'Product added successfully!');
    }
}