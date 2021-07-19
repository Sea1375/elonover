$(function() {
    console.log('profile.js');

    $('#change_image').click(() => {
        $('#file_input').click();
    })

    $('#file_input').change((e) => {
        let file = e.target.files;
        if (file.length > 0) {
            file = file[0];

            var formData = new FormData();

            formData.append("file", file, file.name);

            $.ajax({
                url: '../file_upload.php',
                data: formData,
                type: 'POST',
                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                processData: false, // NEEDED, DON'T OMIT THIS
                success: (res) => {
                    res = JSON.parse(res);
                    if (res.success) {
                        let url = res.url;
                        $(".profile-image img").attr('src', "../" + url);
                        $('#image_file').val(url);
                    }
                },
                failed: (err) => {

                }
            });
        }
    });

    function getBase64String(file) {

    }
})