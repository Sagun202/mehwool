<?php
namespace Bsdev\Theme\Traits;

trait FileUpload
{

    public function uploadFile($destination, $file)
    {
        return $file->store($destination, 'public');
    }
}
