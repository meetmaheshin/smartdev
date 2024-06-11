<?php
namespace App\Http\Traits;
use Image;
use File;

trait FileUploadTrait{

    public function UploadFunction($file,$fkey,$folderName,$type=2)
    {
        $thumbDestinationPath = public_path('/storage/thumbnail/'.$folderName);
        $mainDestinationPath = public_path('/storage/images/'.$folderName);

        File::ensureDirectoryExists($thumbDestinationPath);
        File::ensureDirectoryExists($mainDestinationPath);
        $imagename = time().$fkey.'.'.$file->getClientOriginalExtension();

        if($type==2){
            return $this->UploadImage($file,$imagename,$thumbDestinationPath,$mainDestinationPath);
        }else{
            return $this->UploadFile($file,$imagename,$mainDestinationPath);
        }
        

    }
    public function UploadImage($file,$imagename,$thumbDestinationPath,$mainDestinationPath)
    {
        $img = Image::make($file->getRealPath());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($thumbDestinationPath.'/'.$imagename);
        $file->move($mainDestinationPath, $imagename);
        return $imagename;
    }
    public function UploadFile($file,$imagename,$mainDestinationPath)
    {
        $filePath = $file->move($mainDestinationPath, $imagename);
        return $imagename;
    }
}
?>