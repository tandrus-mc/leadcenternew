<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class LeadListController extends Controller
{
    public function __construct(){
        parent::constructWithUserAuth();
    }

    public function index(){

    }

    public function store(Request $request){
        return 'working on it';
    }

    public function create(){
        return view('leadlist.create');
    }

    public function show(){

    }

    public function update(){

    }

    public function edit(){

    }

    public function destroy(){

    }
}
