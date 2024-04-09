<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="mt-3 w-full overflow-x-hidden border-t flex flex-col  dark:text-gray-200 leading-tight">
        <div class="w-full mt-12">
            <span class="flex pb-3">
                <p class="flex-auto w-1/2 text-xl items-center">
                    <i class="fas fa-list mr-3"></i> Latest Rate
                </p>
                <p class="flex-auto w-1/2 flex justify-end">
                    @if (auth()->user()->can('rate-refresh'))
                    <button style="" class="mr-5 bg-dark border border-gray-200 dark:bg-black cta-btn font-semibold py-2 px-3 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-slate-400" onclick="refreshRate()">
                        <i class="fas fa-sync mr-3"></i> Refresh Rate
                    </button>
                    @endif
                </p>
            </span>
            <hr>
            <div class="mr-10 ml-10 overflow-auto">
                <table class="display dark:text-gray-200" id="datatable-search">
                    <thead>
                        <tr>
                            <th style="width: 5%">No</th>
                            <th>Code</th>
                            <th>Value</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($currency as $data)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$data['code']}}</td>
                                <td>{{$data['value']}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
