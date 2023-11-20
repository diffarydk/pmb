<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Show Data') }}
        </h2>
    </x-slot>
    <div class="py-12 px-12">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No Telpon
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            KTP
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nilai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ijazah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bukti Nilai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (Auth::user()->role === 'admin')
                        @foreach ($documents as $document)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 shadow-xl">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $document->nama }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $document->no_telp }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $document->email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $document->ktp }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $document->nilai }}
                                </td>
                                <td>
                                    <button type="button" alt="ijazah"
                                        onclick="showModal('{{ Storage::url('public/' . $document->ijazah) }}')"
                                        class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Lihat
                                    </button>
                                </td>
                                <td>
                                    <button type="button" alt="ijazah"
                                        onclick="showModal('{{ Storage::url('public/' . $document->nilai_akhir) }}')"
                                        class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Lihat
                                    </button>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('document.edit', $document->id) }}"
                                        data-modal-target="authentication-modal"
                                        data-modal-toggle="{{ session('modal', '') }}"
                                        data-document-id="{{ $document->id }}"
                                        class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
                                    <button type="button" data-modal-target="popup-modal"
                                        data-modal-toggle="{{ session('modal', '') }}"
                                        data-document-id="{{ $document->id }}"
                                        class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 shadow-xl">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $document->nama }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $document->no_telp }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $document->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $document->ktp }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $document->nilai }}
                            </td>
                            <td>
                                <button type="button" alt="ijazah"
                                    onclick="showModal('{{ Storage::url('public/' . $document->ijazah) }}')"
                                    class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Lihat
                                </button>
                            </td>
                            <td>
                                <button type="button" alt="ijazah"
                                    onclick="showModal('{{ Storage::url('public/' . $document->nilai_akhir) }}')"
                                    class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Lihat
                                </button>
                            </td>
                            <td>
                            <button href="#" data-modal-target="authentication-modal"
                                data-modal-toggle="{{ session('modal', '') }}" data-document-id="{{ $document->id }}"
                                class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <x-modalpopup>
        <form id="deleteDocumentForm" action="{{ route('document.delete', 0) }}" method="post">
            @csrf
            @method('delete')
            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                {{ __('Apakah Anda Yakin Ingin Menghapus?') }}</h3>
            <div class="flex justify-center space-x-2">
                <button data-modal-hide="popup-modal" type="submit"
                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5">
                    Iya
                </button>
                <button data-modal-hide="popup-modal" type="button"
                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    Batal
                </button>
            </div>
        </form>
    </x-modalpopup>
    <x-modalform>
        <x-slot name=header>
            Update
        </x-slot name=header>
            @if ($editing ?? false)
                <form class="space-y-4" action="{{ route('document.update', $document->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div>
                        <label for="Nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Perbarui Nama Anda" required>
                    </div>
                    <div>
                        <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Nomer Telepon</label>
                        <input type="no_telp" name="no_telp" id="no_telp" placeholder="Perbarui Nomer Telpon Anda"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Email</label>
                        <input type="email" name="email" id="email" placeholder="Perbarui Email Anda"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required>
                    </div>
                    <div>
                        <label for="ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            KTP</label>
                        <input type="text" name="ktp" id="ktp"
                            placeholder="Perbarui Nomer Kependudukan Anda"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required>
                    </div>
                    <div>
                        <label for="nilai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Nilai</label>
                        <input type="text" name="nilai" id="nilai" placeholder="Perbarui Nilai Anda"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required>
                    </div>
                    <div>
                        <label for="ijazah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Ijazah</label>
                        <input type="file" name="ijazah" id="ijazah" placeholder="Perbarui foto Ijazah Anda"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required>
                    </div>
                    <div>
                        <label for="nilai_akhir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Bukti Nilai</label>
                        <input type="file" name="nilai_akhir" id="nilai_akhir"
                            placeholder="Perbarui Foto Bukti Nilai"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
                </form>
            @endif
    </x-modalform>
    <x-modalphoto />
</x-app-layout>
