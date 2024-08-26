<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeDataModel;

class homeController extends Controller
{
    //
    public function homePageView() {
        $info = HomeDataModel::all();
        return view('home', compact('info'));
    }

    public function homePageCreate(Request $req) {
        $data = new HomeDataModel();
        $data->fname = $req->firstname;
        $data->email = $req->email;
        $data->save();

        return redirect()->back();
    }

    public function homePageEdit($id) {
        $data_edit = HomeDataModel::findOrFail($id);
        return view('edit', compact('data_edit'));
    }

    public function homePageUpdate($id, Request $req) {
        $data_edit = HomeDataModel::findOrFail($id);
        $data_edit->fname = $req->firstname;
        $data_edit->email = $req->email;
        $data_edit->save();

        return redirect('/');
    } 

    public function homePageDelete($id) {
        $data_edit = HomeDataModel::findOrFail($id);
        $data_edit ->delete();
        return redirect()->back();
    }
}
