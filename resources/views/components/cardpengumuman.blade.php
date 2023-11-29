<div href="#"
    class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">

    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pengumuman</h5>
        @if ($documents->status === 'dalam proses')
            <p class="font-normal text-gray-700 dark:text-gray-400">Status penerimaan anda adalah menunggu pengumuman</p>
        @elseif($documents->status === 'diterima')
            <p class="font-normal text-gray-700 dark:text-gray-400">Selamat anda telah diterima untuk masuk ke dalam perguruan tinggi kami</p>
        @else
            <p class="font-normal text-gray-700 dark:text-gray-400">Maaf anda gagal tahap seleksi</p>
        @endif
</div>
