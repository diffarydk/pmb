<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Selection') }}
        </h2>
    </x-slot>
    <div class="py-12 px-12">
        <div class="mt-0 mb-2">
            @if (Auth::user()->role === 'admin')
                <form action="{{ route('selection.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="topN" class=" text-white px-4 py-2 rounded-lg">Kuota Seleksi:</label>
                    <input type="number" name="topN" value="{{ $topN }}" class="mr-4">
                    <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded-lg">
                        Seleksi
                    </button>
                </form>
            @endif
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nilai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cek Data
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($documents as $document)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 shadow-xl">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $document->nama }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $document->nilai }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $document->status }}
                            </td>
                            <td>
                                <button type="button" alt="ijazah"
                                    onclick="showModal('{{ Storage::url('public/' . $document->nilai_akhir) }}')"
                                    class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Lihat
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div id="dropdown"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute top-full left-0 mt-2">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
            </li>
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
            </li>
        </ul>
    </div>

</x-app-layout>
