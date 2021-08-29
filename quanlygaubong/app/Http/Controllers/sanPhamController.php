<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;

class sanPhamController extends Controller
{
    private $sanPham;
    public function __construct(sanpham $sanPham){
        $this->sanPham = $sanPham;
    }
    public function index(){
        $sanPham = $this->sanPham->paginate(3);
        return view('admin.page.sanpham.index',compact('sanPham'));
    }

    public function create(){
        return view('admin.page.sanpham.create');
    }

    public function store(Request $request){
        if($request->hasfile('imgs')){
            $file = $request->file('imgs');
            $file->move('fontends/asset/img',$file->getClientOriginalName());
            $fileUpload = $file->getClientOriginalName();
        }else {
            $fileUpload = '';
        }
        $this->sanPham->create([
            'hinhAnh' => $fileUpload,
            'tenSanPham' => $request->tenSanPham,
            'gia' => $request->gia,
            'kichThuoc' => $request->kichThuoc
        ]);
        return redirect()->route('sanpham.danhsach');
    }

    public function edit($id){
        $sanPham = $this->sanPham->find($id);
        return view('admin.page.sanpham.edit',compact('sanPham'));
    }

    public function update($id,Request $request){

        if($request->hasfile('imgs')){
            $file = $request->file('imgs');
            $file->move('fontends/asset/img',$file->getClientOriginalName());
            $fileUpload = $file->getClientOriginalName();
        }else {
            $fileUpload = $request->input('imgs_old');
        }
        $sanPham = $this->sanPham->find($id)->update([
            'hinhAnh' => $fileUpload,
            'tenSanPham' => $request->tenSanPham,
            'gia' => $request->gia,
            'kichThuoc' => $request->kichThuoc
        ]);
        return redirect()->route('sanpham.danhsach');
    }

    public function delete($id){
        $this->sanPham->find($id)->delete($id);
        return redirect()->route('sanpham.danhsach');
    }
}
