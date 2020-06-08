<?php

namespace App\Http\Livewire;

use App\Category;
use App\SubCategory;
use Livewire\Component;

class Categories extends Component
{
    public $categories;
    public $subcategories = [];
    public $category;
    public $subCategory;

    public function mount()
    {
        $this->refreshData();
    }

    private function refreshData()
    {
        $this->categories = Category::orderBy('name')->get();
        if (!empty($this->category)) {
            $this->subcategories = SubCategory::where('category_id', $this->category)->get();
        }
    }

    public function render()
    {
        $this->refreshData();
        return view('livewire.category');
    }
}
