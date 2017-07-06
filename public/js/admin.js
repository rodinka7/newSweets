var adminModule = (function(){
	var candyArr = [];

	return {
		addToTable: function(){
			if (document.querySelector('.js-addToTable')) {
				var btn = document.querySelector('.js-addToTable'),
					producer = document.querySelector('.js-producer'),
					candy = document.querySelector('.js-candy'),
					number = document.querySelector('.js-number'),
					table = document.querySelector('.js-table'),
					row = document.querySelector('.js-row'),
					jsArr = document.querySelector('.js-arr');

				btn.addEventListener('click', function(e){
					e.preventDefault();

					if (producer.value && candy.value && number.value) {
						var producerVal = producer.value,
							candyVal = candy.value,
							numberVal = number.value;

						var tr = document.createElement('tr');

						tr.innerHTML = `<td>${producerVal}</td><td>${candyVal}</td><td>${numberVal}</td>`;
						table.insertBefore(tr, row);

						obj = {
							producer: producerVal,
							candy: candyVal,
							number: numberVal
						}

						candyArr.push(obj);
						jsArr.value = JSON.stringify(candyArr);

						producer.value = '';
						candy.value = '';
						number.value = '';
					} else {
						var purchase = document.querySelector('.section-right'),
							error = document.createElement('div');

						error.innerHTML = `Все поля должны быть заполнены!`;
						error.className = 'table-error';

						purchase.appendChild(error);

						setInterval(function(){
							purchase.removeChild(error);
						}, 3000);
					}
				})
			}
		},

		updateCandies: function(){
			if (document.querySelector('.js-edit')){
				var btnSave = document.querySelector('.js-edit'),
					btnAdd = document.querySelector('.js-add'),
					input = document.querySelector('.js-arrEdit'),
					table = document.querySelector('.js-table'),
					rows = document.querySelectorAll('.js-row'),
					arr = [];

				rows.forEach(function(item){
					var producer = item.firstElementChild.firstElementChild.value,
						name = item.children[1].firstElementChild.value,
						number = item.lastElementChild.firstElementChild.value,
						obj = {};

					if (producer && name && number) {
						obj = {
							'producer': producer,	
							'name': name,
							'number': number
						}
						arr.push(obj);
					}
				});

				input.value = JSON.stringify(arr);

				btnAdd.addEventListener('click', function(e){
					e.preventDefault();

					var row = document.createElement('tr');

					row.innerHTML = `<td><input type="text" class="js-producer"></td><td><input type="text" class="js-candy"></td><td><input type="text" class="js-number"></td>`;
					row.className = 'js-row';

					table.appendChild(row);
				});

				btnSave.addEventListener('click', function(e){
					e.preventDefault();
					
					var rows = document.querySelectorAll('.js-row'),
						arr = [];

					rows.forEach(function(item){
						var producer = item.firstElementChild.firstElementChild.value,
							name = item.children[1].firstElementChild.value,
							number = item.lastElementChild.firstElementChild.value,
							obj = {};

						if (producer && name && number) {
							obj = {
								'producer': producer,	
								'name': name,
								'number': number
							}
							arr.push(obj);
						}
					});

					input.value = JSON.stringify(arr);
				});
			}
		}
	}

})();

adminModule.addToTable();
adminModule.updateCandies();