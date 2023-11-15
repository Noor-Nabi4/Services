<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="mt-y heading">
        <h1>
            <img src="{{ asset('images/svg/electric.svg') }}" alt="electric">
            SMM Services Create
        </h1>
    </div>
    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="type" class="form-label">Service type</label>
                <input type="text" name="type" id="type" class="form-control w-100">
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label">Service Name</label>
                <input type="text" name="name" id="name" class="form-control w-100">
            </div>
            <div class="col-md-6">
                <label for="rate" class="form-label">Rate Per 1000</label>
                <input type="number" name="rate" id="rate" class="form-control w-100">
            </div>
            <div class="col-md-6">
                <label for="min_value" class="form-label">Min</label>
                <input type="number" name="min_value" id="min_value" class="form-control w-100">
            </div>
            <div class="col-md-6">
                <label for="max_value" class="form-label">Max</label>
                <input type="number" name="max_value" id="max_value" class="form-control w-100">
            </div>
            <div class="col-md-6">
                <label for="guarranty" class="form-label">Guarranty</label>
                <input type="text" name="guarranty" id="guarranty" class="form-control w-100">
            </div>
            <div class="col-md-6">
                <label for="avg_time" class="form-label">
                    Avg. Time
                </label>
                <input type="text" name="avg_time" id="avg_time" class="form-control w-100">
            </div>
            <div class="col-md-12">
                <label for="description" class="form-label">
                    Description
                </label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control w-100"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</x-app-layout>
