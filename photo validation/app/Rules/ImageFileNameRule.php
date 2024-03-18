<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\UploadedFile;

class ImageFileNameRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        /** @var UploadedFile $file */
        $file = $value;
        $fileName = $file->getClientOriginalName();
        $fileNameWithoutExtension = explode('.'.$file->getClientOriginalExtension(), $fileName)[0];
        if (substr($fileNameWithoutExtension, 0, 4) !== "File"){
            return false;
        }
        if (is_numeric(substr($fileNameWithoutExtension, 4))) {
            return $value;
        } else {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('image.ImageFileName');
    }
}
