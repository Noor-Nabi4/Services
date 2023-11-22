<div class="card border">
    @forelse ($servicesGrouping as $key => $services)
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
                    @php
                        $SrNo = 1;
                    @endphp
                    @forelse ($services as $service)
                        <tr>
                            <td>
                                {{ $SrNo++ }}
                            </td>
                            <td>
                                {{ $service['service'] }}
                            </td>
                            <td>
                                PKR {{ $service['rate'] }}
                            </td>
                            <td>
                                {{ $service['min_value'] }}/{{ $service['max_value'] }}
                            </td>
                            <td>
                                <p style="background: #ffba53;color:#fff;border-radius:5px;padding:0 2px"
                                    class="d-inline">

                                    {{ $service['guarranty'] == null ? 'Lifetime' : $service['guarranty'] . ' Days' }}

                                </p>
                            </td>
                            <td>
                                {{ dd(Helper::convert_minutesToHours($service['avg_time'])) }} Days
                            </td>
                            <td>
                                <div class="d-inline-block"
                                    style="background: #916dfd; color:#fff;max-width: fit-content;border-radius:10px;padding:0 5px"
                                    class="d-inline-block">
                                    <img src="{{ asset('images/svg/detail Info.svg') }}" alt=""
                                        class="d-inline-block">
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
    @empty
        <div class="card-header bg-white border-0">
            <h5>
                No data Found
            </h5>
        </div>
    @endforelse
</div>
