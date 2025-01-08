<?php

namespace App\Livewire\Langs;

use App\Models\Lang;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.app')]
    public function render(): View
    {
        $langs = Lang::paginate();

        return view('livewire.lang.index', compact('langs'))
            ->with('i', $this->getPage() * $langs->perPage());
    }

    public function delete(Lang $lang)
    {
        $lang->delete();

        return $this->redirectRoute('langs.index', navigate: true);
    }
}
