// Input Tags
$('#input-tags').tagsInput();

// Customize summerNote Text Editor
$("textarea#summernote").summernote({
    // tabsize: 2,
    height: 250,
    toolbar: [
      ["style", ["style"]],
    //   ["font", ["bold", "italic", "underline", "clear"]],
      ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
      ['fontname', ['fontname']],
      ['fontsize', ['fontsize']],
      ["color", ["color"]],
      ["para", ["ul", "ol", "paragraph"]],
      ["height", ["height"]],
      ["table", ["table"]],
      ["insert", ["link", "picture", "hr"]],
      ['view', ['fullscreen', 'codeview']],
    //   ["help", ["help"]]
    ]
});

// Multiple Image Preview in backend
$(function() {
    // Multiple images preview with JavaScript
    var multiImgPreview = function(input, imgPreviewPlaceholder) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#images').on('change', function() {
        multiImgPreview(this, 'div.imgPreview');
    });

});

// $(document).ready(function(){
//     // Input Tags

// });



