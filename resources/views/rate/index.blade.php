<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="mt-3 w-full overflow-x-hidden border-t flex flex-col  dark:text-gray-200 leading-tight">
        <div class="w-full mt-12">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> Latest Reports
            </p>
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
