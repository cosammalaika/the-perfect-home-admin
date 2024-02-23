<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Activitylog\Models\Activity;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            // Add more validation rules as needed
        ]);

        // Create User
        User::create($request->all());

        // Log Activity
        activity()
            ->causedBy(auth()->user()) // User who performed the action
            ->log('User created: ' . $request->name);

        // Redirect
        return redirect()->route('admin.users.index')->with('success', 'User created successfully');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            // Add more validation rules as needed
        ]);

        // Update User
        $user = User::findOrFail($id);
        $user->update($request->all());

        // Log Activity
        activity()
            ->causedBy(auth()->user()) // User who performed the action
            ->log('User updated: ' . $request->name);

        // Redirect
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        // Find User
        $user = User::findOrFail($id);

        // Delete User
        $user->delete();

        // Log Activity
        activity()
            ->causedBy(auth()->user()) // User who performed the action
            ->log('User deleted' . $user->name);

        // Redirect
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
    }
    public function activate($id)
    {
        $user = User::findOrFail($id);
        $user->is_active = true;
        $user->save();

        // Log Activity
        activity()
            ->causedBy(auth()->user()) // User who performed the action
            ->log('User account activated: ' . $user->name);

        return redirect()->back()->with('success', 'User account activated successfully');
    }

    public function deactivate($id)
    {
        $user = User::findOrFail($id);
        $user->is_active = false;
        $user->save();

        // Log Activity
        activity()
            ->causedBy(auth()->user()) // User who performed the action
            ->log('User account deactivated: ' . $user->name);

        return redirect()->back()->with('success', 'User account deactivated successfully');
    }
}
