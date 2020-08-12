<?php

namespace App\Http\Requests;

use App\Rules\StrongPassword;
use App\Rules\ValidMobileNumber;
use App\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserFormRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'status'=>false,
                'errors'=> $validator->errors()
            ],200)
        );
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = User::VALIDATION_RULES;
        if(request()->update_id){
            $rules['email'][2] = 'unique:users,email,'.request()->update_id;
            $rules['mobile_no'][2] = 'unique:users,mobile_no,'.request()->update_id;
        }
        $rules['password'][3] = new StrongPassword;
        $rules['mobile_no'][3] = new ValidMobileNumber;
        return $rules;
    }
}
