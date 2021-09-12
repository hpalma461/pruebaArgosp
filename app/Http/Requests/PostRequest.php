<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //metodo para que el usuario no pueda editar el navegador el id del usuario que
        //se agrega la condicional para que valide que coincida el id con el usuario autentificado
        //preguntar si el valor del caampo user_id coincide con el usuraio autentificado
        
        /* if ($this->user_id == auth()->user()->id) {
            return true;
        }
        else{
            return false;
        } */

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $post = $this->route()->parameter('post');

        //incluir reglas de validacion, si se manda estatus 1 solo leera estas reglas de validacion
        //si la regla de validacion lee el estatus 2 funiona las validaciones con las que vienen en el if de mas abajo
        $rules = [
            'name' =>'required',
            'slug' =>'required|unique:posts',
            'status' => 'required|in:1,2',
            'file' => 'image' //regla de validacion para que solo deje cargar archivos tipo imagen
        ];
        //cuando   queramos editar un registro funciona esta regla de validacion
        if ($post) {
            $rules['slug'] = 'required|unique:posts,slug,' . $post->id;
        }
        //agregar mas reglas de validacion si se selecciona el estatus 2
        if ($this->status == 2) {
            //se agrega un merodo php llamado array_marge para funcionar las reglas de validaciomn
            $rules = array_merge($rules, [
                'category_id' => 'required',
                'tags' => 'required',
                'extract' => 'required',
                'body' => 'required',
            ]);
        }

        //vamos a pediur que nos retorne las reglas de validacion
        return $rules;
    }
}
