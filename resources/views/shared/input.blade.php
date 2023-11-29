<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Input Doc') }}
            </h2>
            @if ($documents->count() > 0)
                <a href="{{ route('document.show', $documents->first()->id) }}"
                    class="font-medium text-gray-600 dark:text-gray-500 hover:underline">Show Submitted Data</a>
            @endif
        </div>
    </x-slot>

    <div class="py-12">
        @if ($documents->count() == 0)
            <div class="w-full md:w-96 md:max-w-full mx-auto">
                <div class="p-6 border border-gray-600 sm:rounded-md bg-gray-800">
                    <form method="POST" action="{{ route('document.create') }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <label class="block mb-6 ">
                            <span class="text-gray-300">Nama</span>
                            <input name="nama" type="text"
                                class="
            block
            w-full
            mt-1
            border-gray-600
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
            bg-transparent
            placeholder-gray-600
            text-gray-300
          "
                                placeholder="Masukkan Nama Anda" required />
                        </label>
                        <label class="block mb-6">
                            <span class="text-gray-300">Nomor Telpon</span>
                            <input name="no_telp" type="text"
                                class="
            block
            w-full
            mt-1
            border-gray-600
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
            bg-transparent
            placeholder-gray-600
            text-gray-300
          "
                                placeholder="Masukkan Nomor Telpon Anda"
                                onkeypress="return isNumberKey(event)  && isMaxLength(this, 13)" required />
                        </label>
                        <label class="block mb-6">
                            <span class="text-gray-300">Email address</span>
                            <input name="email" type="email"
                                class="
            block
            w-full
            mt-1
            border-gray-600
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
            bg-transparent
            placeholder-gray-600
            text-gray-300
          "
                                placeholder="Masukkan Email Anda" required />
                        </label>
                        <label class="block mb-6">
                            <span class="text-gray-300">KTP</span>
                            <input name="ktp" type="text" pattern="[0-9]*" inputmode="numeric"
                                class="
            block
            w-full
            mt-1
            border-gray-600
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
            bg-transparent
            placeholder-gray-600
            text-gray-300
          "
                                placeholder="Masukkan Nomor Induk Kependudukan"
                                onkeypress="return isNumberKey(event) && isMaxLength(this, 16)" required />
                        </label>
                        <label class="block mb-6">
                            <span class="text-gray-300">Nilai Akhir</span>
                            <input name="nilai" type="text" pattern="[0-9]*" inputmode="numeric"
                                class="
            block
            w-full
            mt-1
            border-gray-600
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
            bg-transparent
            placeholder-gray-600
            text-gray-300
          "
                                placeholder="Masukkan Nomor Induk Kependudukan"
                                onkeypress="return isNumberKey(event) && isMaxLength(this, 5)" required />
                        </label>
                        <label class="block mb-6">
                            <span class="text-gray-300">Bukti Nilai Akhir</span>
                            <input name="nilai_akhir" type="file"
                                class="
            block
            w-full
            mt-1
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
            bg-transparent
            placeholder-gray-600
            text-gray-300
          "
                                required />
                        </label>
                        <label class="block mb-6">
                            <span class="text-gray-300">Ijazah</span>
                            <input name="ijazah" type="file"
                                class="
            block
            w-full
            mt-1
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
            bg-transparent
            placeholder-gray-600
            text-gray-300
          "
                                required />
                        </label>
                        <div class="mb-6">
                            <button type="submit"
                                class="
            h-10
            px-5
            text-indigo-100
            bg-indigo-700
            rounded-lg
            transition-colors
            duration-150
            focus:shadow-outline
            hover:bg-indigo-800
          ">
                                Kirim
                            </button>
                        </div>
                        <div>
                        </div>
                    </form>
                </div>

            </div>
        @else
            <div class="w-full md:w-96 md:max-w-full mx-auto">
                @include('components.cardpengumuman')
            </div>
        @endif
    </div>
</x-app-layout>
