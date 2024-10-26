<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
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
}
