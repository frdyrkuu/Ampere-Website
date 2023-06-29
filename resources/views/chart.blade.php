@extends('layouts.homepage')

@section('content')
    <section class="max-w-7xl mx-auto mt-10 mb-20 sm:px-2 px-4">
        <h1 class="text-center text-2xl font-bold text-orange-500 py-2">User Data</h1>
        <div class="relative overflow-x-auto rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-yellow-300">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Circuit Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Output
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userData as $data)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $data->category }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $data->ckt }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->output }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <div class="flex justify-center items-center">
            <p class="p-2 mt-20">
                {{ $userData->links() }}
            </p>
        </div>

    </section>
@endsection
