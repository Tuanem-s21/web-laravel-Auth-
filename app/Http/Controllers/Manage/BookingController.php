<?php

namespace App\Http\Controllers\Manage;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function index(){
        return view('booking.index');
    }
    public function create(){
        return view('booking.create');
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
