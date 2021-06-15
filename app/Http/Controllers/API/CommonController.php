<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class CommonController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function download(Request $request)
    {
        //return response()->download(storage_path("app/{$request->route('path1')}/{$request->route('path2')}/{$request->route('filename')}"));
        $filename=$request->route('filename');
        $path = "{$request->route('path1')}/{$request->route('path2')}/{$filename}";
        //$ext = pathinfo($filename, PATHINFO_EXTENSION);
        $type = Storage::mimeType($path);
        return response()->make(file_get_contents(storage_path("app/{$path}")), 200, [
            'Content-Type' => $type,
            'Content-Disposition' => 'inline; filename="' . $filename . '"'
        ]);
    }
}
