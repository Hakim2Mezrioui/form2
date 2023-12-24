<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PdfFile implements Rule
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
        if (!$value instanceof \Illuminate\Http\UploadedFile) {
            return false;
        }

        return $value->getClientOriginalExtension() === 'pdf';
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The file must be a PDF file.';
    }
}
