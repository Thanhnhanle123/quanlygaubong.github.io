<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;
class fontendController extends Controller
{
    private $sanPham;
    public function __construct(sanpham $sanPham){
        $this->sanPham = $sanPham;
    }
    public function index(){
        $sanPham = $this->sanPham->all();
        return view('fontEnd.index',compact('sanPham'));
    }
}
