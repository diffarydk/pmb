document.addEventListener('DOMContentLoaded', function () {
    const modalTriggers = document.querySelectorAll('[data-modal-toggle]');
    const modalCloses = document.querySelectorAll('[data-modal-hide]');
    const modals = document.querySelectorAll('.modal');

    modalTriggers.forEach(trigger => {
        trigger.addEventListener('click', (event) => {
            const targetModalId = trigger.getAttribute('data-modal-target');
            const targetModal = document.getElementById(targetModalId);

            if (targetModal) {
                targetModal.classList.remove('hidden');
            }
        });
    });

    modalCloses.forEach(close => {
        close.addEventListener('click', () => {
            const targetModalId = close.getAttribute('data-modal-hide');
            const targetModal = document.getElementById(targetModalId);

            if (targetModal) {
                targetModal.classList.add('hidden');
            }
        });
    });

    modals.forEach(modal => {
        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });
    });

    const deleteForm = document.getElementById('deleteDocumentForm');

    modalTriggers.forEach(trigger => {
        trigger.addEventListener('click', (event) => {
            const documentId = event.target.getAttribute('data-document-id');
            deleteForm.action = `/all/${documentId}`;
        });
    });
});

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        // Allow only numeric characters
        evt.preventDefault();
        return false;
    }
    return true;
}

function isMaxLength(input, maxLength) {
    return input.value.length < maxLength;
}
// Get the modal by id
var modal = document.getElementById("modal-foto");

// Get the modal image tag
var modalImg = document.getElementById("modal-img");

// this function is called when a small image is clicked
function showModal(src) {
    modal.classList.remove('hidden');
    modalImg.src = src;
}

// this function is called when the close button is clicked
function closeModal() {
    modal.classList.add('hidden');
}