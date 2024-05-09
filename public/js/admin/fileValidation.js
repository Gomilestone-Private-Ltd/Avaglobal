function fileValidation(id) {
    var fileInput = document.getElementById(id);
    var fileSize = (fileInput.files[0].size / 1024 / 1024).toFixed(2);
    if (fileSize > 1) {
        // alert("File size must be less than 5 MB.");
        toastr.error("File size must be less than 1 MB.");
        toastr.options = {
            closeButton: true,
            progressBar: true,
        };
        fileInput.value = "";
        return false;
    }
}
