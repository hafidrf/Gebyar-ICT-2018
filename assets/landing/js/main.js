new Vue({
	el: '#app',
	data: {
		eventSelected: null,
		navbar: {
			scrolled: false,
			show: false
		},
		scrollHeight: 0
	},
	mounted: function() {
		var vm = this
		window.addEventListener('scroll', function() {
			var scroll = document.documentElement.scrollTop
			if (scroll > 200) vm.navbar.scrolled = true
			else vm.navbar.scrolled = false
		})
		this.scrollHeight =
			Number(this.$refs['link-wrapper'].scrollHeight + 10) + 'px'
		window.addEventListener('click', function(e) {
			e.stopPropagation
			vm.navbar.show = false
		})
	},
	methods: {
		selectEvent: function(ev) {
			this.eventSelected = ev
		},
		hashLink: function(params) {
			const pos = document.querySelector(params).offsetTop
			console.log(pos)
			window.scrollTo({
				behavior: 'smooth',
				top: pos
			})
		}
	},
	computed: {
		isMobile: function() {
			return window.outerWidth < 768
		},
		trigger: function() {
			return this.navbar.show ? this.scrollHeight : 0
		}
	}
})
