<?php

namespace App\Http\Controllers\Manage;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        return view('category.index');
    }

    public function create(){
        return view('category.create');
    }

    public function store(StoreRequest $request){

    }

    public function edit($id){

    }
    
    public function update(UpdateRequest $request, $id){

    }

    public function remove($id){

    }
}
