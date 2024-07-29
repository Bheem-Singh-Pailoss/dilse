<?php

namespace App\Modules\Users\Http\Controllers\Auth;

use App\Modules\Users\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
  /**
   * Display the email verification prompt.
   * @param Request $request
   * @return RedirectResponse|View
   */
    public function __invoke(Request $request): RedirectResponse|View
    {
        return $request->user('user')->hasVerifiedEmail()
                    ? redirect()->intended('/user')
                    : view('user.auth.verify-email');
    }
}
