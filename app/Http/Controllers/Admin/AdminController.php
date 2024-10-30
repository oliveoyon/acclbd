<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\FAQ;
use App\Models\Gallery;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.home');
    }



    public function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:4|max:8'
        ], [
            'email.exists' => 'This email is not in db'
        ]);

        $creds = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->route('admin.login')->with('fail', 'Credential fails');
        }
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'cur_pass' => 'required|min:4|max:8',
            'new_pass' => 'required|min:4|max:8',
            'cnew_pass' => 'required|min:4|max:8|same:new_pass',
        ], [
            'cnew_pass.same' => 'Hello',
        ]);


        $data = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        if (\Hash::check($request->cur_pass, $data->password)) {
            $user = Admin::find($data->id);
            $user->password = \Hash::make($request->new_pass);
            $user->pin = '';
            $user->verify = 1;
            $user->update();
            return redirect()->back()->with('success', 'পাসওয়ার্ড সফলভাবে পরিবর্তন হয়েছে');
        } else {
            return redirect()->back()->with('fail', 'Fails');
        }
    }

    function logout()
    {
        //Auth::logout(); it will also work, or we can specify like bellow line as guard name
        Auth::guard('admin')->logout();
        return redirect('/');
    }

    public function basicInfo()
    {
        $send['information'] = Information::first();
        return view('dashboard.admin.editinfo', $send);
    }

    public function update(Request $request)
    {
        DB::beginTransaction();

        try {
            // Retrieve the information ID from the hidden input
            $id = $request->input('id');

            // Find the specific Information record
            $information = Information::findOrFail($id);

            // Update the fields with the new data from the form
            $information->title = $request->input('title');
            $information->home_title = $request->input('home_title');
            $information->home_title_short_description = $request->input('home_title_short_description');
            $information->last_match_result = $request->input('last_match_result');
            $information->last_match_result_short_desc = $request->input('last_match_result_short_desc');
            $information->about_main = $request->input('about_main');
            $information->mission = $request->input('mission');
            $information->vision = $request->input('vision');
            $information->values = $request->input('values');
            $information->upcoming_match = $request->input('upcoming_match');
            $information->upcoming_match_short_desc = $request->input('upcoming_match_short_desc');
            $information->gallery = $request->input('gallery');
            $information->gallery_short_desc = $request->input('gallery_short_desc');
            $information->ready_to_play = $request->input('ready_to_play');
            $information->ready_to_play_short_desc = $request->input('ready_to_play_short_desc');
            $information->meet_the_teams = $request->input('meet_the_teams');
            $information->meet_the_team_short_desc = $request->input('meet_the_team_short_desc');
            $information->testimonial = $request->input('testimonial');
            $information->testimonial_short_desc = $request->input('testimonial_short_desc');
            $information->address = $request->input('address');
            $information->phone = $request->input('phone');
            $information->email = $request->input('email');
            $information->footer_short_desc = $request->input('footer_short_desc');
            $information->footer_text = $request->input('footer_text');

            // Save the updated information
            $information->save();

            DB::commit();

            return redirect()->back()->with('success', 'Information updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }



    public function galleryIndex()
    {
        $images = Gallery::all(); // Fetch all images
        return view('dashboard.gallery.index', compact('images')); // Pass images to the view
    }

    // Show the form for creating a new image
    public function create()
    {
        return view('admin.gallery.create'); // Return the view for creating an image
    }

    // Store a newly created image in the gallery
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'orientation' => 'required|in:landscape,portrait',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Store the image file and save path to database
        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('gallery', 'public');
            Gallery::create([
                'image_path' => $imagePath,
                'orientation' => $request->orientation,
                'title' => $request->title,
                'description' => $request->description,
                'status' => $request->status ?? 1, // Default to active if not provided
            ]);
        }

        return redirect()->route('admin.galleryIndex')->with('success', 'Image added successfully.');
    }

    // Delete the specified image from the gallery
    public function destroy($id)
    {
        $image = Gallery::findOrFail($id); // Find the image by ID

        // Delete the image file from storage
        if ($image->image_path && \Storage::disk('public')->exists($image->image_path)) {
            \Storage::disk('public')->delete($image->image_path);
        }

        $image->delete(); // Delete the image record from the database
        return redirect()->route('admin.galleryIndex')->with('success', 'Image deleted successfully.');
    }

    public function faqList()
    {
        $faqs = Faq::all();
        return view('dashboard.faq.faq-list', compact('faqs'));
    }

    // Show form to create new FAQ
    public function faqCreate()
    {
        return view('dashboard.faq.faq-create');
    }

    // Store a new FAQ in the database
    public function faqStore(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string'
        ]);

        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer
        ]);

        return redirect()->route('admin.faqs.faq-list')->with('success', 'FAQ created successfully.');
    }

    // Show a single FAQ
    public function faqShow(Faq $faq)
    {
        return view('dashboard.faq.faq-show', compact('faq'));
    }

    // Show form to edit an existing FAQ
    public function faqEdit(Faq $faq)
    {
        return view('dashboard.faq.faq-edit', compact('faq'));
    }

    // Update an existing FAQ
    public function faqUpdate(Request $request, Faq $faq)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string'
        ]);

        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer
        ]);

        return redirect()->route('admin.faqs.faq-list')->with('success', 'FAQ updated successfully.');
    }

    // Delete an FAQ
    public function faqDelete(FAQ $faq)
    {
        $faq->delete();

        return redirect()->route('admin.faqs.faq-list')->with('success', 'FAQ deleted successfully.');
    }
}
