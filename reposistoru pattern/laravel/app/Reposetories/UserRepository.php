<?php
namespace App\Reposetories;

use App\Models\User;
use App\Reposetories\UserRepotisoryInterface;
class UserRepository implements UserRepotisoryInterface
{
    protected $model;

    public function __construct(User $user){
        $this->model = $user;
    }

    public function getAllUsers(){
        return $this->model->all();
    }

    public function getUserById($id){
        return $this->model->findOrFail($id);
    }

    public function createUser(array $data){
        return $this->model->create($data);
    }

    public function updateUser($id,array $data){
        $user = $this->model->findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function deleteUser($id){
        $user = $this->model->findOrFail($id);
        $user->delete();
        return $user;
    }

}

?>