$(document).ready(function(){
    
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    
    $(".next").click(function(){
        // Mendapatkan data formulir yang diisi
        var formData = $('#msform').serialize();
        var baseUrl = "<?php echo base_url(); ?>";
        var url = baseUrl + "welcome/registration";
    
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
    
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
                opacity = 1 - now;
    
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
        
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();
    
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });

});