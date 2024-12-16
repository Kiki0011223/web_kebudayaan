<?php


namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Default usertype
    $usertype = 'user';

    // Check conditions for specific usertype
    if (
        $request->name === 'proyek_akhir' &&
        $request->email === 'proyek_akhir@gmail.com' 
    ) {
        $usertype = 'admin';
    }

    if ($request->file('image')) {
        $image    = $request->file('image');
        $filename = date('Y-m-d') . $image->getClientOriginalName();
        $path     = 'upload_image/' . $filename;

        Storage::disk('public')->put($path, file_get_contents($image));
    }

    if ($request->file('image')) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $path,
            'usertype' => $usertype,
        ]);
    } else {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $request->image,
            'usertype' => $usertype,
        ]);
    }

    event(new Registered($user));

    // Redirect ke halaman login
    return redirect()->route('login')->with('message', 'Registrasi berhasil! Silakan login untuk melanjutkan.');
    }
}


