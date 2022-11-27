<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Curriculum;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class CurriculumController extends Controller
{
    public function index(Curriculum $curriculum)
    {
        return view('posts/index')->with(['curriculums' => $curriculum->get()]);
    }

    public function show(Curriculum $curriculum)
    {
        //dd($curriculum->reviews);
        return view('categories/index')->with(['reviews' => $curriculum->reviews, 'curriculum' => $curriculum]);
    }

    public function create(Curriculum $curriculum)
    {
        return view('posts/create')->with(['curricula' => $curriculum->get()]);
    }

    public function store(Review $review, Request $request)
    {
        $input = $request['review'];
        $review['user_id'] = Auth::id();
        $review->fill($input)->save();
        return redirect('/posts/' . $review->id);
    }

    public function edit(Review $review)
    {
        return view('posts/edit')->with(['review' => $review]);
    }

    public function update(Request $request, Review $review)
    {
        $input_review = $request['review'];
        $review->fill($input_review)->save();

        return redirect('/posts/' . $review->id);
    }
    
    public function showReview(Review $review) {
        return view('posts/show')->with(['review' => $review]);
    }


}
