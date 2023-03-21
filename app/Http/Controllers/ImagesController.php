<?php

namespace App\Http\Controllers;

use OpenAI;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ImagesController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function generate(Request $request)
    {
        //validation
        $request->validate([
            'description' => 'required|string|max:1000',
            'size' => Rule::in(['sm', 'md', 'lg']),
        ]);

        //Get the description
        $description = $request->description;

        //Set the size
        switch ($request->size) {
            case 'lg':
                $size = '1024x1024';
                break;
            case 'md':
                $size = '512x512';    
                break;
            default:
                $size = '256x256';

        }

        //OpenAi client

        $client = OpenAI::client(env('OPEN_AI_KEY'));

        $response = $client->images()->create([
            'prompt' => $description,
            'n' => 1,
            'size' => $size,
            'response_format' => 'url',
        ]);

        $url = $response->toArray()['data'][0]['url'];

        return view('show', compact('url', 'description'));
    }
}
