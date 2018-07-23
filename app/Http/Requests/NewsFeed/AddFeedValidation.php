<?php

namespace App\Http\Requests\NewsFeed;

use Illuminate\Foundation\Http\FormRequest;

class AddFeedValidation extends FormRequest
{
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
        return [
            'feed_title' => 'required | max:220',
            'news_feed' => 'required',
            

        ];
    }
}
