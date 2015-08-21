<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\UploadWorker;
use App\Http\Requests;
use Storage;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function __construct( UploadWorker $upload )
    {
        $this->upload = $upload;
    }

    public function uploadJS(Request $request)
    {
        $files = $this->upload->upload( $request->input('file') , public_path('uploads'));

        if($files)
        {
            $array = [
                'success' => true,
                'files'   => $request->input('file'),
                'get'     => $request->all(),
                'post'    => $request->all()
            ];

            return response()->json($array);
        }

        return false;
    }

    public function uploadRedactor(Request $request)
    {
        $files = $this->upload->upload( $request->file('file') , 'uploads');

        if($files)
        {
            $array = array(
                'filelink' => 'uploads/'.$files['name'],
                'filename' => $files['name']
            );

            return response()->json($array);
        }

        return false;
    }

    public function uploadFileRedactor(Request $request)
    {
        $files = $this->upload->upload( $request->file('file') , 'files' );

        if($files)
        {
            $array = array(
                'filelink' => 'files/'.$files['name'],
                'filename' => $files['name']
            );

            return response()->json($array);
        }

        return false;
    }

    public function imageJson()
    {

        $files = Storage::files();

        if(!empty($files))
        {
            foreach($files as $file)
            {
                $data[] = ['image' => url('/').'/uploads/'.$file, 'thumb' => url('/').'/uploads/'.$file, 'title' => $file];
            }
        }

        return response()->json($data);
    }

    public function fileJson()
    {
        $files = Storage::disk('local')->files();
        $data  = [];
        if(!empty($files))
        {
            foreach($files as $file)
            {
                $data[] = ['name' => $file, 'link' => url('/').'/files/'.$file, 'title' => $file];
            }
        }

        return response()->json($data);
    }

}
