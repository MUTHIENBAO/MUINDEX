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
		host = "http://localhost:8080/MUINDEX/index.php";
		new Vue({
			el: "#mu-page",
			data: {
				action: "main",
				list: [],
				length: 0,
				char: 1,
				tab: 1,
				chartab: false,
				introtab: false,
				images: ['imgs/danhhieu.jpg', 'imgs/postitem.jpg', 'imgs/offtrade.jpg', 'imgs/setsocket.jpg', 'imgs/chisothuc.jpg'],
				currentNumber: 0,
				timer: null
			},
			created: function () {
				this.loadNew();
			},
			mounted: function () {
				this.startRotation();
			},
			methods: {
				startRotation: function() {
					this.timer = setInterval(this.next, 1000);
				},
				stopRotation: function() {
					clearTimeout(this.timer);
					this.timer = null;
				},
				next: function() {
					this.currentNumber += 1
				},
				prev: function() {
					this.currentNumber -= 1
				},
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
						console.log(url);
											
						var list = JSON.parse(json_string);
						console.log(list);
						
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
				charToggle: function() {
					var that = this;
					that.chartab = !that.chartab;
				},
				introToggle: function() {
					var that = this;
					that.introtab = !that.introtab;
				},
				setChar3: function() {
					var that = this;
					that.char = 3;
				},
				gotoHome: function () {
					var that = this;
					that.action = "main";
					that.loadNew();
				},
				loadNew: function () {
					var that = this;
					that.tab = 1;
					that.loadUrl({
						limit: true,
						type: "3",
						data: "topic"
					});
					
				},
				loadEvent: function () {
					var that = this;
					that.tab = 2;
					that.loadUrl({
						limit: true,
						type: "4",
						data: "topic"
					});
				},
				gotoNew: function () {
					var that = this;
					that.action = "new";
					that.loadUrl({
						type: "3",
						data: "topic"
					});
				},
				gotoEvent: function () {
					var that = this;
					that.action = "event";
					that.loadUrl({
						type: "4",
						data: "topic"
					});
				},
				gotoCharacter: function () {
					var that = this;
					that.action = "character";
				},
				gotoInstruction: function () {
					var that = this;
					that.action = "instruction";
				},
				gotoFunction: function () {
					var that = this;
					that.action = "function";
					that.loadUrl({
						type: 2,
						data: "topic"
					});
				},
				gotoPost: function (id) {
					var that = this;
					that.action = "topic";
					that.loadUrl({
						id: id,
						data: "topic"
					});
				},
				gotoImage: function () {
					var that = this;
					that.action = "library";
					that.tab = 1;
					that.loadUrl({
						data: "image"
					});
				},
				gotoVideo: function () {
					var that = this;
					that.action = "library";
					that.tab = 2;
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