<?php

namespace App\Http\ServiceTraits;

trait EditorsService {
    public string $name     = '';
    public string $email    = '';
    public string $phone    = '';
    public string $city     = '';
    public string $address  = '';
    public string $state    = '';
    public string $password = '';
    public $roleOption      = ['Editor', 'Admin'];
    public $statusOption    = ['pending', 'Allow'];
    public int $editorsId;
    public int $selectedRole;
    public int $selectedStatus;

    protected function rules() {
        if ($this->pageUrl == 'update') {
            $rulesForUpdate = [
                'name'    => 'required|string|max:255',
                'email'   => 'required|email|max:255',
                'phone'   => 'required|string|max:11',
                'city'    => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'state'   => 'required|string|max:255',
            ];
            !empty($this->password) ? $rulesForUpdate['password'] = 'required|string|min:8' : null;
            return $rulesForUpdate;
        } else {
            return [
                'name'     => 'required|string|max:255',
                'email'    => 'required|email|unique:editors,email|max:255',
                'phone'    => 'required|string|max:11',
                'city'     => 'required|string|max:255',
                'address'  => 'required|string|max:255',
                'state'    => 'required|string|max:255',
                'password' => 'required|string|min:8',
            ];
        }
    }

    public function updated($propertyName): void{
        $this->validateOnly($propertyName, $this->rules());
    }

    public function propertyResetExcept(): void{
        $this->resetExcept(['editorsId', 'selectedRole', 'selectedStatus']);
    }
}