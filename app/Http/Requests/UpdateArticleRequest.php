<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "category_id" => "required",
            "title" => "required",
            "body" => "required",
            "img" => "image|file|mimes:png,jpg|max:2024|nullable",
            "tag" => "nullable",
            "status" => "required",
            "publish_date" => "required"
        ];
    }
}
