<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ExpenseRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'expense' => ['required', 'string'],
            'amount' => ['required', 'numeric'],
            'entry_date' => ['required', 'date'],
            'description' => ['required', 'string'],
            'user_id' => ['required', 'numeric'],
            'expense_category_id' => ['required', 'numeric']
        ];
    }
}
