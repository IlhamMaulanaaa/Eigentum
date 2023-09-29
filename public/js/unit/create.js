function previewImage(event, uploadIconId) {
    const input = event.target;
    const uploadIcon = document.getElementById(uploadIconId);
    const uploadDetails = uploadIcon.nextElementSibling;

    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
            uploadIcon.innerHTML = `<img src="${e.target.result}" alt="Preview" width="100" height="100">`;
            uploadDetails.style.display = "none";
        };

        reader.readAsDataURL(input.files[0]);
    }
}
