<?php

namespace App\Policies;

//use \App\Usuario;
use \App\Aluno;
use Illuminate\Auth\Access\HandlesAuthorization;

class AlunoPolicy
{

    use HandlesAuthorization;

    /**
     * Determine whether the user can view the aluno.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Aluno  $aluno
     * @return mixed
     */
    public function view(Usuario $user, Aluno $aluno)
    {
        //
    }

    /**
     * Determine whether the user can create alunos.
     *
     * @param  \App\Usuario  $user
     * @return mixed
     */
    public function create(Usuario $user) {
        if($user->tipousuario->id === 1){
            return true;
        }
        else{
            return false;
        }
       
    }

    /**
     * Determine whether the user can update the aluno.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Aluno  $aluno
     * @return mixed
     */
    public function update(Usuario $user, Aluno $aluno)
    {
        //
    }

    /**
     * Determine whether the user can delete the aluno.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Aluno  $aluno
     * @return mixed
     */
    public function delete(Usuario $user, Aluno $aluno)
    {
        //
    }

    /**
     * Determine whether the user can restore the aluno.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Aluno  $aluno
     * @return mixed
     */
    public function restore(Usuario $user, Aluno $aluno)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the aluno.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Aluno  $aluno
     * @return mixed
     */
    public function forceDelete(Usuario $user, Aluno $aluno)
    {
        //
    }
}
