<?php

namespace App\Livewire\Langs;

use App\Livewire\Forms\LangForm;
use App\Models\Lang;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public LangForm $form;

    public function mount(Lang $lang)
    {
        $this->form->setLangModel($lang);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('langs.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.lang.edit');
    }
}
