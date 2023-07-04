@push('title')
Product Create
@endpush
<div>
    <!-- ======= Header ======= -->
    <x-layouts.header></x-layouts.header>
    <!-- End Header -->
    <!-- ======= Sidebar ======= -->
    <x-layouts.sidebar></x-layouts.sidebar>
    <!-- End Sidebar-->
    <main id="main" class="main">
        <x-layouts.page-title></x-layouts.page-title>
        <!-- End Page Title -->

        <x-form>

            <x-form-input-field.general col="col-6" lable="Product title" name="name" type="text">

            </x-form-input-field.general>
            <x-form-input-field.general col="col-6" lable="Slug" name="slug" type="text">
            </x-form-input-field.general>
            <x-form-input-field.general col="col-6" lable="SKU" name="sku" type="text">
            </x-form-input-field.general>
            <x-form-input-field.general col="col-6" lable="Description" name="description" type="text">
            </x-form-input-field.general>
            <x-form-input-field.general col="col-6" lable="Short Description" name="shortDescription" type="text">
            </x-form-input-field.general>
            <x-form-input-field.general col="col-6" lable="Information" name="information" type="text">
            </x-form-input-field.general>
            <x-form-input-field.general col="col-6" lable="Price" name="price" type="text">
            </x-form-input-field.general>
            <x-form-input-field.general col="col-6" lable="Discount Price" name="discountPrice" type="text">
            </x-form-input-field.general>
            <div class="col-6">
                <select wire:model='selectSection' id="select" class="form-select" aria-label="Default select example">
                    @foreach ($sections as $option)
                    <option value="{{ $option->id }}">{{ $option->name }}</option>
                    @endforeach
                </select>
            </div>

            <x-form-input-field.general col="col-6" lable="offer Price" name="offerPrice" type="text">
            </x-form-input-field.general>

            <div class="col-6">
                <select wire:model='' id="select" class="form-select" aria-label="Default select example">
                    @if ($categories === null)
                    <option disabled>Please select any section</option>
                    @else
                    @foreach ($categories as $option)
                    <option value="{{ $option->id }}">{{ $option->name }}</option>

                    @endforeach
                    @endif
                </select>
            </div>
            <x-form-input-field.general col="col-6" lable="Qty In Stock" name="qtyInStock" type="text">
            </x-form-input-field.general>
            {{-- <div class="col-6">
                <select wire:model='selectSection' id="select" class="form-select" aria-label="Default select example">
                    @foreach ($sections as $option)
                    <option value="{{ $option->id }}">{{ $option->name }}</option>
            @endforeach
            </select>
</div> --}}

<x-form-input-field.general col="col-6" lable="Stock Status" name="stockStatus" type="text">
</x-form-input-field.general>







<x-form-input-field.file col="col-6" label="Upload Image" name="image"></x-form-input-field.file>
<x-form-input-field.file col="col-6" label="Upload Images" name="images"></x-form-input-field.file>

<x-form-input-field.submit buttonName="Save"></x-form-input-field.submit>
</x-form>

</main>
<!-- ======= Footer ======= -->
<x-layouts.footer></x-layouts.footer>
<!-- End Footer -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

</div>