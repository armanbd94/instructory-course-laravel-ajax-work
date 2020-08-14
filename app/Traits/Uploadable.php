<?php
namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait Uploadable{

    /************************
     * * Upload File Method * *
     * @params UploadFile $file 
     * @params $folder
     * @params $file_name
     * @params $disk 
     * @return $fileNameToStore
     * *********************/
    public function upload_file(UploadedFile $file, $folder=null, $file_name=null, $disk='public'){
        if(!Storage::directories($disk.'/'.$folder)){
            Storage::makeDirectory($disk.'/'.$folder,0777,true);
        }

        $fileNameWithExtension = $file->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExtension,PATHINFO_EXTENSION);
        $extension = $file->getClientOriginalExtension();
        $fileNameToStore = !is_null($file_name) ? $file_name.'.'.$extension : $fileName.uniqid().'.'.$extension;
        $file->storeAs($folder,$fileNameToStore,$disk);
        return $fileNameToStore;
    }
}