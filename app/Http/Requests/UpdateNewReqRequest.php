<?php

namespace App\Http\Requests;

use App\Models\NewReq;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateNewReqRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('new_req_edit');
    }

    public function rules()
    {
        return [
            'model' => [
                'required',
            ],
            'email_id' => [
                'required',
                'integer',
            ],
            'data' => [
                'required',
            ],
            'message' => [
                'string',
                'nullable',
            ],
            'status' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
