<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfirmOrderRequest extends FormRequest
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
            'phone' => 'required|string',
            'address' => 'min:10|string',
            'charge' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'phone.required' => 'ফোন নম্বর বাধ্যতামূলক',
            'phone.string' => 'ফোন নাম্বার টেক্সট হিসেবে দিতে হবে',
            'address.min' => 'আপনার সম্পূর্ণ ঠিকানা লিখুন (জেলা, থানা, গ্রাম, রোড)',
            'charge' => 'আপনার বর্তমান এরিয়া সিলেক্ট করুন'
        ];
    }
}
