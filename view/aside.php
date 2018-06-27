<main class='page-content'>
	<aside id="extra-content" class="extra-content">
		<div class="extra-content--envelope">
			<div class="game-info">
				<a class="game-info__download Playnow" href="taigame.html" title="Chơi Ngay">Chơi Ngay</a>
				<a id="zme-registerwg" class="game-info__register QuickRegister" href="http://id.muthienbao.net/" title="Đăng Ký Nhanh">Đăng Ký Nhanh</a>
				<a class="game-info__payment NapThe" title="Nạp thẻ" href="http://id.muthienbao.net/" target="_blank">Nạp thẻ</a>
			</div>
			<div class="" data-target="#main" id="game-servers">
				<div id="left-nav" class="game-servers--inner">
					<ul>
						<li class="">
							<a href="#main" class="aside-menu" title="Giới thiệu" v-on:click="gotoPost(1)">Giới thiệu</a>
						</li>
						<li class="has-sub">
							<a data-active-path="" class="aside-menu" target="_self" title="Nhân vật" v-on:click="charToggle">
								Nhân vật
								<span class="holder aside-list"></span>
								<span class="holder aside-list"></span>
								<span class="holder aside-list"></span>
							</a>
							<ul v-if="chartab">
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
						</li>
						<li class="">
							<a href="#main" class="aside-menu" target="_self" title="Tin Tức" v-on:click="gotoNew">Tin Tức</a>
						</li>
						<li class="">
							<a href="#main" class="aside-menu" target="_self" title="Sự Kiện" v-on:click="gotoEvent">Sự Kiện</a>
						</li>
						<li class="has-sub">
							<a data-active-path="" class="aside-menu" target="_self" title="Hướng dẫn" v-on:click="introToggle">
								Hướng dẫn
								<span class="holder aside-list"></span>
								<span class="holder aside-list"></span>
								<span class="holder aside-list"></span>
							</a>
							<ul v-if="introtab">
								<li class="">
									<a href="#main" class="" target="_self" title="Sự kiện Game" v-on:click="gotoEvent">Sự kiện Game</a>
								</li>
								<li class="">
									<a href="#main" class="" target="_self" title="Chức năng" v-on:click="gotoFunction">Chức năng</a>
								</li>
							</ul>
						</li>
						<li class="">
							<a href="#main" class="aside-menu" target="_self" title="Lệnh MU" v-on:click="gotoPost(10)">Lệnh MU</a>
						</li>
					</ul>
				</div>
			</div>
			<div data-target="#main" id="game-servers"></div>
			<a class="giftcode" title="Quà tặng" target="_blank" href="#main"></a>
			<div class="extra-content--bottom-envelope">
				<iframe src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/ngayhomquadatungmylife/&amp;width=260&amp;height=220&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true"
				scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:270px; height:220px;" allowTransparency="true"></iframe>
			</div>
			<!---------Ranking ---------------------->
			<div class="bxh_block">
				<div class="bxh_content">
					<div class="select_server">
						<select id="server" onchange="Server(this.value)">
							<option value="ThienBao" selected="selected">Thiên Bảo</option>
						</select>
					</div>
					<div class="block_table BXH" id="ThienBao">
						<iframe frameborder="0" width="220px" height="340px">
						</iframe>
					</div>
				</div>
			</div>
			<!---------Ranking ---------------------->
		</div>
	</aside>