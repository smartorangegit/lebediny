// Andrey 2018/08/16
(function() {

	var filter = {
		squareRange: {
			min: '',
			max: ''
		},
		floorRange: {
			min: '',
			max: ''
		},
		kimnatRange: {
			min: '',
			max: ''
		},
		priceRange: {
			min: '',
			max: ''
		}
	};

	function setFilter(ionRange, range) {
		filter[range.id].min = ionRange.from;
		filter[range.id].max = ionRange.to;
	};

	var ranges = document.querySelectorAll('.range-init');

	var sliders = [];

	ranges.forEach(function(range) {
		$(range).ionRangeSlider({
			type: "double",
			grid: true,
			min: range.value.split('/')[0],
			max: range.value.split('/')[1],
			from: range.value.split('/')[0],
			to: range.value.split('/')[1],
			hide_min_max: true,
			grid: false,
			onStart: function(ionRange) {
				setFilter(ionRange, range);
			},
			onChange: function(ionRange) {
				setFilter(ionRange, range);
			}
		})
		sliders.push($(range).data("ionRangeSlider"));
	});

	var rows = document.querySelectorAll('.rows_c');

	function Appartment(app) {
		this.selector = app;
		this.squareRange = parseInt(app.dataset.square);
		this.floorRange = parseInt(app.dataset.floor);
		this.kimnatRange = parseInt(app.dataset.rooms);
		this.priceRange = parseInt(app.dataset.price);
	}

	var appartments = [];
	rows.forEach(function(row){
		appartments.push(new Appartment(row))
	});

	var searchBtn = document.querySelector('.button_search_js');
	var resetBtn = document.querySelector('#reset_button');

	document.getElementById("count_flats").innerHTML = appartments.length;

	searchBtn.addEventListener('click', function() {
		var totalAppartments = appartments.length;
		var i = 0;
		appartments.forEach(function(appartment){
			$('body').addClass("onRanger");
			appartment.selector.classList.add('filtered');
			for(var key in filter) {
				if(filter[key].min > appartment[key] || filter[key].max < appartment[key]) {
					appartment.selector.classList.remove('filtered');
					i++;
					break;
				}
			}
		});
		document.getElementById("count_flats").innerHTML = totalAppartments - i <= 0 ? 0 : totalAppartments - i;
	});

	resetBtn.addEventListener('click', function(e) {
		e.preventDefault();
		sliders.forEach(function(slider) {
			slider.reset();
			slider.update({
				from: slider.old_from,
				to: slider.old_to
			});
			setFilter({from: slider.old_from, to: slider.old_to},slider.input)
		});
	});

})();
