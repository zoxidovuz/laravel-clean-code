<?php

declare(strict_types=1);

namespace App\Http\Requests\Api\V1\Posts;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
                'unique:posts,title' . $this->get('key'),
                'max:255'
            ],
            'body' => 'nullable|string',
            'description' => 'nullable|string|max:120',
            'published' => 'nullable|boolean',
        ];
    }
}
