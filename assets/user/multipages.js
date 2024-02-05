$(document).ready(function(){

    // Fungsi untuk memeriksa apakah semua input pada halaman saat ini telah diisi
    function checkCurrentPageCompletion(current_fs) {
        var isValid = true;
        // Loop melalui setiap input pada halaman saat ini
        current_fs.find('input, select').each(function(){
            // Periksa apakah nilai input kosong
            if($(this).val() === ''){
                isValid = false;
                return false; // Berhenti dari loop jika ada input yang kosong
            }
        });
        return isValid;
    }

    $(".next").click(function(){
        // Mendapatkan elemen halaman formulir saat ini
        var current_fs = $(this).parent();
        // Memeriksa apakah semua input pada halaman saat ini telah diisi
        if (!checkCurrentPageCompletion(current_fs)) {
            alert('Mohon lengkapi semua input pada halaman ini sebelum melanjutkan.');
            return; // Berhenti dari fungsi jika ada input yang kosong
        }

        // Mendapatkan data formulir yang diisi
        var formData = $('#msform').serialize();
        var baseUrl = "<?php echo base_url(); ?>";
        var url = baseUrl + "welcome/registration";
        
        // Mendapatkan halaman berikutnya
        var next_fs = $(this).parent().next();

        // Menambahkan kelas Active ke langkah berikutnya pada progress bar
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        // Menampilkan langkah berikutnya
        next_fs.show(); 

        // Mengirim data formulir ke controller menggunakan AJAX
        $.ajax({
            type: "POST",
            url: url, // Sesuaikan dengan alamat controller Anda
            data: formData,
            success: function(response){
                // Menangani respons dari controller jika diperlukan
                console.log(response); // Output respons dari controller ke konsol browser
                // Lakukan sesuatu setelah berhasil mengirim data ke controller, jika diperlukan
            },
            error: function(xhr, status, error){
                // Menangani kesalahan jika terjadi saat mengirim data ke controller
                console.error(xhr.responseText); // Output pesan kesalahan ke konsol browser
            }
        });

        // Menghilangkan langkah sebelumnya dengan animasi opacity
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // Membuat animasi penampilan fieldset
                var opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });

    $(".previous").click(function(){
        
        var current_fs = $(this).parent();
        var previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                var opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });

    // Memanggil fungsi untuk memeriksa formulir pada halaman saat ini saat halaman dimuat
    checkCurrentPageCompletion($('fieldset.active'));
});
