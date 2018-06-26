			</main>
			<footer class="page-footer">
				<p class="Intro">Game Online Thiên Bảo MU Thiên Bảo Season 9.2 - Phát hành từ năm 2018.
					</br>Thiết kế và phát triển bởi MUTHIENBAO.NET
				</p>
			</footer>
		</div>
	</div>
	<div id="thewindowbackground"></div>
	<script src="js/vue.js"></script>
	<script src="js/jquery-3.3.1.js"></script>
	<script>
		host = "http://localhost:8080/mu_online/index.php";
		new Vue({
			el: "#mu-page",
			data: {
				action: "main",
				list: [],
				length: 0,
				char: 1,
				tab: 1
			},
			created: function () {
				this.loadNew();
			},
			methods: {
				loadUrl: function(options) {
					var that = this;
					var tail = [];
					for(const key in options) {
						if(options.hasOwnProperty(key)) {
							tail.push(key + "=" + options[key]);							
						}
					}
					var url = host + "?" + tail.join("&");						
					$.get(url, (json_string, status) => {						
						var that = this;						
						var list = JSON.parse(json_string);
						that.list = list;
						that.length = list.length;
					});
				},
				setChar1: function() {
					var that = this;
					that.char = 1;
				},
				setChar2: function() {
					var that = this;
					that.char = 2;
				},
				setChar3: function() {
					var that = this;
					that.char = 3;
				},
				gotoHome: function () {
					var that = this;
					that.action = "main";
					that.tab = 1;
					that.loadUrl({
						type: "limit",
						data: "new"
					});
				},
				loadNew: function () {
					var that = this;
					that.tab = 1;
					that.loadUrl({
						type: "limit",
						data: "new"
					});
				},
				loadEvent: function () {
					var that = this;
					that.tab = 2;
					that.loadUrl({
						type: "limit",
						data: "event"
					});
				},
				gotoNew: function () {
					var that = this;
					that.action = "new";
					that.loadUrl({
						data: "new"
					});
				},
				gotoEvent: function () {
					var that = this;
					that.action = "event";
					that.loadUrl({
						data: "event"
					});
				},
				gotoImage: function () {
					var that = this;
					that.action = "library";
					that.loadUrl({
						data: "image"
					});
				},
				gotoVideo: function () {
					var that = this;
					that.action = "library";
					that.loadUrl({
						data: "video"
					});
				},
				gotoTopic: function () {
					var that = this;
					that.action = "topic";
					that.loadUrl({
						data: "topic"
					});
				}
			}
		})
	</script>
</body>
</html>