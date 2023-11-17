<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="mt-5 heading">
        <h1>
            <img src="{{ asset('images/svg/electric.svg') }}" alt="electric">
            SMM Services | By Boostbazarteam
        </h1>
    </div>
    <div class="mt-4">
        <div class="row">
            <div class="col me-2 social-acconts">
                <div class="social-account-link">
                    <img src="{{ asset('images/svg/Youtube.svg') }}" alt="Youtube">
                    Youtube
                </div>
            </div>
            <div class="col me-2">
                <div class="social-account-link">
                    <img src="{{ asset('images/svg/Instagram.svg') }}" alt="Instagram">
                    Instagram
                </div>
            </div>
            <div class="col me-2">
                <div class="social-account-link">
                    <img src="{{ asset('images/svg/Facebook.svg') }}" alt="Facebook">
                    Facebook
                </div>
            </div>
            <div class="col me-2">
                <div class="social-account-link">
                    <img src="{{ asset('images/svg/tiktok.svg') }}" alt="tiktok">
                    TikTok
                </div>
            </div>
        </div>

    </div>
    <div class="mt-5">
        <div class="d-flex">
            <div class="" style="background: #916dfd" style="padding: 5px">
                <img src="{{ asset('images/svg/Search.svg') }}" alt="Search">
            </div>
            <input type="text" class="form-control w-100">
            <button type="submit" class="d-block" style="background: #916dfd" style="padding: 5px">
                <img src="{{ asset('images/svg/Search.svg') }}" alt="Search" style="2rem">
            </button>
        </div>
    </div>
    <div class="card mt-3 ">
        @if (session('success'))
            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
        @endif
        {{-- @if (Auth::user()->is_admin) --}}
        <div class="card-header d-flex justify-content-end">
            <a href="{{ route('services.create') }}" class="btn btn-primary">Create</a>
        </div>
        {{-- @endif --}}
        <div class="card-body table-responsive">
            <div class="card border">
                @foreach ($servicesGrouping as $key => $services)
                    <div class="card-header bg-white border-0">
                        <h5>{{ $key }}</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Service
                                    </th>
                                    <th>
                                        Rate per 1000
                                    </th>
                                    <th>
                                        Min/Max
                                    </th>
                                    <th>
                                        Guarranty
                                    </th>
                                    <th>
                                        Avg. Time
                                    </th>
                                    <th style="max-width: fit-content">
                                        Description
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($services as $service)
                                    <tr>
                                        <td>
                                            {{ $service['id'] }}
                                        </td>
                                        <td>
                                            {{ $service['name'] }}
                                        </td>
                                        <td>
                                            PKR {{ $service['rate'] }}
                                        </td>
                                        <td>
                                            {{ $service['min_value'] }}/{{ $service['max_value'] }}
                                        </td>
                                        <td>
                                            <p style="background: #ffba53;color:#fff;border-radius:5px;padding:0 2px" class="d-inline">
                                                Lifetime

                                            </p>
                                        </td>
                                        <td>
                                            {{ $service['avg_time'] }} Days
                                        </td>
                                        <td>
                                            <div class="d-inline-block"
                                                style="background: #916dfd; color:#fff;max-width: fit-content;border-radius:10px;padding:0 5px" class="d-inline-block">
                                                <img src="{{ asset('images/svg/detail Info.svg') }}" alt="" class="d-inline-block">
                                                Details
                                            </div>
                                            {{-- {{ $service['description'] }} --}}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            Record not found
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
