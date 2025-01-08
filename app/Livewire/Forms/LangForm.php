<?php

namespace App\Livewire\Forms;

use App\Models\Lang;
use Livewire\Form;

class LangForm extends Form
{
    public ?Lang $langModel;
    
    public $code = '';
    public $name = '';

    public function rules(): array
    {
        return [
			'code' => 'required|string',
			'name' => 'required|string',
        ];
    }

    public function setLangModel(Lang $langModel): void
    {
        $this->langModel = $langModel;
        
        $this->code = $this->langModel->code;
        $this->name = $this->langModel->name;
    }

    public function store(): void
    {
        $this->langModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->langModel->update($this->validate());

        $this->reset();
    }
}
