<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShortRequest;
use App\Models\ShortUrl;
use Illuminate\Support\Str;


class ShortUrlController extends Controller
{
    public function short(ShortRequest $request)
    {
        if ($request->orginal_url) {
            if (auth()->user()) {
                $new_url = auth()->user()->links()->create([
                    'orginal_url' => $request->orginal_url
                ]);
            } else {
                $new_url = ShortUrl::create([
                    'orginal_url' => $request->orginal_url
                ]);
            }
            if ($new_url) {
                $short_url = Str::random(6);
                $new_url->update([
                    'short_url' => $short_url
                ]);
                if (auth()->user()) {
                    return redirect()->to('dashboard/links')->with('success_message', 'your short url: <a href="' . url($short_url) . '" target="_blank">' . url($short_url) . ' </a>');
                }
                return redirect()->back()->with('success_message', 'your short url: <a href="' . url($short_url) . '" target="_blank">' . url($short_url) . ' </a>');
            }
        }
        return back();
    }

    public function show($code)
    {
        $short_url = ShortUrl::where('short_url', $code)->first();
        if ($short_url && !preg_match('/\A\d+\.\d+\z/', $code)) {
            return redirect()->to(url($short_url->orginal_url));
        }
        return redirect()->to(url('/'));
    }
}
