<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsers extends FormRequest
{
   /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
       return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:users|max:255',
            'role_id' => 'required',
            'Phone' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|confirmed|min:6',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', //only allow this type extension file.
        ];
    }
}
