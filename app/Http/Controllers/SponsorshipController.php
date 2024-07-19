<?php

namespace App\Http\Controllers;

use App\Models\Sponsorship; 
use Illuminate\Http\Request;
use App\Http\Requests\SponsorshipRequest;

class SponsorshipController extends Controller
{
    public function index()
    {
        $sponsorships = Sponsorship::all(); // Fetch all records from the Sponsorship model
        return view('sponsorship/sponsorship', compact('sponsorships')); // Pass the data to the view
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'asal_proposal' => 'required|string',
            'judul_proposal' => 'required|string',
            'waktu_masuk' => 'required|date',
            'waktu_diterima' => 'required|date',
            'approved' => 'required|boolean',
            'disposisi' => 'required|string',
            'nilai_diajukan' => 'required|string',
            'nilai_diterima' => 'required|string',
            'jumlah' => 'required|string',
            'evidence_file' => 'required|mimes:csv,doc,docx,jpeg,png,jpg,txt,xlx,xls,pdf|max:2048',
        ]);

        if ($request->hasFile('evidence_file')) {
            $fileName = time().'_'.$request->file('evidence_file')->getClientOriginalName();
            $filePath = $request->file('evidence_file')->storeAs('uploads', $fileName, 'public');

            $validatedData['evidence_file'] = $filePath; 
        }

        Sponsorship::create($validatedData);

        return redirect()->route('sponsorship.index')->with('success', 'Sponsorship created successfully.');
    }

    public function destroy(Sponsorship $sponsorship)
    {
        $sponsorship->delete();
        return redirect('/sponsorship')->with("success", "Sponsorship has been deleted!");
    }

    public function edit(Sponsorship $sponsorship)
    {
        return view('sponsorship.edit', compact('sponsorship'));
    }

    public function update(Request $request, Sponsorship $sponsorship)
    {
        $validatedData = $request->validate([
            'asal_proposal' => 'required|string',
            'judul_proposal' => 'required|string',
            'waktu_masuk' => 'required|date',
            'waktu_diterima' => 'required|date',
            'approved' => 'required|boolean',
            'disposisi' => 'required|string',
            'nilai_diajukan' => 'required|string',
            'nilai_diterima' => 'required|string',
            'jumlah' => 'required|string',
            'evidence_file' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);
    
        if ($request->hasFile('evidence_file')) {
            $fileName = time().'_'.$request->file('evidence_file')->getClientOriginalName();
            $filePath = $request->file('evidence_file')->storeAs('uploads', $fileName, 'public');

            $validatedData['evidence_file'] = $filePath; 
        }

        $sponsorship->update($validatedData);

        return redirect()->route('sponsorship.index')->with('success', 'Sponsorship updated successfully.');
    }

    // public function filterData(Request $request)
    // {
    //     $days = $request->query('days');
    //     $filteredData = Sponsorship::where('created_at', '>=', now()->subDays($days))->get();

    //     return response()->json($filteredData);
    // }
    
    // public function searchByDateRange(Request $request)
    // {
    //     $startDate = $request->input('start');
    //     $endDate = $request->input('end');

    //     // Example: Query your database to fetch data based on date range
    //     $results = YourModel::whereBetween('waktu_diterima', [$startDate, $endDate])->get();

    //     return response()->json($results);
    // }


}

