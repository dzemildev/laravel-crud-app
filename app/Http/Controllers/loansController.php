<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\loans;

class loansController extends Controller
{
    public function index(){
        

        $loans = loans::all();
        return view('loans.index', ['loans' => $loans]);

    }
    public function create(){
        return view('loans.create');
    }
        
    public function store(Request $request){
            $data = $request->validate([
                'book_id' => 'required',
                'member_id' => 'required',
   
            ]);
            $newLoan = loans::create($data);
            return redirect()->route('loans.index')->with('success', 'Loans created successfully!');
        }
        public function edit(loans $loans){
    
        return view('loans.edit', ['loans' => $loans]);

        }
        public function update(loans $loans, Request $request){
            $data = $request->validate([
                'book_id' => 'required',
                'member_id' => 'required',
            ]);
            $loans->update($data);
            return redirect()->route('loans.index')->with('success', 'Loans updated successfully!');
           
        }
        public function delete(loans $loans){
            $loans->delete();
            return redirect()->route('loans.index')->with('success', 'Loans deleted successfully!');
        }
        public function show($id){

    $loans = loans::findOrFail($id); 
    return view('loans.show', compact('loans')); 
        }
    }