<?php namespace App\Controllers;

class UsuariosController
{
    /**
     * Traer una coleccion de registros
     * GET
     *
     * @return void
     */
    public function index()
    {
        return [
            [
                'id' => 1,
                'name' => 'test'
            ],
            [
                'id' => 2,
                'name' => 'test'
            ],
            [
                'id' => 3,
                'name' => 'test'
            ]
        ];
    }

    /**
     * Traer un único registro
     * GET
     * 
     * @param [type] $id
     * @return void
     */
    public function show($id)
    {
        return [
            'id' => $id,
            'name' => 'test'
        ];
    }

    /**
     * Crear un registro
     * POST
     * 
     * @return void
     */
    public function create($usuario)
    {
        return [
            'success' => 'usuario creado',
            'usuario' => $usuario
        ];
    }

    /**
     * Actualizar un registro
     * PUT
     *
     * @return void
     */
    public function update($id, $data)
    {
        return [
            'success' => 'Usuario actualizado',
            'usuario' => [
                'id' => $id,
                'data' => $data
            ]
        ];
    }

    /**
     * Eliminar un registro
     * DELETE
     *
     * @return void
     */
    public function delete($id)
    {
        return [
            'success' => 'Usuario eliminado ' . $id
        ];
    }
}
