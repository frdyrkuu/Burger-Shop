const form = document.getElementById('upload-form');
form.addEventListener('submit', function (e) {
    e.preventDefault();
    formSubmit();
    form.reset();
    var output = document.getElementById('output');
    output.src = "../img/image-preview.png";
})
function formSubmit() {
    let formData = new FormData(form);
    $.ajax({
        url: 'dashboard.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (res) {

            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Your file has been uploaded',
                showConfirmButton: false,
                timer: 1500
            })

        }
    })
}