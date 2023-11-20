    <!-- Hidden modal with a black overlay covering the entire page -->
    <div id="modal-foto"
        class="hidden fixed top-0 left-0 z-80 w-screen h-screen bg-black/70 flex justify-center items-center">
        <!-- The close button -->
        <a class="fixed z-90 top-6 right-8 text-white text-5xl font-bold" href="javascript:void(0)"
            onclick="closeModal()">&times;</a>

        <img id="modal-img" class="absolute max-w-[800px] max-h-[600px] object-cover" />
    </div>