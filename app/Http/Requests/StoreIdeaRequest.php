<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIdeaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'description' => ['required', 'min:10', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'description.required' => 'Come on, dude. Gimme something.',
            'description.min' => 'Your idea description must be at least 10 characters long.',
        ];
    }

    protected function passedValidation(): void
    {
        $this->merge([
            'description' => trim($this->description),
        ]);
    }
}