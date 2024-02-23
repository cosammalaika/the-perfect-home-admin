<?php


namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class InactiveUserException extends Exception
{
    public function render(Request $request): RedirectResponse
    {
        return redirect()->route('login')->with('error', $this->getMessage());
    }
}
