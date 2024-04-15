<?php

namespace App\Http\Controllers;

use App\Models\AvaDocs;
use DateTime;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function responseData($success, $message, $data, $statusCode)
    {
        $response = [
            'success' => $success,
            'message' => $message,
            'data' => $data,
            'statusCode' => $statusCode
        ];

        return response()->json($response, $statusCode);
    }

    function customFileUpload($file)
    {
        $data = [];
        $allowedfileExtensions = ['jpeg', 'jpg', 'png', 'pdf'];
        $fileSize = $file->getSize();
        $fileType = $file->extension();
        $filename = time() . rand(1000, 9999) . $file->getClientOriginalName();
        $check = in_array($fileType, $allowedfileExtensions);
        if ($check) {
            $path = public_path() . '/assets/files/';
            $file->move($path, $filename);
            $actualImagePath = '/assets/files/' . $filename;
            $data = [
                'filename' =>  $filename,
                'fileType' =>   $fileType,
                'fileSize' =>  $fileSize,
                'actualImagePath' => $actualImagePath
            ];
        }

        return $data;
    }

    public function deleteFile($filename)
    {
        $fileRecord = AvaDocs::where('filename', $filename)->first();
        $replaceLocalImage = public_path() . $fileRecord->path;
        if (file_exists($replaceLocalImage) && is_file($replaceLocalImage)) {
            $response = unlink($replaceLocalImage);
            if ($response) {
                $fileRecord->delete();
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function unlinkFile($path)
    {
        $replaceLocalImage = public_path() . $path;
        if (file_exists($replaceLocalImage) && is_file($replaceLocalImage)) {
            $response = unlink($replaceLocalImage);
            if ($response) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
