$(document).ready(function(){
    var object = {
        path: "",
        content: "",
        maSp: "",
        ct1: "",
        ct2: "",
        ct3: "",
        ct4: "",
        ct5: "",
        gia_goc: "",
        gia_km: ""
    }

    var lenovo = {};
    lenovo.path = "lenovo";
    lenovo.content = "Laptop Lenovo IdeaPad Gaming 3 15IAH7 82S900H2VN <br>"
        +"(Core i5 12500H | 15.6 inch FHD 120Hz | 16GB | 512GB SSD | RTX3050 4GB | Win 11)</b></h3>";
    lenovo.maSp = "Mã sp: NBLN0731"
    lenovo.ct1 = "CPU: Ryzen 7-7735HS (3.2GHz upto 4.7GHz, 16MB)"
    lenovo.ct2 = "RAM: 8GB DDR5-4800Mhz SO-DIMM (2 khe, tối đa 32GB)"
    lenovo.ct3 = "Ổ cứng: 512GB M.2 NVMe PCIe 4.0 SSD"
    lenovo.ct4 = "VGA: NVIDIA GeForce RTX 4060 8GB GDDR6"
    lenovo.ct5 = "Màn hình: 15.6-inch FHD (1920 x 1080) 16:9, 144Hz, FHD 144Hz 100% sRGB"
    lenovo.gia_goc = "21.990.00đ"
    lenovo.gia_km = "20.990.000đ"

    var asus = {};
    asus.path = "asus";
    asus.content = "Laptop Asus ROG Strix G16 G614JU-N3777W <br>"
        +"(Intel Core i7-13650HX | 16GB | 512GB | RTX 4050 6GB | 16 inch FHD+ | Win 11 | Xám)";
    asus.maSp = "Mã SP: NBAS1270"
    asus.ct1 = "CPU: Intel® Core™ i7-13650HX Processor (upto 4.90 GHz, 24MB)"
    asus.ct2 = "RAM: 16GB DDR5-4800 SO-DIMM (2x8GB, 2 khe, tối đa 32GB)"
    asus.ct3 = "Ổ cứng: 512GB PCIe 4.0 NVMe M.2 SSD"
    asus.ct4 = "VGA: NVIDIA® GeForce RTX 4050 6GB GDDR6"
    asus.ct5 = "Màn hình: 16 inch FHD+ 16:10 (1920 x 1200, WUXGA), IPS Non-Glare, NanoEdge, 165Hz, Adaptive-Sync, 100% sRGB, 250 nits"
    asus.gia_goc = "43.990.00đ"
    asus.gia_km = "39.590.000đ"

    var hp = {}
    hp.path = "hp";
    hp.content = "Laptop HP Pavilion 15-eg2081TU 7C0Q4PA <br>"
        +"(Core i5-1240P | 16GB | 512GB | Intel Iris Xe | 15.6 inch FHD IPS | Win 11 | Vàng)";
    hp.maSp = "Mã SP: NBHP0797 "
    hp.ct1 = "CPU: Intel Core i5-1240P (upto 4.40GHz, 12MB)"
    hp.ct2 = "RAM: 16GB (2 x 8GB) DDR4 3200 MHz ( 2 khe)"
    hp.ct3 = "Ổ cứng: 512GB PCIe NVMe M.2 SSD"
    hp.ct4 = "VGA: Intel Iris Xe Graphics"
    hp.ct5 = "Màn hình: 15.6 inch FHD (1920 x 1080), IPS, micro-edge, BrightView, 250 nits, 45% NTSC"
    hp.gia_goc = "20.990.00đ"
    hp.gia_km = "17.590.000đ"

    list_sp = [lenovo, asus, hp]

    $(".img_sp").click(function(){
        var _val = this.id;
        _path = "", _content = "", _maSp = "", _ct1 = "", _ct2 = "", _ct3 = "", _ct4 = "", _ct5 = "", _giaG = "", _giaKM = "";
        if(_val == 1){
            _path = list_sp[0].path,
            _content = list_sp[0].content,
            _maSp = list_sp[0].maSp,
            _ct1 = list_sp[0].ct1,
            _ct2 = list_sp[0].ct2,
            _ct3 = list_sp[0]. ct3,
            _ct4 = list_sp[0].ct4,
            _ct5 = list_sp[0].ct5,
            _giaG = list_sp[0].gia_goc,
            _giaKM = list_sp[0].gia_km
        }else if(_val == 2){
            _path = list_sp[1].path,
            _content = list_sp[1].content,
            _maSp = list_sp[1].maSp,
            _ct1 = list_sp[1].ct1,
            _ct2 = list_sp[1].ct2,
            _ct3 = list_sp[1]. ct3,
            _ct4 = list_sp[1].ct4,
            _ct5 = list_sp[1].ct5,
            _giaG = list_sp[1].gia_goc,
            _giaKM = list_sp[1].gia_km
        }else{
            _path = list_sp[2].path,
            _content = list_sp[2].content,
            _maSp = list_sp[2].maSp,
            _ct1 = list_sp[2].ct1,
            _ct2 = list_sp[2].ct2,
            _ct3 = list_sp[2]. ct3,
            _ct4 = list_sp[2].ct4,
            _ct5 = list_sp[2].ct5,
            _giaG = list_sp[2].gia_goc,
            _giaKM = list_sp[2].gia_km
        }

        var html = "";
        html += '<div class="col-lg-4">'
            + '<div class="row">'
            + '<div class="col-lg-1">'
            +    '<button class="btn" id="left" style="margin-top:100px; font-size: 20px;"><</button>'
            +'</div>'
            +'<div class="col-lg-10">'
            +    '<img id="img_main" src="./img/'+ _path +'/anh1.jpg" alt="" width="250px" height="250px">'
            +'</div>'
            +'<div class="col-lg-1">'
            +    '<button class="btn" id="right" style="margin-top:100px; font-size: 20px;">></button>'
            +'</div>'
            +'</div>'
            +'<div class="row">'
            +'<div class="col-lg-12">'
            +    '<table>'
            +        '<tr>'
            +            '<td><img src="./img/'+ _path +'/anh1.jpg" class="img_change" width="100%" height="100%" alt=""></td>'
            +            '<td><img src="./img/'+ _path +'/anh2.jpg" class="img_change" width="100%" height="100%" alt=""></td>'
            +            '<td><img src="./img/'+ _path +'/anh3.jpg" class="img_change" width="100%" height="100%" alt=""></td>'
            +           '<td><img src="./img/'+ _path +'/anh4.jpg" class="img_change" width="100%" height="100%" alt=""></td>'
            +           '<td><img src="./img/'+ _path +'/anh5.jpg" class="img_change" width="100%" height="100%" alt=""></td>'
            +        '</tr>'
            +   '</table>'
            +'</div>'
            +'</div>'
            +'</div>'
            +'<div class="col-lg-1"></div>'
            +'<div class="col-lg-7" style="margin-top: 20px;">'
            +'<h3><b>'+ _content +'</b></h3>'
            +'<p>'+ _maSp +'</p> <hr>'
            +'<div>'
            +'<img src="./img/dau_v.png" width="15px" height="15px" alt=""> '+ _ct1 +' <br>'
            +'<img src="./img/dau_v.png" width="15px" height="15px" alt=""> '+ _ct2 +' <br>'
            +'<img src="./img/dau_v.png" width="15px" height="15px" alt=""> '+ _ct3 +' <br>'
            +'<img src="./img/dau_v.png" width="15px" height="15px" alt=""> '+ _ct4 +' <br>'
            +'<img src="./img/dau_v.png" width="15px" height="15px" alt=""> '+ _ct5 +' <br>' 
            +'</div>'
            +'<div style="background-color: rgb(246, 240, 240); margin-top: 10px;">'
            +'<p>Giá niêm yết : <del>'+ _giaG +'</del></p>'
            +'<p style="color: red; font-size: 25px;">Giá khuyến mãi: '+ _giaKM +'</p>'
            +'</div>'
            +'</div>'
        $("#row1").html(html)

        $(".btn").click(function(){
            var _id = this.id;
            var _src = $("#img_main").attr("src")
            var arr = _src.split("/")
            var list = ["anh1.jpg","anh2.jpg","anh3.jpg","anh4.jpg","anh5.jpg"]
            var index = list.indexOf(arr[3])
            if (_id == "left"){
                if (index != 0) {
                    arr[3] = list[index - 1]
                }else{
                    arr[3] = list[list.length - 1]
                }
                let path_img = arr.join("/")
                $("#img_main").attr("src", path_img)
            }else{
                if (index != 4) {
                    arr[3] = list[index + 1]
                }else{
                    arr[3] = list[0]
                }
                let path_img = arr.join("/")
                $("#img_main").attr("src", path_img)
            }
        })
        $(".img_change").click(function(){
            var src = $(this).attr("src")
            $("#img_main").attr("src", src)
        })
    })
})