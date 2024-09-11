(function () {
    'use strict';

    var forms = document.querySelectorAll('.needs-validation');

    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            form.classList.add('was-validated');
        }, false);
    });
})();

document.addEventListener("DOMContentLoaded", function () {
  const modals = document.querySelectorAll(".modal");

  modals.forEach(modal => {
      modal.addEventListener("hidden.bs.modal", function () {
          // Remove backdrop when modal is hidden
          const backdrop = document.querySelector(".modal-backdrop");
          if (backdrop) {
              backdrop.remove();
          }
      });

      const showModalButtons = modal.querySelectorAll("[data-bs-toggle='modal']");
      showModalButtons.forEach(button => {
          button.addEventListener("click", function () {
              const targetModalId = button.getAttribute("data-bs-target");
              const targetModal = document.querySelector(targetModalId);

              // Show the new modal
              const modalInstance = new bootstrap.Modal(targetModal);
              modalInstance.show();
          });
      });
  });
});
  
