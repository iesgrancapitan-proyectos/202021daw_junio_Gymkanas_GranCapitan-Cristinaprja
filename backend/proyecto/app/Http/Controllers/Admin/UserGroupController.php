<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User_Groups;
use App\Models\User;
use App\Models\Groups;

class UserGroupController extends Controller{
    /**
     * Show all user-group
     * 
     */
    public function all(){
        $users_groups = User_groups::all();
        return view("admin.usersGroups", compact('users_groups'));
    }

    /**
     * Add a new user-group to the DB
     */
    public function add(){
        $users = User::all()->where("perfil", "alumno");
        $groups = Groups::all();
        return view("admin.newUserGroup", compact("users", "groups"));
    }

    /**
     * Create a new user-group.
     *
     * @param  Request $request
     */
    public function create(Request $request){
        User_groups::create([
            'id_user' => $request->id_user,
            'id_group' => $request->id_group,
        ]);
        return redirect("admin/users-groups")->with("status", "Grupo añadido correctamente");
    }

    /**
     * Destroy a user-group
     * 
     * @param Gymkana $gymkana
     */
    public function destroy($id){
        $group =User_groups::find($id);
        $group->delete();
    
        return redirect("admin/users-groups")->with("status", "Grupo de Usuarios eliminado correctamente");
    }
    
    /**
     * Update view for an user-group
     * 
     * @param Request $request
     */
    public function edit(Request $request){
        $id = $request->id;
        return view("admin.updateGroup", compact("id"));
    }
    
    /**
     * Update a group
     * 
     * @param Request $request
     * @param $id
     */
    public function update(Request $request, $id){
        $group = Groups::find($id);
        $group->description = $request->description;
        $group->save();
        return redirect("admin/groups")->with("status", "Grupo modificado correctamente");
    }
}