<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class quantrivienController extends Controller
{
    private $quanTriVien;
    public function __construct(user $quanTriVien){
        $this->quanTriVien = $quanTriVien;
    }
    public function index(){
        $quanTriVien = $this->quanTriVien->all();
        return view('admin.page.quantrivien.index',compact('quanTriVien'));
    }

    public function store(Request $request){
        $this->quanTriVien->FirstOrCreate([
            'userName' => $request->userName,
            'password' => bcrypt($request->password),
            'show_pass' => $request->password,
            'tenNguoiDung' => $request->tenNguoiDung,
        ]);
        return redirect()->route('quantrivien.danhsach');
    }

    public function edit($id){
        $quanTriVien = $this->quanTriVien->find($id);
        return view('admin.page.quantrivien.edit',compact('quanTriVien'));
    }

    public function update($id,Request $request){
        $this->quanTriVien->find($id)->update([
            'userName' => $request->userName,
            'password' => bcrypt($request->password),
            'show_pass' => $request->password,
            'tenNguoiDung' => $request->tenNguoiDung,
        ]);
        return redirect()->route('quantrivien.danhsach');
    }

    public function delete($id){
        $this->quanTriVien->find($id)->delete();
        return redirect()->route('quantrivien.danhsach');
    }
}
