<div class="main-content" id="main">
	<div class="search">
		<form method="get" action="https://www.google.com.vn" class="search__form" id="search__form">
			<input type="text" name="q" placeholder="Nhập từ khóa cần tìm" class="search__field">
			<input type="submit" value="Tìm Kiếm" class="search__button">
		</form>
	</div>
	<!-- begin block banner-event-->
	<!-- homepage -->
	<div class="pre-load"></div>
	<div class="main-banner" v-if="action === 'main'">
		<img class="previous-arrow arrow" src="imgs/back-arrow.png"/>
		<img v-bind:src="images[currentNumber % images.length]" width="670" height="200"
			 v-on:mouseover="stopRotation"
			 v-on:mouseout="startRotation" />
	 <img class="next-arrow arrow" src="imgs/arrow.png"/>
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
						<a href="#main" class="posts__post-title" v-on:click="gotoPost(data.id)">
							<span>{{data.title}}</span>
						</a>
						<a href="#main" class="posts__post-image" v-on:click="gotoPost(data.id)">
							<img v-bind:src="data.image" width="138" height="86">
						</a>
						<a href="#main" style="white-space: nowrap; overflow: hidden; -text-overflow: ellipsis; text-overflow: ellipsis;" class="posts__post-intro" target="_blank" v-html="data.content"></a>
					</div>
					<!--other feed-->
					<div v-if="index > 0">
						<a href="#main" class="posts__post-title" v-on:click="gotoPost(data.id)">
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
			<li class="char-2	ActiveBanner char" id="char-2-info" v-if="char === 2">
				<a href="https://www.youtube.com/watch?v=bNpZa6kTUVw" class="video">
					<span class="icon">&nbsp;</span> Nhất tiễn đoạt mệnh, tốc độ và sự dẻo dai trong
					<br /> những chiêu thức tầm xa khiến nhiều người khiếp sợ
				</a>
				<a class="button" href="#" title="Fairy Elf"></a>
			</li>
			<li class="char-3	ActiveBanner char" id="char-3-info" v-if="char === 3">
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
	<a href="#" title="Trang Chủ" v-on:click="gotoHome">Trang chủ</a>
	> Tin tức
	<br>
	<br>
	<ul v-if="length">
		<li v-for="event in list">
			<a href="#main" class="posts__post-intro" v-on:click="gotoPost(event.id)">
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
	<a href="#" title="Trang Chủ" v-on:click="gotoHome">Trang chủ</a>
	> Sự kiện
	<br>
	<br>
	<ul v-if="length">
		<li v-for="event in list">
			<a href="#main" class="posts__post-intro" v-on:click="gotoPost(event.id)">
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
<!--thu vien-->
<div class="main-content load-content" v-if="action === 'library'">
	<a href="#" title="Trang Chủ" v-on:click="gotoHome">Trang chủ</a>
	> Thư viện
	<br>
	<br>
	<ul class="tabs load-tab">
		<li rel="lib_image" class="active" v-on:click="gotoImage" v-if="tab === 1">Hình ảnh</li>
		<li rel="lib_image" v-on:click="gotoImage" v-if="tab !== 1">Hình ảnh</li>
		<li rel="lib_video" class="active" v-on:click="gotoVideo" v-if="tab === 2">Video</li>
		<li rel="lib_video" v-on:click="gotoVideo" v-if="tab !== 2">Video</li>
	</ul>
	<div class="clear-float" style="clear: both;"></div>
	<div class="tab_content" v-if="tab === 1">
		<ul id="lib_image" v-if="length">
			<li v-for="image in list">
				<img class="image" v-bind:src="image.url"/>
			</li>
		</ul>
		<p v-if="!length">
			Chưa có ảnh nào
		</p>
	</div>
	<div class="tab_content" v-if="tab === 2">
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
<!--dien dan-->
<div class="main-content load-content" v-if="action === 'topic'">
	<div v-if="list">
		<div>
			<a href="#" title="Trang Chủ" v-on:click="gotoHome">Trang chủ</a>
			<div class="inline" v-if="list.type == 0">
				> {{list.title}}
				<br>
				{{list.time}}
				<br>
			</div>
			<div class="inline" v-if="list.type == 1">
				 > <a href="#main" title="Nhân Vật" v-on:click="gotoCharacter">Nhân Vật</a>
				> {{list.title}}
				<br>
				{{list.time}}
				<br>
			</div>
			<div class="inline" v-if="list.type == 2">
				 > <a href="#main" title="Tính Năng Cơ Bản" v-on:click="gotoFunction">Tính Năng Cơ Bản</a>
				> {{list.title}}
				<br>
				{{list.time}}
				<br>
			</div>
			<div class="inline" v-if="list.type == 3">
				 > <a href="#main" title="Tin tức" v-on:click="gotoNew">Tin tức</a>
				> {{list.title}}
				<br>
				{{list.time}}
			</div>
			<div class="inline" v-if="list.type == 4">
				 > <a href="#main" title="Sự kiện" v-on:click="gotoEvent">Sự kiện</a>
				> {{list.title}}
				<br>
				{{list.time}}
				<br>
			</div>
		</div>
		<br>
		<br>
		<div v-html="list.content"></div>
	</div>
	<div v-if="!list">
		Bài viết không tồn tại
		<a href="#main" v-on:click="gotoHome">
			Trang chủ
		</a>
	</div>
</div>
<!--dien dan-->
<div class="main-content load-content" v-if="action === 'character'">
	<a href="#" title="Trang Chủ" v-on:click="gotoHome">Trang chủ</a>
	> Nhân vật
	<br>
	<br>
	<ul>
		<li class="">
			<a href="#main" class="" target="_self" title="Chiến Binh | Dark Knight" v-on:click="gotoPost(3)">Chiến Binh | Dark Knight</a>
		</li>
		<li class="">
			<a href="#main" class="" target="_self" title="Phù Thủy | Dark Wizard" v-on:click="gotoPost(4)">Phù Thủy | Dark Wizard</a>
		</li>
		<li class="">
			<a href="#main" class="" target="_self" title="Tiên Nữ | Elf" v-on:click="gotoPost(5)">Tiên Nữ | Elf</a>
		</li>
		<li class="">
			<a href="#main" class="" target="_self" title="Đấu Sĩ | Magic Gladiator" v-on:click="gotoPost(6)">Đấu Sĩ | Magic Gladiator</a>
		</li>
		<li class="">
			<a href="#main" class="" target="_self" title="Chúa Tể | Dark Lord" v-on:click="gotoPost(7)">Chúa Tể | Dark Lord</a>
		</li>
		<li class="">
			<a href="#main" class="" target="_self" title="Thuật Sĩ | Summoner" v-on:click="gotoPost(8)">Thuật Sĩ | Summoner</a>
		</li>
		<li class="">
			<a href="#main" class="" target="_self" title="Thiết Binh | Rage Fighter" v-on:click="gotoPost(9)">Thiết Binh | Rage Fighter</a>
		</li>
	</ul>
</div>
<!--huong dan-->
<div class="main-content load-content" v-if="action === 'instruction'">
	<a href="#" title="Trang Chủ" v-on:click="gotoHome">Trang chủ</a>
	> Hướng dẫn
	<br>
	<br>
	<ul>
		<li class="">
			<a href="#main" class="" target="_self" title="Sự kiện Game" v-on:click="gotoEvent">Sự kiện Game</a>
		</li>
		<li class="">
			<a href="#main" class="" target="_self" title="Chức năng" v-on:click="gotoFunction">Chức năng</a>
		</li>
	</ul>
</div>
<!--huong dan-->
<div class="main-content load-content" v-if="action === 'function'">
	<a href="#" title="Trang Chủ" v-on:click="gotoHome">Trang chủ</a>
	> Chức năng
	<br>
	<br>
	<ul>
		<li class="" v-for="item in list">
			<a href="#main" class="posts__post-intro" v-on:click="gotoPost(item.id)">
				<p class="load-title">
					{{item.title}}
				</p>
			</a>
			<p class="load-time">
				{{item.time}}
			</p>
		</li>
	</ul>
</div>
