<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class BEUserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.user.user', compact('users'));
    }
    public function permission($id){
        session()->put('user_id', $id);
        $user = User::findOrFail($id);
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.user.permission', compact('user','roles','permissions'));
    }
    public function permissionStore(Request $request){
        $user_id = session()->get('user_id');
        $user = User::findOrFail($user_id);
        $user->syncRoles($request->role);
        $user->syncPermissions($request->permission);
        return redirect()->back();
    }

    public function destroy(){
        $user_id = request()->get('user_id');
        User::destroy($user_id);
        return redirect()->back()->with('msg','Xóa thành viên thành công');
    }
}
