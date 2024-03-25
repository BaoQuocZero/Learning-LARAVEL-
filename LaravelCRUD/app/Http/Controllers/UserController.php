<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\userCRUD;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ma_User)
    {
        $user = userCRUD::findOrFail($ma_User);
        // dd($user);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ma_User)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'ho_Ten' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'hinh_User' => 'nullable|url',
            'ngay_Tao' => 'nullable|date',
        ]);

        // Tìm người dùng cần cập nhật
        $user = userCRUD::findOrFail($ma_User);

        // Cập nhật thông tin người dùng
        $user->ho_Ten = $validatedData['ho_Ten'];
        $user->email = $validatedData['email'];
        $user->hinh_User = $validatedData['hinh_User'];
        $user->ngay_Tao = $validatedData['ngay_Tao'];
        $user->save();

        // Chuyển hướng về trang cần thiết và cung cấp thông báo thành công hoặc lỗi
        return redirect()->route('home')->with('success', 'Thông tin người dùng đã được cập nhật.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}