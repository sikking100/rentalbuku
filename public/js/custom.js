$(document).ready(function () {
    function filePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('img').remove();
                $('#preview').append('<img src="' + e.target.result + '" width="450" class="img-fluid" />');
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
  
  
    $('#gambar').change(function () {
        filePreview(this);
    });
});