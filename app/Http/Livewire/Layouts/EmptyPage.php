<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;

class EmptyPage extends Component {
    public string $tableName;

    public function mount($tableName) : void {
        $this->tableName = $tableName;
    }
    public function render() {
        return view('livewire.layouts.empty-page');
    }
}
