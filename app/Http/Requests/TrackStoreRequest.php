<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class TrackStoreRequest extends FormRequest
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
            'album_id' => 'string', 
            'album_title' => 'string',
            'artist' => 'string',
            'former_id' => 'string',
            'title' => 'string',
            'track_number' => 'string',
            'track_length' => 'string',
            'library' => 'string',
            'library_id' => 'string',
            'library_track_status' => 'string',
            'explicit' => 'numeric',
            'suggestive' => 'numeric',
            'offensive' => 'numeric',
            'profanity' => 'numeric',
            'labels' => 'string',
            'genres' => 'string',
            'tags' => 'string',
            'bpm' => 'numeric',
            'search_tags' => 'string'        
        ];
    }

     /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'album_id.required' => 'Name is required!', 
            'album_title.required' => 'Name is required!',
            'artist.required' => 'Name is required!',
            'former_id.required' => 'Name is required!',
            'title.required' => 'Name is required!',
            'track_number.required' => 'Name is required!',
            'track_length.required' => 'Name is required!',
            'library.required' => 'Name is required!',
            'library_id.required' => 'Name is required!',
            'library_track_status.required' => 'Name is required!',
            'explicit.required' => 'Name is required!',
            'suggestive.required' => 'Name is required!',
            'offensive.required' => 'Name is required!',
            'profanity.required' => 'Name is required!',
            'labels.required' => 'Name is required!',
            'genres.required' => 'Name is required!',
            'tags.required' => 'Name is required!',
            'bpm.required' => 'Name is required!',
            'search_tags.required' => 'Name is required!'
        ];
    }
}