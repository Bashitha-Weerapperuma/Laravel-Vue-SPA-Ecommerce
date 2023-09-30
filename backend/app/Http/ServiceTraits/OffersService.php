<?php

namespace App\Http\ServiceTraits;

trait OffersService {
    public int $offerId;
    public object $categories;
    public object $subCategories;
    public object $brands;
    public string $name                 = '';
    public string $title                = '';
    public string $discount             = '';
    public string $type                 = '';
    public ?int $status                 = null;
    public string $start_date           = '';
    public string $expire_date          = '';
    public array $selectedCategories    = [];
    public array $selectedSubCategories = [];
    public array $selectedBrands        = [];
    public array $offersTypeOption      = ['percentage', 'decimal'];
    public array $statusOption          = ['Unpublish', 'Publish'];
    public $image;
    public string $oldImage;

    protected function rules() {
        if ($this->pageUrl == 'update') {
            $rulesForUpdate = [
                'name'        => 'required|string|max:100',
                'title'       => 'required|string|max:255',
                'discount'    => 'required|string|max:255',
                'type'        => 'required',
                'status'      => 'required|boolean',
                'start_date'  => 'required|date|before:expire_date',
                'expire_date' => 'required|date|after:start_date',
            ];
            if (gettype($this->image) == 'object') $rulesForUpdate['image'] = 'required|mimes:jpeg,png,jpg';

            return $rulesForUpdate;
        } else {
            return [
                'name'        => 'required|string|max:100',
                'title'       => 'required|string|max:255',
                'image'       => 'required|mimes:jpg,jpeg,png',
                'discount'    => 'required|string|max:255',
                'type'        => 'required',
                'status'      => 'required|boolean',
                'start_date'  => 'required|date|before:expire_date',
                'expire_date' => 'required|date|after:start_date',
            ];
        }
    }

    public function updated(mixed $propertyName): void {
        $this->validateOnly($propertyName, $this->rules());
    }
}
