<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="my-5 heading">
        <h1>
            SMM Product Create
        </h1>
    </div>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control w-100">
            </div>
            <div class="col-md-6">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" name="amount" id="amount" class="form-control w-100">
            </div>
            <div class="col-md-6">
                <label for="discounted_amount" class="form-label">Discounted Amount</label>
                <input type="number" name="discounted_amount" id="discounted_amount" class="form-control w-100">
            </div>
            <div class="col-md-6">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-control w-100" required>
                    <option value="" selected disabled>Select a type of product</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="image" class="form-label">image</label>
                <input type="file" name="image" id="image" class="form-control w-100">
            </div>
            <div class="col-12">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control w-100"
                    required></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>
</x-app-layout>
