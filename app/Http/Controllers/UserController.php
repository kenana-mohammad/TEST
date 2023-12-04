<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    /**
     * Display all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $users = User::latest()->paginate(10);

        return view('backend.dashborad.users.index', compact('users'));
    }

    /**
     * Show form for creating user
     * 
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        $roles = Role::pluck('name', 'name')->all();

        return view('backend.dashborad.users.create' , compact('roles'));
    }

    /**
     * Store a newly created user
     * 
     * @param User $user
     * @param StoreUserRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(User $user, StoreUserRequest $request) 
    {
        //For demo purposes only. When creating user or inviting a user
        // you should create a generated random password and email it to the user
       $request->validated();
       
    
        $user = new User();
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
       
       // return $input;

        $user = User::create($input);
         $user->assignRole($request->input('role'));
         return redirect()->route('users.index')
           ->with('add', 'User created successfully');
    
       
    }

    /**
     * Show user data
     * 
     * @param User $user
     * 
     * @return \Illuminate\Http\Response
     */
    public function show(string $id) 
    {
        $user = User::find($id);
        return view('backend.dashborad.users.show', compact('user'));
    }
    /**
     * Edit user data
     * 
     * @param User $user
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        // $roles = Role::pluck('name','name')->all();
        // $userRole = $user->roles->pluck('name','name')->all();
    
        return view('backend.dashborad.users.edit',compact('user'));
   

    }

    /**
     * Update user data
     * 
     * @param User $user
     * @param UpdateUserRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(int $id, Request $request) 
    {
        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));

        }
       
    
        $user = User::find($id);

   
       
   
        $user->update($input);
        // DB::table('model_has_roles')->where('model_id',$id)->delete();

       // DB::table('roles')->where('id',$id)->delete();
    
        // $user->assignRole($request->input('role'));
    
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Delete user data
     * 
     * @param User $user
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id) 
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
            ->with('delete', 'User deleted successfully');
    }
}