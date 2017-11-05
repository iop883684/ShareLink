
<?php

   $url = 'http://www.phimmoi.net/phim/doi-cuu-ho-bai-bien-5344/';


   echo '<meta name="apple-itunes-app" content="app-id=1238030603, app-argument=giaitriplus://item/">';

    //** Bước 1: Khởi tạo request
    $ch = curl_init(); 

    $agent = 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e Safari/8536.25';

    curl_setopt($ch, CURLOPT_USERAGENT, $agent);

    //** Bước 2: Thiết lập các tuỳ chọn
    // Thiết lập URL trong request
    curl_setopt($ch, CURLOPT_URL, $url); 

    // Thiết lập để trả về dữ liệu request thay vì hiển thị dữ liệu ra màn hình
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // ** Bước 3: thực hiện việc gửi request
    $output = curl_exec($ch); 
    echo $output; // hiển thị nội dung

    // ** Bước 4 (tuỳ chọn): Đóng request để giải phóng tài nguyên trên hệ thống
    curl_close($ch);


?>

<a id="btn-film-trailer" class="btn btn-primary btn-film-trailer" title="Trailer Đội Cứu Hộ Bãi Biển - Baywatch" href="phim/doi-cuu-ho-bai-bien-5344/trailer.html" data-videourl="https://www.youtube.com/watch?v=KwZJtE212qs">Trailer</a>

<!-- <script type="text/javascript">
    
    window.location = "giaitriplus://";

</script>> -->