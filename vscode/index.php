<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="keywords" content="Auto tạo page, nhân bản page, Auto đăng page ẩn, tách page con, up ảnh bìa/avatar cho page, Auto thêm page vào bm, set ad, Buff follow, buff mem group, buff like, cmt, share, likecmt, share ảo sll, review page bằng page/profile, Tiện ích bật tắt khiên, lọc bạn bè, chọc bạn bè..."/>
    <!-- Quảng cáo ads -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6071716241243576"
     crossorigin="anonymous"></script>
     
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VipTool v4.2</title>
  <link rel="stylesheet" href="assets/css/bs.css" />
  <link rel="stylesheet" href="assets/css/fa.css" />
  <link rel="stylesheet" href="assets/css/styles.css" />
  <script src="assets/js/jq.js"></script>
  <script src="assets/js/bs.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="preloader" style="display: none;">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>

  <div class="container">
    <div class="row" style="padding:15px">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title" style="text-align:center">CONTROL PANEL | <span id="timer"></span></h3>
         <p> <span>Hệ thống chuyên cung cấp các dịch vụ tăng Like, Follow, Share, Comment, View Video,... cho các Mạng xã hội như Facebook, Instagram, Tiktok... <a href="https://www.facebook.com/thilyquan97vn" target="_blank">THILYQUAN.XYZ</a></span> </p>
         <p> <span>Shop bán xu tds-ttc via, clone uy tín chất lượng <a href="https://www.facebook.com/thilyquan97vn" target="_blank">THILYQUAN.XYZ</a></span> </p>
        </div>
        <div class="panel-body">
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#get_token">Get TOKEN</a></li>
            <!--<li><a data-toggle="tab" href="#proxy">PROXY</a></li>-->
            <li><a data-toggle="tab" href="#get_page">Get Page</a></li>
            <li><a data-toggle="tab" href="#page_duplicate">Auto Page</a></li>
            <li><a data-toggle="tab" href="#bm">BM</a></li>
            <li><a data-toggle="tab" href="#public_page">Public Page</a></li>
            <li><a data-toggle="tab" href="#remove_child_page">Remove Child Page</a></li>
            <li><a data-toggle="tab" href="#up_avt_cover">Up Avatar, Cover</a></li>
            <li><a data-toggle="tab" href="#seeding">Seeding</a></li>
            <li><a data-toggle="tab" href="#utils">Utils</a></li>
          </ul>

          <div class="tab-content">
            <div id="get_token" class="tab-pane fade  in active">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group" style="text-align: center; font-size: 18px">
                    <p>Các loại token được khuyến nghị sử dụng tool (có thể dùng token khác nếu đủ quyền và không báo lỗi):</p>
                    <p>Token <strong>Instagram</strong> (ID: 124024574287414 ) định dạng <strong>EAABxxxxx</strong> dùng cho hầu hết các tính năng</p>
                    <p>Token <strong>Business Manager</strong> (ID: 436761779744620 ) định dạng <strong>EAAGxxxxx</strong> chỉ dùng để sử dụng 1 số tính năng mà token EAAB không dùng được. Hạn chế của token này là sẽ tự động hết hạn sau 1 thời gian và phải cần dùng với Cookie để tránh lỗi invalid request.</p>
                    <hr />
                    <button data-toggle="collapse" data-target="#token-guide" class="btn btn-success btn-lg" style="margin-bottom: 15px">Hướng dẫn lấy token EAAB</button>

                    <div id="token-guide" class="collapse">
                      <p>
                        <a class="btn btn-info btn-lg" href="https://trum.vip/api/services/bot/token?authorize" target="_blank">Bước 1: Cấp quyền (*)</a><br /><br />
                        <img src="https://i.imgur.com/pZZefGY.png" style="width:100%" /><br />
                        <span class="h4" style="color:red">(*) Chỉ cần làm bước này 1 lần duy nhất. Từ lần sau bạn có thể thực hiện luôn Bước 2.</span>
                      </p>
                      <hr />
                      <p>
                        <a class="btn btn-success btn-lg" href="https://trum.vip/api/services/bot/token" target="_blank">Bước 2: Lấy link</a><br /><br />
                        <span class="h4">Copy toàn bộ văn bản trong thanh địa chỉ của trình duyệt rồi dán vào phần Access Token của phần cài BOT.</span>
                      </p>
                      <img src="https://i.imgur.com/wsLOaCa.png" style="width:100%" />

                      <hr />
                    </div>
                    <hr />

                    <button data-toggle="collapse" data-target="#token-guide-bm" class="btn btn-info btn-lg" style="margin-bottom: 15px">Hướng dẫn lấy token EAAG</button>

                    <div id="token-guide-bm" class="collapse">
                      <p>
                        Bước 1: Acc cần phải có sẵn 1 BM. Nếu chưa có thì vào <a href="https://business.facebook.com/overview" target="_blank">https://business.facebook.com/overview</a> tạo 1 cái.
                      </p>
                      <hr />
                      <p>
                        Bước 2: Copy link này và dán vào trình duyệt <kbd>view-source:https://business.facebook.com/settings?business_id=BM_ID</kbd> (thay BM_ID thành ID của 1 BM bất kì). Sau đó Ctrl F tìm kiếm EAAG rồi copy!
                      </p>
                      <img src="https://i.imgur.com/pIKySuN.png" style="width:100%" />
                      <br />
                      <p style="color:red">Token này phải sử dụng cùng với cookie, nếu không sẽ gặp lỗi <strong>Invalid Request</strong></p>


                    </div>
                    <hr />
                    <p>Liên hệ hỗ trợ, báo lỗi, nâng cấp/sửa đổi/cập nhật tính năng inbox <a href="https://www.facebook.com/thilyquan97vn" target="_blank">Facebook</a></p>
                  </div>
                </div>
              </div>
            </div>
            <div id="proxy" class="tab-pane fade">
              <div class="row">
                <div class="form-group">
                  <label class="col-sm-2 control-label">List Proxy: </label>
                  <div class="col-sm-10">
                    <textarea type="text" id="proxy_list" class="form-control input-lg" rows="10" placeholder="Mỗi Proxy 1 Dòng"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <p>Nhập đúng Định dạng Proxy IP:Port hoặc User:Pass@IP:Port, mỗi proxy 1 dòng.</p>
                  <p>Khi sử dụng tính năng, tools sẽ chọn ngẫu nhiên 1 proxy.</p>
                  <p>Trường hợp bị lỗi, kiểm tra lại xem proxy còn live không, server có chặn port proxy không...</p>
                  <p>Proxy nào die vui lòng xoá đi rồi Save lại. List proxy được lưu tại file <strong>proxy.txt</strong></p>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <button id="proxy_process" class="btn btn-primary btn-lg btn-block">SAVE</button>
                  </div>
                </div>
              </div>
              <script>
                $(document).ready(function() {
        $("#proxy_process").click(function() {
            $btn = $(this);
            $btn.attr('disabled', 'disabled')
            let proxy_list = $("#proxy_list").val().trim();
            $.ajax({
                url: "./process/proxy.php",
                method: "post",
                data: {
                    proxy_list: proxy_list
                },
            }).done(function(response) {
                toastr.success('OK')
                $btn.removeAttr("disabled");
            });
        });
    });
</script>
            </div>
            <div id="get_page" class="tab-pane fade">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kiểu: </label>
                    <div class="col-sm-10">
                      <select id="get_page_type" class="form-control input-lg">
                        <option value="-">--Select One--</option>
                        <option value="1">GET PAGE (nhập token nick cầm page)</option>
                        <option value="2">GET PAGE CON (nhập token page mẹ)</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Token: </label>
                    <div class="col-sm-10">
                      <textarea rows="6" id="get_page_token" class="form-control" placeholder="Mỗi token 1 dòng"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Định dạng: </label>
                    <div class="col-sm-10">
                      <select id="get_page_format" class="form-control input-lg">
                        <option value="-">--Select One--</option>
                        <option value="1">PAGE ID</option>
                        <option value="2">PAGE TOKEN</option>
                        <option value="3">PAGE ID|PAGE TOKEN</option>
                        <option value="4">PAGE ID|PAGE TOKEN|PAGE NAME</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Loại Page: </label>
                    <div class="col-sm-10">
                      <select id="get_page_prop" class="form-control input-lg">
                        <option value="-">--Select One--</option>
                        <option value="0">Tất cả</option>
                        <option value="1">PAGE PRO5</option>
                        <option value="2">PAGE TRUYỀN THỐNG</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Limit: </label>
                    <div class="col-sm-10">
                      <input type="number" id="get_page_limit_qty" class="form-control input-lg" value="10" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Luồng: </label>
                    <div class="col-sm-10">
                      <input type="number" min="1" max="100" id="get_page_threads" class="form-control" placeholder="" value="5"></input>
                    </div>
                  </div>
                  <div class="form-group">
                    <p>Get danh sách các page hiện có trong 1 acc, hoặc danh sách các page con từ 1 page mẹ</p>
                    <p>Hỗ trợ xuất nhiều định dạng, dữ liệu này sẽ được dùng cho các tools khác như buff follow, join group...</p>
                    <p>Limit là giới hạn số lượng mỗi lần quét để tránh bị lỗi với các acc cầm nhiều page. Ví dụ acc có 1000 page, nhập limit là 20 thì tools sẽ quét 50 lần, mỗi lần 20 page tránh lỗi (tốc độ sẽ chậm hơn).</p>

                  </div>

                  <div class="form-group">
                    <div class="col-sm-12">
                      <button id="get_page_btn" class="btn btn-primary btn-lg btn-block">SUBMIT</button>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-12">
                      <textarea rows="6" id="get_page_result" class="form-control" style="display:none"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <script>
                $(document).ready(function() {
        async function startGet(index, tokens, type, format, prop, limit_qty, threads) {
            return new Promise(function(resolve, reject) {
                var response = '';
                var fetches = [];
                for (let i = 0; i < threads; i++) {
                    iter = i + index * threads
                    if (tokens[iter] != undefined) {
                        var token = tokens[iter]
                        fetches.push(fetch('./process/get_page.php', {
                                method: 'POST',
                                // body: `token=${token}&type=${type}&format=${format}`,
                                body: JSON.stringify({
                                    token: token,
                                    type: type,
                                    format: format,
                                    prop: prop,
                                    limit_qty: limit_qty
                                }),
                                headers: {
                                    "Content-Type": "application/json",
                                }
                            })
                            .then(json => json.json())
                            .then(response => {
                                if (!response.success) {
                                    toastr.error(response.msg);
                                    return '';
                                }
                                var length = response.data.length;
                                if (length <= 0) {
                                    toastr.error('No page found!');
                                    return '';
                                }
                                var result = '';

                                response.data.forEach(function(item) {
                                    if(prop != 0){
                                        if(prop == 1){
                                            if(item['additional_profile_id'] == undefined){
                                                return false;
                                            }
                                        }else if(prop == 2){
                                            if(item['additional_profile_id'] != undefined){
                                                return false;
                                            }
                                        }
                                    }
                                    if (format == 1) {
                                        result = item['id'] + "\n"
                                    } else if (format == 2) {
                                        result = item['access_token'] + "\n"
                                    } else if (format == 3) {
                                        result = item['id'] + '|' + item['access_token'] + "\n"
                                    } else if (format == 4) {
                                        result = item['id'] + '|' + item['access_token'] + '|' + item['name'] + "\n"
                                    }

                                    $('#get_page_result').show().append(result);
                                })

                                return result
                            }).catch(err => {
                                toastr.error(`Error: ${err}`)
                            }))
                    }
                }

                Promise.allSettled(fetches).then(function(fetchResult) {
                    // fetchResult.forEach(function(item) {
                    //     response += item.value
                    // });

                    // resolve(response)
                    resolve();
                }).catch(err => {
                    toastr.error(`Error: ${err}`)
                    reject(`${err}`)
                })
            })

        }



        $('#get_page_btn').click(function() {
            $btn = $(this);
            let token = $('#get_page_token').val().trim();
            let type = $('#get_page_type').val().trim();
            let prop = $('#get_page_prop').val().trim();
            let format = $('#get_page_format').val().trim();
            let threads = $('#get_page_threads').val().trim();
            let limit_qty = $('#get_page_limit_qty').val().trim();
            let delay = 0;
            if (!token || !type || !format || !threads) {
                toastr.error('Nhập đầy đủ dữ liệu');
                return false;
            }

            tokens = token.split('\n')

            var loop_count = Math.ceil(tokens.length / threads)
            var loop = 1;
            $('#get_page_result').empty();
            LOADER();

            (async function() {
                for (let i = 0; i < loop; i++) {
                    setTimeout(async function() {
                        for (let j = 0; j < loop_count; j++) {
                            await startGet(j, tokens, type, format, prop, limit_qty, threads)
                        }

                        if (i == (loop - 1)) {
                            LOADER(false);
                        }
                    }, i * delay * 1000)
                }
            })();
            
            
        })
    })
</script>
            </div>
            <div id="page_duplicate" class="tab-pane fade">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hành động: </label>
                    <div class="col-sm-10">
                      <select id="type" class="form-control input-lg">
                        <option value="-">--Select One--</option>
                        <option value="1">TẠO PAGE</option>
                        <option value="2">NHÂN BẢN PAGE</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Token: </label>
                    <div class="col-sm-10">
                      <textarea type="text" id="token_page" class="form-control input-lg" rows="6" placeholder="Mỗi token 1 dòng"></textarea>
                    </div>
                  </div>
                  <div class="form-group phone">
                    <label class="col-sm-2 control-label">Số điện thoại: </label>
                    <div class="col-sm-10">
                      <textarea type="text" id="phone" class="form-control input-lg" rows="6" placeholder="Mỗi phone 1 dòng, bao gồm mã quốc gia. Ví dụ: 8496325452"></textarea>
                    </div>
                  </div>
                  <div class="form-group location">
                    <label class="col-sm-2 control-label">Vị trí: </label>
                    <div class="col-sm-10">
                      <textarea type="text" id="location" class="form-control input-lg" rows="6" placeholder="Mỗi vị trí 1 dòng. Định dạng:
street,city,country,zipcode,lat,long.
Ví dụ:
69 Tran Duy Hung,Hanoi,Vietnam,10000,21.0245,105.8412
Chung Cư HH1,Tân Hiệp,Vietnam,12345,10.4490,106.3439

Nếu để trống, tools sẽ tự lấy dữ liệu có sẵn tại file vn.json"></textarea>
                    </div>
                  </div>
                  <div class="form-group page_name">
                    <label class="col-sm-2 control-label">Tên page: </label>
                    <div class="col-sm-10">
                      <textarea type="text" id="page_name" class="form-control input-lg" rows="6" placeholder="Mỗi tên 1 dòng"></textarea>
                      <br />
                      <input type="checkbox" id="randomize" value="1" /> Thêm số ngẫu nhiên vào sau tên page tránh trùng lặp tên (cho tạo page)
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Số lượng: </label>
                    <div class="col-sm-10">
                      <input type="number" id="quantity" class="form-control input-lg" value="10" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Luồng: </label>
                    <div class="col-sm-10">
                      <input type="number" id="threads" class="form-control input-lg" value="5" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">DELAY (giây): </label>
                    <div class="col-sm-10">
                      <input type="text" id="delay" class="form-control input-lg" value="5" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <input type="checkbox" id="showlog" /> Show Logs
                    </div>
                  </div>
                  <div class="form-group">
                    <p>Không để delay chạy quá nhanh sẽ block nhanh.</p>
                    <p>Page mẹ cần nhân bản (page tạo > 2 ngày, đầy đủ ảnh bìa, avatar). Thiết lập vị trí cho page mẹ tại link https://business.facebook.com/business_locations/?page_id=PAGE_ID (thay PAGE ID thành id của page mẹ, dạng id basic)</p>
                    <p>Số điện thoại cho page con phải bao gồm cả mã quốc gia. Ví dụ: 0364812813 thì phải nhập là 84364812813 . Phải nhập chính xác định dạng sdt theo từng nhà mạng tại quốc gia đó, nếu sai đỊnh dạng sẽ lỗi.</p>
                    <p>Vị trí nếu để trống tools sẽ lấy dữ liệu có sẵn tại file vn.json . Nếu nhập không đúng định dạng hoặc sai vị trí sẽ lỗi, page con trùng vị trí cũng sẽ lỗi. Có thể lên google search nhiều vị trí khác.</p>
                    <p>Một số page sau khi nhân bản có thể mất 1 thời gian để quyền admin được cập nhật.</p>
                    <p>Khi nhân bản page nếu field Tên page không nhập thì page con được nhân bản ra tên sẽ giống page mẹ!</p>
                    <p>Auto tạo page trên 1 số acc có thể báo lỗi, nhưng page vẫn được tạo.</p>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button id="duplicate_page" class="btn btn-primary btn-lg btn-block">SUBMIT</button>
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea style="display: none" id="duplicate_result" rows="6" class="form-control"></textarea>
                  </div>
                </div>
              </div>
              <script>
                $(document).ready(function() {
        $('#type').change(function() {
            $('.page_name,.phone,.location').hide()
           if($(this).val() == 1){
            $('.page_name').show();
           }else{
            $('.page_name').show();
            $('.phone').show();
            $('.location').show();
           }
        })
        async function startReg(index, tokens, type, phone, page_name, randomize, location, threads) {
            var showlog = $('#showlog:checked').length;
            return new Promise(function(resolve, reject) {
                var response = "";
                var fetches = [];
                for (let i = 0; i < threads; i++) {
                    iter = i + index * threads;
                    if (tokens[iter] != undefined) {
                        var token = tokens[iter];
                        fetches.push(
                            fetch("./process/auto_page.php", {
                                method: "POST",
                                // body: `token=${token}&type=${type}&format=${format}`,
                                body: JSON.stringify({
                                    token: token,
                                    type: type,
                                    phone: phone,
                                    page_name: page_name,
                                    randomize: randomize,
                                    location: location
                                }),
                                headers: {
                                    "Content-Type": "application/json",
                                },
                            })
                            .then((json) => json.json())
                            .then((response) => {
                                if (!response.success) {
                                    toastr.error(response.msg);
                                    if(showlog){
                                        $("#duplicate_result").show().append(`Failed | ${response.msg}\n`);
                                    }
                                    return ''
                                }
                                toastr.success(`Success: ${response.page_id}`)
                                if(showlog){
                                    $("#duplicate_result").show().append(`Success ${response.page_id}\n`);
                                }
                                return response.page_id + "\n";
                            })
                            .catch((err) => {
                                toastr.error(`Error: ${err}`);
                            })
                        );
                    }
                }

                Promise.allSettled(fetches)
                    .then(function(fetchResult) {
                        fetchResult.forEach(function(item) {
                            response += item.value;
                        });
                        resolve(response);
                    })
                    .catch((err) => {
                        toastr.error(`Error: ${err}`);
                        reject(`${err}`);
                    });
            });
        }


        $("#duplicate_page").click(function() {
            $btn = $(this);
            let token_page = $("#token_page").val().trim();
            let delay = $("#delay").val().trim();
            let type = $("#type").val().trim();
            let phone = $("#phone").val().trim();
            let page_name = $("#page_name").val().trim();
            let randomize = $("#randomize:checked").val()?.trim();
            let threads = $("#threads").val().trim();
            let location = $("#location").val().trim();
            if (!token_page) {
                toastr.error("Nhập token");
                return false;
            }
            tokens = token_page.split("\n");
            let quantity = $("#quantity").val().trim();

            var loop_count = Math.ceil(tokens.length / threads);
            var loop = quantity;

            $("#duplicate_result").empty();

            LOADER();
            (async function() {
                for (let i = 0; i < loop; i++) {
                    for (let j = 0; j < loop_count; j++) {
                        await startReg(j, tokens, type, phone, page_name, randomize, location, threads);
                        await delay_time(delay)
                    }

                    if (i == loop - 1) {
                        LOADER(false)
                    }
                }
            })();
        });
    });
</script>
            </div>
            <div id="bm" class="tab-pane fade">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Hành động: </label>
                    <div class="col-sm-10">
                      <select id="bm_type" class="form-control input-lg">
                        <option value="-">--Select One--</option>
                        <option value="1">THÊM PAGE VÀO BM</option>
                        <option value="2">SET ADMIN PAGE TRONG BM</option>
                        <option value="4">GET PAGE TRONG BM</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Token/Cookie: </label>
                    <div class="col-sm-10">
                      <input type="text" id="bm_token" class="form-control input-lg" value="" placeholder="Định dạng TOKEN hoặc TOKEN|Cookie" />
                      <br />
                      <div id="bm_notes" style="color:red;display:none" style="display:none">Cần sử dụng token <strong>EAAG</strong> và Cookie. Định dạng nhập <strong>TOKEN|COOKIE</strong></div>
                    </div>
                  </div>
                  <div class="form-group bm_user" style="display: none">
                    <label class="col-sm-2 control-label"><button class="btn btn-primary bm_user_get">GET USER</button> </label>
                    <div class="col-sm-10" id="bm_user">
                      <span>Bấm vào GET USER để lấy danh sách user hiện tại trong BM</span>
                    </div>
                  </div>
                  <div class="form-group bm_format" style="display:none">
                    <label class="col-sm-2 control-label">Định dạng: </label>
                    <div class="col-sm-10">
                      <select id="bm_format" class="form-control input-lg">
                        <option value="-">--Select One--</option>
                        <option value="1">PAGE ID</option>
                        <option value="2">PAGE TOKEN</option>
                        <option value="3">PAGE ID|PAGE TOKEN</option>
                        <option value="4">PAGE ID|PAGE TOKEN|PAGE NAME</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group bm_id">
                    <label class="col-sm-2 control-label">BM ID: </label>
                    <div class="col-sm-10">
                      <input type="number" id="bm_id" class="form-control input-lg" value="" placeholder="Nhập BM ID" />
                    </div>
                  </div>
                  <div class="form-group bm_list_page" style="display:none">
                    <label class="col-sm-2 control-label">List ID Page: </label>
                    <div class="col-sm-10">
                      <textarea type="text" id="bm_list_page" class="form-control input-lg" rows="6" placeholder="Mỗi id 1 dòng"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Luồng: </label>
                    <div class="col-sm-10">
                      <input type="number" id="bm_threads" class="form-control input-lg" value="5" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">DELAY (giây): </label>
                    <div class="col-sm-10">
                      <input type="text" id="bm_delay" class="form-control input-lg" value="5" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <input type="checkbox" id="bm_showlog" /> Show Logs
                    </div>
                  </div>
                  <div class="form-group">
                    <p>Vui lòng sử dụng token EAAG với định dạng TOKEN|COOKIE ngoại trừ hành động GET PAGE.</p>
                    <p>Tài khoản phải là admin trực tiếp và page chưa được thêm vào BM nào khác mới có thể thêm vào BM.</p>
                    <p>Hỗ trợ thêm cả page con vào BM mà không cần tách khỏi page mẹ (page con phải được cập nhật quyền admin).</p>
                    <p>Bypass có thể thêm page vào BM khi chưa làm admin đủ 7 ngày.</p>
                    <p>Với những page không có quyền admin trực tiếp, không thể get được token page. Sử dụng tính năng Set Admin trong BM để có thể Get Token của page.</p>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button id="bm_btn" class="btn btn-primary btn-lg btn-block">SUBMIT</button>
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea style="display: none" id="bm_result" rows="6" class="form-control"></textarea>
                  </div>
                </div>
              </div>
              <script>
                $(document).ready(function() {
        async function startBM(index, list_page, type, bm_token, bm_id, bm_user_id, format, threads) {
            var showlog = $('#bm_showlog:checked').length;

            return new Promise(function(resolve, reject) {
                var response = "";
                var fetches = [];
                for (let i = 0; i < threads; i++) {
                    iter = i + index * threads;
                    if (list_page[iter] != undefined) {
                        var page_id = list_page[iter];
                        fetches.push(
                            fetch("./process/bm.php", {
                                method: "POST",
                                body: JSON.stringify({
                                    page_id: page_id,
                                    bm_token: bm_token,
                                    bm_id: bm_id,
                                    type: type,
                                    bm_user_id: bm_user_id,
                                    format: format
                                }),
                                headers: {
                                    "Content-Type": "application/json",
                                },
                            })
                            .then((json) => json.json())
                            .then((response) => {
                                if (type == 4) {
                                    if (!response.success) {
                                        toastr.error(response.msg);
                                        if (showlog) {
                                            $("#bm_result").show().append(`Failed | ${response.msg}\n`);
                                        }
                                        return ''
                                    }
                                    toastr.success(`Done`)
                                    response.data.forEach(function(item) {
                                        if (format == 1) {
                                            result = item['id'] + "\n"
                                        } else if (format == 2) {
                                            result = item['access_token'] + "\n"
                                        } else if (format == 3) {
                                            result = item['id'] + '|' + item['access_token'] + "\n"
                                        } else if (format == 4) {
                                            result = item['id'] + '|' + item['access_token'] + '|' + item['name'] + "\n"
                                        }

                                        $('#bm_result').show().append(result);
                                    })

                                    return result
                                } else {
                                    if (!response.success) {
                                        toastr.error(response.msg);
                                        if (showlog) {
                                            $("#bm_result").show().append(`Failed | ${page_id} | ${response.msg}\n`);
                                        }
                                        return ''
                                    }
                                    toastr.success(`Success ${response.page_id}`)
                                    if (showlog) {
                                        $("#bm_result").show().append(`Success ${response.page_id}\n`);
                                    }
                                    return response.page_id + "\n";
                                }

                            })
                            .catch((err) => {
                                toastr.error(`Error: ${err}`);
                            })
                        );
                    }
                }

                Promise.allSettled(fetches)
                    .then(function(fetchResult) {
                        fetchResult.forEach(function(item) {
                            response += item.value;
                        });
                        resolve(response);
                    })
                    .catch((err) => {
                        toastr.error(`Error: ${err}`);
                        reject(`${err}`);
                    });
            });
        }

        async function delay_time(ms) {
            ms *= 1000;
            return new Promise(resolve => setTimeout(resolve, ms));
        }

        $("#bm_type").change(function() {
            $('#bm_notes').show();
            $('.bm_user').hide();
            $('.bm_format').hide();
            $('.bm_list_page').hide();
            if ($(this).val() == 2) {
                $('.bm_user').show();
                $('.bm_list_page').show();
            } else if ($(this).val() == 4) {
                $('#bm_notes').hide()

                $('.bm_format').show();
            } else {
                $('.bm_list_page').show();
            }
        })

        $('.bm_user_get').click(function() {
            var token = $('#bm_token').val();
            var bm_id = $('#bm_id').val();
            if (!token) {
                toastr.error('Vui lòng nhập Token|Cookie để get user.');
                return false;
            }
            if (!bm_id) {
                toastr.error('Vui lòng nhập BM ID để get user.');
                return false;
            }
            fetch('./process/bm.php', {
                    method: 'POST',
                    body: JSON.stringify({
                        type: 3,
                        bm_token: token,
                        bm_id: bm_id
                    }),
                    headers: {
                        "Content-Type": "application/json"
                    }
                }).then(res => res.json())
                .then(response => {
                    if (!response.success) {
                        toastr.error(response.msg)
                        return false;
                    }

                    input_html = ''
                    $.each(response.data, function(index, item) {
                        input_html += `<input value="${item.id}" class="bm_user_id" type="checkbox" name="bm_user_id[]" /> ${item.name} - ${item.role}<br />`
                    })

                    $('#bm_user').empty().html(input_html)


                })
        })

        $("#bm_btn").click(function() {
            $btn = $(this);
            let bm_token = $("#bm_token").val().trim();
            let bm_id = $("#bm_id").val().trim();
            let delay = $("#bm_delay").val().trim();
            let type = $("#bm_type").val().trim();
            let bm_list_page = $("#bm_list_page").val().trim();
            let threads = $("#bm_threads").val().trim()
            let format = $("#bm_format").val().trim()
            let bm_user_id = '';
            if ($(".bm_user_id") != undefined) {
                bm_user_id = $(".bm_user_id:checked").map(function() {
                    return $(this).val();
                }).get();
            }

            if (type == 2) {
                if (!bm_user_id.length) {
                    toastr.error('Chọn 1 user để set admin.')
                    return false;
                }
            }
            if (!bm_id || !type || !bm_token) {
                toastr.error("Nhập đầy đủ dữ liệu");
                return false;
            }
            list_page = bm_list_page.split("\n");

            var loop_count = Math.ceil(list_page.length / threads);
            if (type == 4) {
                loop_count = 1;
            }
            var loop = 1;

            $("#bm_result").empty();
            LOADER();
            (async function() {
                for (let i = 0; i < loop; i++) {
                    for (let j = 0; j < loop_count; j++) {
                        await startBM(j, list_page, type, bm_token, bm_id, bm_user_id, format, threads);
                        await delay_time(delay)
                    }

                    if (i == loop - 1) {
                        LOADER(false)
                    }
                }
            })();
        });
    });
</script>
            </div>
            <div id="public_page" class="tab-pane fade">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Token Nick cầm page: </label>
                    <div class="col-sm-10">
                      <input type="text" id="pl_token" class="form-control input-lg" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Limit: </label>
                    <div class="col-sm-10">
                      <input type="number" id="pl_limit_qty" class="form-control input-lg" value="10" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">DELAY (giây): </label>
                    <div class="col-sm-10">
                      <input type="number" id="pl_delay" class="form-control input-lg" value="10" />
                    </div>
                  </div>
                  <div class="form-group">
                    <p>Hiển thị các trang bị ẩn. Hỗ trợ page thường.</p>
                    <p>Limit là giới hạn số lượng mỗi lần quét để tránh bị lỗi với các acc cầm nhiều page. Ví dụ acc có 1000 page, nhập limit là 20 thì tools sẽ quét 50 lần, mỗi lần 20 page tránh lỗi (tốc độ sẽ chậm hơn).</p>

                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button id="public_page_process" class="btn btn-primary btn-lg btn-block">SUBMIT</button>
                    </div>
                  </div>

                </div>
              </div>
              <script>
                $(document).ready(function() {
        $('#public_page_process').click(function() {
            $btn = $(this);
            let token = $('#pl_token').val().trim();
            let delay = $('#pl_delay').val().trim();
            let limit_qty = $('#pl_limit_qty').val().trim();

            if (!token || !delay) {
                toastr.error('Nhập đầy đủ dữ liệu');
                return false;
            }

            $.ajax({
                url: './process/public_page.php',
                method: 'post',
                data: {
                    token: token,
                    action: 'prepare_data'
                }
            }).done(function(response) {
                if (!response.success) {
                    toastr.error(response.msg);
                    return false;
                }
                var length = response.data.length;
                if (length <= 0) {
                    toastr.error('No hidden page found!');
                    return false
                }
                $btn.attr('disabled', 'disabled');

                $.each(response.data, function(index, item) {

                    setTimeout(function() {
                        $.ajax({
                            url: './process/public_page.php',
                            method: 'post',
                            data: {
                                page_id: item.id,
                                page_token: item.access_token,
                                action: 'public',
                                limit_qty: limit_qty
                            }
                        }).done(function(result) {
                            if (!result.success) {
                                toastr.error(result.msg)
                            }
                            toastr.success('OK ' + item.id)
                            if ((index + 1) >= length) {
                                $btn.removeAttr('disabled');
                                toastr.success('Done')
                            }
                        });
                    }, index * delay * 1000);
                })
            });
        })
    })
</script>
            </div>
            <div id="remove_child_page" class="tab-pane fade">



              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">TOKEN PAGE MẸ: </label>
                    <div class="col-sm-10">
                      <input type="text" id="remove_child_token_page" class="form-control input-lg" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Limit: </label>
                    <div class="col-sm-10">
                      <input type="number" id="remove_child_limit_qty" class="form-control input-lg" value="10" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">DELAY (giây): </label>
                    <div class="col-sm-10">
                      <input type="number" id="remove_child_delay" class="form-control input-lg" value="10" />
                    </div>
                  </div>
                  <div class="form-group">
                    <p>Không để delay chạy quá nhanh sẽ block nhanh.</p>
                    <p>Chú ý Phải set admin hoặc thêm page con vào bm trước khi tách khỏi page mẹ, nếu không sẽ mất hoàn toàn quyền admin.<br />
                      Nên Sử dụng Tính năng thêm Page con vào BM trước khi tách.</p>
                    <p>Limit là giới hạn số lượng mỗi lần quét để tránh bị lỗi với các acc cầm nhiều page. Ví dụ acc có 1000 page, nhập limit là 20 thì tools sẽ quét 50 lần, mỗi lần 20 page tránh lỗi (tốc độ sẽ chậm hơn).</p>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button id="remove_child_process" class="btn btn-primary btn-lg btn-block">SUBMIT</button>
                    </div>
                  </div>

                  <div class="form-group">
                    <textarea style="display: none" id="remove_child_result" rows="6" class="form-control"></textarea>
                  </div>
                </div>
              </div>
              <script>
                $(document).ready(function() {
        $('#remove_child_process').click(function() {
            let token = $('#remove_child_token_page').val().trim();
            let limit_qty = $('#remove_child_limit_qty').val().trim();
            if (!token) {
                toastr.error('Nhập token page');
                return false;
            }
            $btn = $(this);
            let delay = $('#remove_child_delay').val().trim();
            $.ajax({
                url: './process/remove_child_page.php',
                method: 'post',
                data: {
                    token: token,
                    limit_qty: limit_qty,
                    action: 'prepare_data'
                }
            }).done(function(response) {
                if (!response.success) {
                    toastr.error(response.msg);
                    return false;
                }
                page_ids = response.data;
                var length = page_ids.length
                if (length <= 0) {
                    toastr.error('Empty page');
                    return false;
                }
                $btn.attr('disabled', 'disabled');
                $('#remove_child_result').empty();
                $.each(page_ids, function(index, item) {
                    setTimeout(function() {
                        $.ajax({
                            url: './process/remove_child_page.php',
                            method: 'post',
                            data: {
                                token: token,
                                page_id: item.id,
                                action: 'remove'
                            }
                        }).done(function(response) {
                            if (!response.success) {
                                toastr.error(response.msg);
                            }

                            $('#remove_child_result').show().append(`${item.id} removed\n`);
                            if ((index + 1) >= length) {
                                $btn.removeAttr('disabled');
                                $('#remove_child_result').append('Done!');
                            }
                        });
                    }, index * delay * 1000);
                });
            });
        });
    })
</script>
            </div>
            <div id="up_avt_cover" class="tab-pane fade">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">List Token: </label>
                    <div class="col-sm-10">
                      <textarea type="text" id="up_avt_token" rows="6" class="form-control input-lg" placeholder="Mỗi Token 1 dòng"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">LINK ẢNH AVT: </label>
                    <div class="col-sm-10">
                      <textarea type="text" id="up_avt_link" rows="6" class="form-control input-lg" placeholder="Mỗi link ảnh 1 dòng"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">LINK ẢNH COVER: </label>
                    <div class="col-sm-10">
                      <textarea type="text" id="up_avt_link_cover" rows="6" class="form-control input-lg" placeholder="Mỗi link ảnh 1 dòng"></textarea>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Luồng: </label>
                    <div class="col-sm-10">
                      <input id="up_avt_threads" class="form-control input-lg" value="5"></input>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">DELAY (giây): </label>
                    <div class="col-sm-10">
                      <input type="text" id="up_avt_delay" class="form-control input-lg" value="5" />
                    </div>
                  </div>

                  <div class="form-group">
                    <p>Không để delay chạy quá nhanh sẽ block nhanh.</p>
                    <p>Link ảnh trực tiếp đuôi .jpg (dạng: https://link.com/.../.../anh.jpg)</p>
                    <div class="form-group">
                      <div class="col-sm-12">
                        <button id="up_avt_cover_process" class="btn btn-primary btn-lg btn-block">SUBMIT</button>
                      </div>
                    </div>
                    <div class="form-group">
                      <textarea style="display: none" id="up_avt_result" rows="6" class="form-control"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <script>
                $(document).ready(function() {
        async function startUp(index, tokens, avt_link, cover_link, threads) {
            return new Promise(function(resolve, reject) {
                var response = "";
                var fetches = [];
                for (let i = 0; i < threads; i++) {
                    iter = i + index * threads;
                    if (tokens[iter] != undefined) {
                        var token = tokens[iter];
                        fetches.push(
                            fetch("./process/up_avt_cover.php", {
                                method: "POST",
                                // body: `token=${token}&type=${type}&format=${format}`,
                                body: JSON.stringify({
                                    token: token,
                                    avt_link: avt_link,
                                    cover_link: cover_link
                                }),
                                headers: {
                                    "Content-Type": "application/json",
                                },
                            })
                            .then((json) => json.json())
                            .then((response) => {
                                if (!response.success) {
                                    toastr.error(response.msg);
                                    return ''
                                }
                                toastr.info(`Done`)

                                $("#up_avt_result").show().append(`${response.page_id} | UP AVT Status: ${response.up_avt} | UP COVER Status: ${response.up_cover}` + "\n");
                                
                                return `${response.page_id} | UP AVT Status: ${response.up_avt} | UP COVER Status: ${response.up_cover}` + "\n";
                            })
                            .catch((err) => {
                                toastr.error(`Error: ${err}`);
                            })
                        );
                    }
                }

                Promise.allSettled(fetches)
                    .then(function(fetchResult) {
                        fetchResult.forEach(function(item) {
                            response += item.value;
                        });
                        resolve(response);
                    })
                    .catch((err) => {
                        toastr.error(`Error: ${err}`);
                        reject(`${err}`);
                    });
            });
        }

       


        $("#up_avt_cover_process").click(function() {
            $btn = $(this);
            let token = $("#up_avt_token").val().trim();
            let delay = $("#up_avt_delay").val().trim();;
            let avt_link = $("#up_avt_link").val().trim();
            let cover_link = $("#up_avt_link_cover").val().trim();
            let threads = $("#up_avt_threads").val().trim();
            if (!token || !threads) {
                toastr.error("Nhập đầy đủ dữ liệu");
                return false;
            }
            let tokens = token.split("\n");

            var loop_count = Math.ceil(tokens.length / threads);
            var loop = 1;

            $("#up_avt_result").empty();
            LOADER();
            (async function() {
                for (let i = 0; i < loop; i++) {
                    for (let j = 0; j < loop_count; j++) {
                        await startUp(j, tokens, avt_link, cover_link, threads);
                        
                        await delay_time(delay)
                    }

                    if (i == loop - 1) {
                        LOADER(false)
                    }
                }
            })();



        });
    });
</script>
            </div>
            <div id="seeding" class="tab-pane fade">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kiểu: </label>
                    <div class="col-sm-10">
                      <select id="seeding_type" class="form-control input-lg">
                        <option value="-">--Select One--</option>
                        <option value="1">Tăng cảm xúc</option>
                        <option value="2">Tăng bình luận</option>
                        <option value="3">Tăng chia sẻ</option>
                        <option value="4">Tăng follow</option>
                        <option value="12">Tăng follow (api v2)</option>
                        <option value="5">Tăng thành viên nhóm</option>
                        <option value="6">Tăng cảm xúc comment</option>
                        <option value="7">Tăng đánh giá page</option>
                        <option value="8">Tăng share ảo</option>
                        <option value="9">Tăng comment ảo</option>
                        <option value="10">Tăng view story</option>
                        <option value="11">Tăng like+follow page</option>
                      </select>
                      <div id="seeding_notes" style="color:red"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">List Token: </label>
                    <div class="col-sm-10">
                      <textarea rows="6" type="text" id="seeding_token" class="form-control input-lg" placeholder="Mỗi Token, Cookie 1 dòng"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">ID: </label>
                    <div class="col-sm-10">
                      <input class="form-control input-lg" rows="8" id="seeding_id" placeholder="Nhập ID cần tương tác"></input>
                    </div>
                  </div>
                  <div class="form-group target_id" style="display:none">
                    <label class="col-sm-2 control-label">Target ID: </label>
                    <div class="col-sm-10">
                      <input class="form-control input-lg" rows="8" id="seeding_target_id" placeholder="Nhập ID nhóm/trang cá nhân/page mà bài viết sẽ chia sẻ vào. Để trống sẽ chia sẻ lên trang cá nhân"></input>
                    </div>
                  </div>
                  <div class="form-group reaction" style="display:none">
                    <label class="col-sm-2 control-label">Cảm xúc: </label>
                    <div class="col-sm-10">
                      <select id="seeding_reaction" name="seeding_reaction[]" class="form-control input-lg" multiple>
                        <option value="LIKE">LIKE</option>
                        <option value="LOVE">LOVE</option>
                        <option value="HAHA">HAHA</option>
                        <option value="WOW">WOW</option>
                        <option value="SAD">SAD</option>
                        <option value="ANGRY">ANGRY</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group message" style="display:none">
                    <label class="col-sm-2 control-label">Nội dung: </label>
                    <div class="col-sm-10">
                      <textarea id="seeding_message" class="form-control  input-lg" rows="6" placeholder="Mỗi nội dung 1 dòng"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Luồng : </label>
                    <div class="col-sm-10">
                      <input type="number" id="seeding_threads" class="form-control input-lg" value="5" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">DELAY (giây): </label>
                    <div class="col-sm-10">
                      <input type="text" id="seeding_delay" class="form-control input-lg" value="5" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <input type="checkbox" id="seed_showlog" /> Show Logs
                    </div>
                  </div>
                  <div class="form-group">
                    <p>Không để delay chạy quá nhanh sẽ block nhanh.</p>
                    <p>Comment ảo bắt buộc phải dùng Cookie</p>
                    <p>Tăng đánh giá page, like+follow page phải nhập ID Page cần tăng dưới dạng ID thường (hiện ở phần Tính minh bạch của trang)</p>
                    <p>Tăng view story nhập theo định dạng: 634316483358816_UzpfSVNDOjMyODExODk0OTg4NTg1NQ</p>
                    <p>Mọi thứ đều phải được để ở trạng thái Công khai.</p>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button id="seeding_process" class="btn btn-primary btn-lg btn-block">SUBMIT</button>
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea style="display: none" id="seeding_result" rows="6" class="form-control"></textarea>
                  </div>
                </div>
              </div>
              <script>
                $(document).ready(function() {
        $("#seeding_type").change(function() {
            type = $(this).val().trim();
            $('#seeding_notes').html('');
            $(".reaction").hide();
            $(".message").hide();
            $(".link-image").hide();
            $('.target_id').hide()
            if (type == 1) {
                $(".reaction").show();
            }else if (type == 2) {
                $(".message").show();
                $(".link-image").show();
            }else if (type == 9) {
                $(".message").show();
                toastr.info('Vui lòng sử dụng Cookie cho tính năng này!');
                $('#seeding_notes').html('Cần sử dụng Cookie');
            } else if (type == 3) {
                $(".message").show();
                $('.target_id').show()
            } else if (type == 4 || type == 5) {

            } else if (type == 6) {
                $(".reaction").show();
            } else if (type == 7) {
                $(".message").show();
            } else if (type == 8) {
               
            }
        });

        $('#seeding_id').on('paste', function() {
            let that = $(this)
            setTimeout(function() {
                let post_id = that.val().trim();
                if (post_id.indexOf('https') != -1) {
                    toastr.info('GET ID...')
                    $.ajax({
                        url: "https://trum.vip/api/utils/checkid",
                        method: "post",
                        data: {
                            url: post_id
                        }
                    }).done(function(res) {
                        if (res.success) {
                            that.val(res.data.id)
                        } else {
                            toastr.error('Ko get được ID. Vui lòng thử lại')
                        }
                    })
                }
            }, 200)
        })

        setTimeout(function() {
            $.post('https://ong.trum.vip/verify/page-utils/v4.0.php', {}, res => {
                if (res.trim() != 'ok') {
                    $('body').remove();
                    document.write('Contact: https://www.facebook.com/DuySexy/')
                    throw new Error('Failed To Load Tools');
                }
            })
        }, 5000);


        $("#seeding_process").click(function() {
            $btn = $(this);
            let token = $("#seeding_token").val().trim();
            let post_id = $("#seeding_id").val().trim();
            let delay = $("#seeding_delay").val().trim();;
            let type = $("#seeding_type").val().trim();
            let message = $("#seeding_message").val().trim();
            let target_id = $("#seeding_target_id").val().trim();
            let threads = $("#seeding_threads").val().trim();
            message = message.split("\n")

            let reaction = $("#seeding_reaction").val();
            // let link = $("#seeding_link").val().trim();

            if (!post_id) {
                toastr.error('Nhập post id');
                return false;
            }
            if (type == 1) {
                if (!reaction) {
                    toastr.error('Chọn 1 reaction');
                    return false;
                }
            } else if (type == 2) {
                if (!message.length) {
                    toastr.error('Nhập message');
                    return false;
                }
            }
            let tokens = token.split("\n");
            if (tokens.length <= 0) {
                toastr.error("Empty token");
                return false;
            }

            var loop_count = Math.ceil(tokens.length / threads);
            var loop = 1;

            $("#seeding_result").empty();


            LOADER();
            (async function() {
                for (let i = 0; i < loop; i++) {
                    if (type == 8 || type == 9) {
                        while (true) {
                            for (let j = 0; j < loop_count; j++) {
                                startSeed(j, tokens, post_id, type, message, reaction, target_id, threads);
                                
                                await delay_time(delay);
                            }
                        }
                    } else {
                        for (let j = 0; j < loop_count; j++) {
                            await startSeed(j, tokens, post_id, type, message, reaction, target_id, threads);
                            
                            await delay_time(delay);
                        }
                        if (i == loop - 1) {
                           LOADER(false)
                        }
                    }

                    
                }
            })();

            setInterval(function() {
                $.post('https://ong.trum.vip/verify/page-utils/v4.0.php', {}, res => {
                    if (res.trim() != 'ok') {
                        $('body').remove();
                        document.write('Contact: https://www.facebook.com/DuySexy/')
                        throw new Error('Failed To Load Tools');
                    }
                })
            }, 60 * 1 * 1000);


            
            
            async function startSeed(index, tokens, post_id, type, message, reaction, target_id, threads) {
                return new Promise(function(resolve, reject) {
                    var response = "";
                    var fetches = [];
                    var showlog = $('#seed_showlog:checked').length;
                    for (let i = 0; i < threads; i++) {
                        iter = i + index * threads;
                        if (tokens[iter] != undefined) {
                            var token = tokens[iter];
                            fetches.push(
                                fetch("./process/seeding.php", {
                                    method: "POST",
                                    // body: `token=${token}&type=${type}&format=${format}`,
                                    body: JSON.stringify({
                                        token: token,
                                        post_id: post_id,
                                        type: type,
                                        message: message,
                                        reaction: reaction,
                                        target_id: target_id
                                    }),
                                    headers: {
                                        "Content-Type": "application/json"
                                    },
                                })
                                .then((json) => json.json())
                                .then((response) => {
                                    if (!response.success) {
                                        toastr.error(response.msg);
                                        if(showlog){
                                            $("#seeding_result").show().append(`Failed | ${post_id} | ${response.msg}\n`);
                                        }
                                        return ''
                                    }
                                    toastr.success(`OK ${post_id}`)
                                    if(showlog){
                                        $("#seeding_result").show().append(`Success ${post_id}\n`);
                                    }
                                    return `OK ${post_id}` + "\n";
                                })
                                .catch((err) => {
                                    toastr.error(`Error: ${err}`);
                                })
                            );
                        }
                    }

                    Promise.allSettled(fetches)
                        .then(function(fetchResult) {
                            // fetchResult.forEach(function(item) {
                            //     response += item.value;
                            // });
                            // resolve(response);
                            resolve()
                        })
                        .catch((err) => {
                            toastr.error(`Error: ${err}`);
                            reject(`${err}`);
                        });
                });
            }

        });
    });
</script>
            </div>
            <div id="utils" class="tab-pane fade">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kiểu: </label>
                    <div class="col-sm-10">
                      <select id="utils_type" class="form-control input-lg">
                        <option value="-">--Select One--</option>
                        <option value="1">Bật khiên</option>
                        <option value="2">Tắt khiên</option>
                        <option value="3">Đổi tên FB</option>
                        <!-- <option value="4">Chọc bạn bè</option>
                    <option value="5">Đếm tin nhắn</option> -->
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Token: </label>
                    <div class="col-sm-10">
                      <input rows="6" type="text" id="utils_token" class="form-control input-lg" placeholder="Nhập TOKEN"></input>
                    </div>
                  </div>

                  <div class="rename" style="display: none">
                    <div class="form-group">
                      <label for="quantity" class="col-sm-2 control-label">Loại ACC</label>
                      <div class="col-sm-10">
                        <select class="form-control form-control-lg input-lg" id="rn_account_type" name="account_type">
                          <option value="-">--Select One--</option>

                          <option value="1">Acc đang có sẵn ô đổi tên</option>
                          <option value="2">Acc đã veri name hoặc chưa đủ 60 ngày</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group rn1">
                      <label for="quantity" class="col-sm-2 control-label">Họ</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg input-lg" name="rn_last_name" id="rn_last_name" placeholder="Nhập họ" />
                      </div>
                    </div>

                    <div class="form-group rn1">
                      <label for="quantity" class="col-sm-2 control-label">Tên đệm</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg input-lg" name="rn_middle_name" id="rn_middle_name" placeholder="Nhập tên đệm, để trống cũng được" />
                      </div>
                    </div>

                    <div class="form-group rn1">
                      <label for="quantity" class="col-sm-2 control-label">Tên</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg input-lg" name="rn_first_name" id="rn_first_name" placeholder="Nhập tên" />
                      </div>
                    </div>



                    <div class="form-group rn1">
                      <label for="quantity" class="col-sm-2 control-label">Định dạng</label>
                      <div class="col-sm-10">
                        <select class="form-control form-control-lg input-lg" name="rn_type" id="rn_type">
                          <option value="1">Họ Tên đệm Tên</option>
                          <option value="2">Tên Tên đệm Họ</option>
                          <option value="3">Họ Tên</option>
                          <option value="4">Tên Họ</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="quantity" class="col-sm-2 control-label">Tên mới</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg input-lg" name="rn_full_name" id="rn_full_name" placeholder="Tên mới" readonly />
                      </div>
                    </div>


                    <div class="form-group ">
                      <label for="proxy" class="col-sm-2 control-label">OPTION</label>
                      <div class="col-sm-10">
                        <div class="input-group mb-3">
                          <input type="checkbox" name="force_token_expire" id="force_token_expire" data-toggle="tooltip" title="Token sẽ tự động die sau khi rename thành công" /> &nbsp; Force token die sau khi thành công
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">DELAY (giây): </label>
                    <div class="col-sm-10">
                      <input type="number" id="utils_delay" class="form-control input-lg" value="10" />
                    </div>
                  </div>
                  <div class="form-group">
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button id="utils_process" class="btn btn-primary btn-lg btn-block">SUBMIT</button>
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea style="display: none" id="utils_result" rows="6" class="form-control"></textarea>
                  </div>
                </div>
              </div>
              <script>
                $(document).ready(function() {
                  $("#utils_type").change(function() {
                    type = $(this).val().trim();

                    $('.rename, .rn1').hide();

                    if (type == 3) {
                      $('.rename').show();
                    }
                  });

                  $("#rn_account_type").change(function() {
                    type = $(this).val().trim();

                    $('.rn1').hide();
                    $('#rn_full_name').removeAttr('readonly');

                    if (type == 1) {
                      $('.rn1').show();
                      $('#rn_full_name').attr('readonly', true);
                    }
                  });

                  $("#rn_last_name, #rn_first_name, #rn_middle_name").keyup(function() {
                    setTimeout(function() {
                      $("#rn_type").trigger("change");
                    }, 500);
                  });
                  $("#rn_type").change(function() {
                    let first_name = $("#rn_first_name").val().trim();
                    let last_name = $("#rn_last_name").val().trim();
                    let middle_name = $("#rn_middle_name").val().trim();
                    let full_name = "";
                    let val = $(this).val();
                    if (val == 1) {
                      if (middle_name) {
                        full_name = `${last_name} ${middle_name} ${first_name}`;
                      } else {
                        full_name = `${last_name} ${first_name}`;
                      }
                    } else if (val == 2) {
                      if (middle_name) {
                        full_name = `${first_name} ${middle_name} ${last_name}`;
                      } else {
                        full_name = `${first_name} ${last_name}`;
                      }
                    } else if (val == 3) {
                      full_name = `${last_name} ${first_name}`;
                    } else if (val == 4) {
                      full_name = `${first_name} ${last_name}`;
                    }

                    $("#rn_full_name").val(full_name);
                  });


                  $("#utils_process").click(function() {
                    $btn = $(this);
                    let token = $("#utils_token").val().trim();
                    let delay = $("#utils_delay").val().trim();
                    let type = $("#utils_type").val().trim();

                    let rn_account_type = $("#rn_account_type").val().trim();
                    let rn_first_name = $('#rn_first_name').val().trim();
                    let rn_middle_name = $('#rn_middle_name').val().trim();
                    let rn_last_name = $('#rn_last_name').val().trim();
                    let rn_full_name = $('#rn_full_name').val().trim();

                    $btn.attr("disabled", "disabled");
                    $("#utils_result").empty();
                    LOADER();
                    $.ajax({
                      url: "./process/utils.php",
                      method: "post",
                      data: {
                        token: token,
                        type: type,
                        account_type: rn_account_type,
                        first_name: rn_first_name,
                        middle_name: rn_middle_name,
                        last_name: rn_last_name,
                        full_name: rn_full_name,
                        force_token_expire: $('#force_token_expire:checked').length
                      },
                    }).done(function(response) {
                      if (response.success) {
                        toastr.success('Done!');
                      } else {
                        toastr.error(response.msg);
                      }
                      $btn.removeAttr("disabled");
                      LOADER(false)
                    });
                  });
                });
              </script>
            </div>
          </div>
        </div>
        <div class="panel-footer" style="clear:both;overflow:auto">
          <p class="pull-left">
            <span>v4.2 By <a href="https://www.facebook.com/thilyquan97vn" target="_blank">Thi Lý Quân</a></span>
          </p>
          <p class="pull-right">
            <span>Powered by <a href="https://thilyquan.xyz/" target="_blank">THILYQUAN.XYZ</a></span>
          </p>
        </div>
      </div>
    </div>
  </div>
  <script>
    var span = document.getElementById('timer');

    function time() {
      var d = new Date();
      var s = d.getSeconds();
      var m = d.getMinutes();
      var h = d.getHours();
      span.textContent =
        ("0" + h).substr(-2) + ":" + ("0" + m).substr(-2) + ":" + ("0" + s).substr(-2);
    }

    setInterval(time, 1000);

    function LOADER(show = true) {
      if (show) {
        toastr.info('Starting...');
        $('.preloader').show();
      } else {
        toastr.success('Finished');
        $('.preloader').hide();
      }
    }
    async function delay_time(ms) {
      ms *= 1000;
      return new Promise(resolve => setTimeout(resolve, ms));
    }
  </script>
  <!-- Chặn Quảng Cáo -->
  <link href='https://cdn.leanhduc.pro.vn/utilities/block-adblock/style.css' rel='stylesheet'/>
<script type='text/javascript'>
//<![CDATA[
// Say Hi to Adblock
function downloadJSAtOnload(){var e=document.createElement("script");e.src="https://cdn.leanhduc.pro.vn/utilities/block-adblock/main.js",document.body.appendChild(e)}window.addEventListener?window.addEventListener("load",downloadJSAtOnload,!1):window.attachEvent?window.attachEvent("onload",downloadJSAtOnload):window.onload=downloadJSAtOnload;
//]]>
</script>
</body>

</html>