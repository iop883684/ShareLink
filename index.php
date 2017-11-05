

    <!-- <iframe style="position: absolute;width: 100%; height: 100%;">  src="play.php?id=<? echo $_GET["id"]; ?>" ></iframe> -->

<meta name="apple-itunes-app" content="app-id=1238030603, app-argument=giaitriplus://item/'.$video_id.'">

<script type="text/javascript">

    function openApp(){

        setTimeout(function () { window.location = "http://film360.tk"; }, 3000);
        window.location = "giaitriplus://item/<? echo $_GET["id"] ?>";

    }
    

</script>

<?

 // $url = 'http://www.phimmoi.net/phim/doi-cuu-ho-bai-bien-5344/';


    $video_id = "";

    if(isset($_GET["id"])) {

        $video_id = $_GET["id"];

    } 



    $string = file_get_contents("data.json");
    $data = json_decode($string,true);


    $url = $data[$video_id];


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

    
    $result = str_replace('<a id="btn-film-download"',
        '<button type="button"  onclick="openApp()"  ',$output);
    $result1 = str_replace('>Download</a>','>Xem trên App</button>',$result);


    // echo $output;
    echo $result1; // hiển thị nội dung

    // ** Bước 4 (tuỳ chọn): Đóng request để giải phóng tài nguyên trên hệ thống
    curl_close($ch);

?>

<!-- <a id="btn-film-trailer" class="btn btn-primary btn-film-trailer" title="Trailer Đội Cứu Hộ Bãi Biển - Baywatch" href="phim/doi-cuu-ho-bai-bien-5344/trailer.html" data-videourl="https://www.youtube.com/watch?v=KwZJtE212qs">Trailer</a> -->

<!-- a id="btn-film-download" class="btn btn-green btn" title="Download phim Đội Cứu Hộ Bãi Biển - Baywatch" href="phim/doi-cuu-ho-bai-bien-5344/download.html">Download</a> -->

