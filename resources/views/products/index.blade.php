<x-app-layout>

    <x-slot name="header"></x-slot>
    <div class="mt-5 heading">
        <h1>
            <img src="{{ asset('images/svg/electric.svg') }}" alt="electric">
            SMM Services | By Boostbazarteam
        </h1>
    </div>

    <div class="mt-5">
        <div class="d-flex">
            <div class="" style="background: #916dfd" style="padding: 5px">
                <img src="{{ asset('images/svg/Search.svg') }}" alt="Search">
            </div>
            <input type="text" class="form-control w-100" id="search">
            <button type="submit" class="d-block" style="background: #916dfd" style="padding: 5px">
                <img src="{{ asset('images/svg/Search.svg') }}" alt="Search" style="2rem">
            </button>
        </div>
    </div>

    <h3 class="text-center text-white font-arial py-2 font-weight-bold d-flex justify-content-center align-items-center my-3"
        style="background: #916dfd;border-radius:5px;
        font-family: Raleway;
        font-weight: 600">
        <img src="{{ asset('images/svg/History Icon.svg') }}" alt="Order History Icon" class="d-inline-block me-2"
            height="1.5rem" style="height: 1.5rem">
        Our Products
    </h3>
    <div class="card mt-3">
        @if (session('success'))
            <div class="alert alert-success text-center" role="alert">{{ session('success') }}</div>
        @endif
        @if (Auth::user()->is_admin)
            <div class="card-header d-flex justify-content-end">
                <a href="{{ route('products.create') }}" class="btn btn-primary">Create</a>
            </div>
        @endif
        <div class="card-body">
            <div class="d-flex justify-content-center">
                @foreach ($ProductsTypes as $ProductsType)
                    @php
                        $color = ' Blue';
                        $class = '';
                        if ($ProductsType['type'] == $type) {
                            $color = ' White';
                            $class = 'active-category';
                        }
                        $logo = $ProductsType['type'] . $color . '.svg';
                        $imgSrc = asset('images/svg/' . $logo);
                    @endphp
                    <div class="me-1">
                        <a href="{{ route('products.index', $ProductsType['type']) }}"
                            class="d-flex category {{ $class }}">
                            <img src="{{ $imgSrc }}" alt="{{ $ProductsType['type'] }}"
                                style="width: 1.3rem;margin-right: 0.5rem;">
                            {{ $ProductsType['type'] }}
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row my-2 justify-content-center" id="data-container">
                @include('products.include.data')
            </div>
        </div>
    </div>
    <x-slot name="script">
        <script>
            fillterData("/products");
        </script>
    </x-slot>
</x-app-layout>
