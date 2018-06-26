<div class="main-content" id="main">
    <div class="search">
        <form method="get" action="https://www.google.com.vn" class="search__form" id="search__form">
            <input type="text" name="q" placeholder="Nhập từ khóa cần tìm" class="search__field">
            <input type="submit" value="Tìm Kiếm" class="search__button">
        </form>
    </div>
    <!-- begin block banner-event-->
    <!-- homepage -->
    <div v-if="action === 'main'">
        <div id="banner-event">
            <ul class="banner-event__list">
                <li>
                    <a href="#" target="_blank" onclick="ga('send', 'event', 'Event Header', 'position 0',  1);">
                        <img src="imgs/danhhieu.jpg" alt="Danh Hiệu" width="670" height="200" />
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank" onclick="ga('send', 'event', 'Event Header', 'position 1',  1);">
                        <img src="imgs/postitem.jpg" alt="Post Item" width="670" height="200" />
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank" onclick="ga('send', 'event', 'Event Header', 'position 2',  1);">
                        <img src="imgs/offtrade.jpg" alt="off trade" width="670" height="200" />
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank" onclick="ga('send', 'event', 'Event Header', 'position 3',  1);">
                        <img src="imgs/setsocket.jpg" alt="Setsoket" width="670" height="200" />
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank" onclick="ga('send', 'event', 'Event Header', 'position 4',  1);">
                        <img src="imgs/chisothuc.jpg" alt="Chỉ Số Thực" width="670" height="200" />
                    </a>
                </li>
            </ul>
            <div class="jcarousel-pagination banner-event__control"></div>
        </div>
        <!-- end block banner-event-->
        <!-- block post hompage-->
        <div class="posts">
            <ul class="tabs">
                <li class="active" rel="tab1" v-on:click="loadNew" v-if="tab === 1">Tin tức</li>
                <li rel="tab1" v-on:click="loadNew" v-if="tab !== 1">Tin tức</li>
                <li class="active" rel="tab2" v-on:click="loadEvent" v-if="tab === 2">Sự kiện</li>
                <li rel="tab2" v-on:click="loadEvent" v-if="tab !== 2">Sự kiện</li>
            </ul>
            <div class="tab_content tab-animation">
                <ul v-if="length">
                    <li style="max-height: 160px;" v-for="(data, index) in list">
                        <!--first feed-->
                        <div v-if="index === 0">
                            <a href="#" class="posts__post-title" target="_blank">
                                <span>{{data.title}}</span>
                            </a>
                            <a href="#" class="posts__post-image" target="_blank">
                                <img v-bind:src="data.image" width="138" height="86">
                            </a>
                            <a href="#" style="white-space: nowrap; overflow: hidden; -text-overflow: ellipsis; text-overflow: ellipsis;" class="posts__post-intro" target="_blank" v-html="data.content"></a>
                        </div>
                        <!--other feed-->
                        <div v-if="index > 0">
                            <a href="#" class="posts__post-title" target="_blank">
                                <span>{{data.title}}</span>
                            </a>
                        </div>
                    </li>
                </ul>
                <p v-if="!length">
                    Không có bài viết nào
                </p>
            </div>
            <a class="posts__view-all" id="posts__view-all" title="Xem thêm" href="#">Xem thêm</a>
        </div>
        <!-- end post hompage-->
        <ul class="feature-social">
            <li>
                <a title="VIP" class="feature-vip" href="#">VIP</a>
            </li>
            <li>
                <a title="Sự kiện mới" class="feature-tips" href="#" target="_blank">Sự kiện mới</a>
            </li>
            <li>
                <a title="Hướng dẫn" class="feature-features" href="#" target="_blank">Hướng dẫn</a>
            </li>
            <li>
                <a title="Fanpage" class="feature-fanpage" href="https://www.facebook.com/THU%C3%9D-TI%C3%8AN-STORE-103120943543957/" target="_blank">Fanpage</a>
            </li>
        </ul>
        <div id="block-char">
            <ul class="char">
                <li class="char-1 ActiveBanner char" id="char-1-info" v-if="char === 1">
                    <a class="video" href="https://www.youtube.com/watch?v=lAxV1dTOXAs">
                        <span class="icon">&nbsp;</span> Đã là một chiến binh, mở đầu mọi cuộc chiến
                        <br> chẳng có gì là khó? Không tin ư? Vào đây ta tiếp!
                    </a>
                    <a class="button" href="#" title="Dark Knight"></a>
                </li>
                <li class="char-2  ActiveBanner char" id="char-2-info" v-if="char === 2">
                    <a href="https://www.youtube.com/watch?v=bNpZa6kTUVw" class="video">
                        <span class="icon">&nbsp;</span> Nhất tiễn đoạt mệnh, tốc độ và sự dẻo dai trong
                        <br /> những chiêu thức tầm xa khiến nhiều người khiếp sợ
                    </a>
                    <a class="button" href="#" title="Fairy Elf"></a>
                </li>
                <li class="char-3  ActiveBanner char" id="char-3-info" v-if="char === 3">
                    <a href="https://www.youtube.com/watch?v=-eIcrmoAK5c" class="video">
                        <span class="icon">&nbsp;</span> Ngươi có tin vào tâm linh? Bùa phép? Hãy thể hiện
                        <br> sự kính sợ, nếu không sẽ hối hận không kịp!
                    </a>
                    <a class="button" href="#" title="Dark Wizard"></a>
                </li>
            </ul>
            <ul class="char-control">
                <li class="active-banner" id="char-1" v-on:mouseover="setChar1">
                    <a class="char-control-1" href="#" title="Dark Knight">char-1</a>
                </li>
                <li id="char-2" v-on:mouseover="setChar2">
                    <a class="char-control-2" href="#" title="Fairy Elf">char-2</a>
                </li>
                <li id="char-3" v-on:mouseover="setChar3">
                    <a class="char-control-3" href="#" title="Dark Wizard">char-3</a>
                </li>
            </ul>
        </div>
        <div class="block-lib">
            <a class="block-lib__background" href="#" title="Hình nền">Hình nền</a>
            <a class="block-lib__screenshot" href="#" title="Hình trong game">Hình trong game</a>
            <a class="block-lib__video" href="#" title="Phim ảnh">Phim ảnh</a>
        </div>
    </div>
    <!--Tin tuc-->
    <div class="main-content load-content" v-if="action === 'new'">
        <ul v-if="length">
            <li v-for="event in list">
                <a href="#"href="#" class="posts__post-intro">
					<p class="load-title">
                        {{event.title}}
                    </p>
				</a>
                <p class="load-time">
                    {{event.time}}
                </p>
            </li>
        </ul>
        <p v-if="!length">
            Không có bài viết nào
        </p>
    </div>
    <!--Su kien-->
    <div class="main-content load-content" v-if="action === 'event'">
        <ul v-if="length">
            <li v-for="event in list">
                <a href="#"href="#" class="posts__post-intro">
					<p class="load-title">
                        {{event.title}}
                    </p>
				</a>
                <p class="load-time">
                    {{event.time}}
                </p>
            </li>
        </ul>
        <p v-if="!length">
            Không có bài viết nào
        </p>
    </div>
    <div class="main-content" v-if="action === 'library'">
        <ul class="tabs">
            <li rel="lib_image" class="active" v-on:click="gotoImage">Hình ảnh</li>
            <li rel="lib_video" v-on:click="gotoVideo">Video</li>
        </ul>
        <div class="tab_content">
            <ul id="lib_image" v-if="length">
                <li v-for="image in list">
                    <img class="image" v-bind:src="image.url"/>
                </li>
            </ul>
            <p v-if="!length">
                Chưa có ảnh nào
            </p>
        </div>
        <div class="tab_content">
            <ul id="lib_video" v-if="length">
                <video class="video" controls>
                    <source v-bind:src="image.url" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </ul>
            <p v-if="!length">
                Chưa có video nào
            </p>
        </div>
    </div>
    <div class="main-content" v-if="action === 'topic'">
            <div>
                <p>
                    <?php
                        echo $result["title"]
                    ?>
                </p>
                <p>
                    <?php
                        echo $result["time"]
                    ?>
                </p>
            </div>
            <div>
                <p>
                    <?php
                        echo $result["content"];
                    ?>
                </p>
            </div>						
        </div>
</div>
<div class="mini-intro"></div>