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
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control w-100">
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
                <label for="shipping_fees" class="form-label">Shipping Fees</label>
                <input type="number" name="shipping_fees" id="shipping_fees" class="form-control w-100">
            </div>
            <div class="col-md-6">
                <label for="type" class="form-label">Type</label>
                <select name="type" id="type" class="form-control w-100" required>
                    <option value="" selected disabled>Select a type of product</option>
                    <option value="Showpiece">Showpiece</option>
                    <option value="Subscriptions">Subscriptions</option>
                    <option value="E_commerce">E-commerce</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="image" class="form-label">image</label>
                <input type="file" name="image" id="image" class="form-control w-100">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>
</x-app-layout>
