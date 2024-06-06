<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class MusicaUpdateRequest extends FormRequest
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
            'titulo'=>'required|max:120||',
            'duracao'=>'required|numeric',
            'artista'=>'required|max:120|',
            'genero'=>'required|max:120|',
            'nacionalidade'=>'required|max:120|',
            'ano_lancamento'=>'required|date',
            'album'=>'max:120|'
        ];
    }

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()
        ]));
    }

    public function messages()
    {
        return[
        'titulo.required' => 'O título é obrigatório',
        'titulo.max' => 'O título deve conter no máximo 120 caracteres',        
        'duracao.required' => 'A duração é obrigatória',
        'duracao.numeric' => 'A duração deve ser em minutos. Ex: 60 = 1 hora',
        'artista.required' => 'O artista é obrigatório',
        'artista.max' => 'O artista deve conter no máximo 120 caracteres',
        
        'genero.required' => 'O gênero é obrigatório',
        'genero.max' => 'O gênero deve conter no máximo 120 caracteres',
        
        'nacionalidade.required' => 'A nacionalidade é obrigatória',
        'nacionalidade.max' => 'A nacionalidade deve conter no máximo 120 caracteres',
       
        'ano_lancamento.required' => 'O ano de lançamento é obrigatório',
        'ano_lancamento.date' => 'O formato do ano do lançamento é inválido',
        'album.max' => 'O álbum deve conter no máximo 120 caracteres',
       
        ];
    }
}
