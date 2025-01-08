<?php

namespace App\Livewire\Langs;

use App\Livewire\Forms\LangForm;
use App\Models\Lang;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public LangForm $form;

    public function mount(Lang $lang)
    {
        $this->form->setLangModel($lang);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.lang.show', ['lang' => $this->form->langModel]);
    }
}
