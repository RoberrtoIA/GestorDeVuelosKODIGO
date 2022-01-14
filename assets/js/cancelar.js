var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
//   var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = 'Actualizar Estado'
  modalBodyInput.value = recipient
})

var exampleModal2 = document.getElementById('exampleModal2')
exampleModal2.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
//   var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal2.querySelector('.modal-title')
  var modalBodyInput = exampleModal2.querySelector('.modal-body input')

  modalTitle.textContent = 'Cancelar'
  modalBodyInput.value = recipient
})

// document.getElementsByName("boton").onclick = function () {
//     alert("Hello! I am an alert box!");
//     let tokenAmount = document.getElementsByName("actualizar").value;
//     document.getElementsByName('enviarFinal').value=tokenAmount;
//   };

  function reply_click(clicked_id)
  {
      document.getElementById('obtenerID').value = document.getElementById(clicked_id).value;
  }

  function reply_click2(clicked_id)
  {
      document.getElementById('obtenerID2').value = document.getElementById(clicked_id).value;
  }

//   $('#retrasar option').each(function() {
//     if (this.selected)
//        alert('this option is selected');
//      else
//        alert('this is not');
// });

// if(document.getElementById('select').value == "Retrasado") {
//     alert('this option is selected');
// }​