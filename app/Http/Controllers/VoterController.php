<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voter;
use Illuminate\Support\Facades\Validator;

class VoterController extends Controller
{
    public function index()
    {
        $voters = Voter::all();
        return view('voters.index', compact('voters'));
    }

    public function create()
    {
        return view('voters.create');
    }

    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Kolkata');
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required|date|before_or_equal: -18 years',
            'mobile' => 'required',
            'email' => 'required|email|unique:voters,email',
            'address' => 'required',
            'district' => 'required',
            'state' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('voters/create')
            ->withErrors($validator)
                ->withInput();
        }

        Voter::create($request->all());

        return redirect()->route('voters.index')->with('success', 'Voter created successfully.');
    }

    public function show($id)
    {
        $voter = Voter::findOrFail($id);
        return view('voters.show', compact('voter'));
    }

    public function edit($id)
    {
        $voter = Voter::findOrFail($id);
        return view('voters.edit', compact('voter'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required|date',
            'mobile' => 'required',
            'email' => 'required|email|unique:voters,email,' . $id,
            'address' => 'required',
            'district' => 'required',
            'state' => 'required',
        ]);

        $voter = Voter::findOrFail($id);
        $voter->update($request->all());

        return redirect()->route('voters.index')->with('success', 'Voter updated successfully.');
    }

    public function destroy($id)
    {
        $voter = Voter::findOrFail($id);
        $voter->delete();

        return redirect()->route('voters.index')->with('success', 'Voter deleted successfully.');
    }
}
