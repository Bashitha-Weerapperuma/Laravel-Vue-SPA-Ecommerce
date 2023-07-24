@push('title')
Product Create
@endpush
@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush
<div>
    <!-- ======= Header ======= -->
    <x-layouts.header></x-layouts.header>
    <!-- End Header -->
    <!-- ======= Sidebar ======= -->
    <x-layouts.sidebar></x-layouts.sidebar>
    <!-- End Sidebar-->

    <!-- End Page Title -->
    <x-form pageTitle='Coupons Create' pageUrl='Coupons / Create'>
        <x-form-input-field.general col="col-6" lable="Coupon title" name="title" type="text" wireModel='title'>
        </x-form-input-field.general>
        <x-form-input-field.general col="col-6" lable="Coupon discount" name="discount" type="text"
            wireModel='discount'>
        </x-form-input-field.general>
        <x-form-input-field.select-for-enum col='col-6' defaultOption='Select Coupon type' :options='$couponTypeOption'
            wireModel='type' colName='name' name="type">
        </x-form-input-field.select-for-enum>

        <x-form-input-field.general col="col-6" lable="Coupon code" name="code" type="text" wireModel='code'>
        </x-form-input-field.general>


        <x-form-input-field.select-for-array col='col-6' defaultOption='Select Status' :options='$statusOption'
            wireModel='status' colName='name' name="status">
        </x-form-input-field.select-for-array>

        <div class="col-6"><input wire:model='start_date' class="form-control" id="start_date" type="text" name="start_date"
                placeholder="Pick start Date" aria-label="Start Date">
            @error( 'start_date' ) <span class="error fw-light text-danger">{{ $message }}</span> @enderror</div>

        <div class="col-6"><input wire:model='expire_date' class="form-control" id="expire_date" type="text" name="expire_date"
                placeholder="Pick expire Date" aria-label="Start Date">
            @error( 'expire_date' ) <span class="error fw-light text-danger">{{ $message }}</span> @enderror</div>

        <x-form-input-field.submit color='primary' buttonName="Save"></x-form-input-field.submit>
    </x-form>

    <!-- ======= Footer ======= -->
    <x-layouts.footer></x-layouts.footer>
    <!-- End Footer -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
</div>
@push('script')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#start_date", {
        dateFormat: "Y-m-d H:i:s",
        // mode: "range",
        enableTime: true,
        time_24hr: true
    });
    flatpickr("#expire_date", {
        dateFormat: "Y-m-d H:i:s",
        // mode: "range",
        enableTime: true,
        time_24hr: true
    });
</script>
@endpush