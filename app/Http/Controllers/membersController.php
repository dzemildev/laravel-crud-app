<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\members;
class membersController extends Controller
{
    public function index(){
        

        $members = members::all();
        return view('members.index', ['members' => $members]);

    }
    public function create(){
        return view('members.create');
    }
        
    public function store(Request $request){
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'l_name' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'phone' => 'required|numeric',
   
            ]);
            $newMember = members::create($data); /*moguce da ce trebat korekcija*/
            return redirect()->route('members.index')->with('success', 'Member created successfully!');
        }
        public function edit(members $members){
    
        return view('members.edit', ['members' => $members]);

        }
        public function update(members $members, Request $request){
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'l_name' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'phone' => 'required|numeric',
            ]);
            $members->update($data);
            return redirect()->route('members.index')->with('success', 'Member data updated successfully!');
           
        }
        public function delete(members $members){
            $members->delete();
            return redirect()->route('members.index')->with('success', 'Member deleted successfully!');
        }
    }