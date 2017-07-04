var adminModule = (function(){
	var candyArr = [];

	return {
		addToTable: function(){
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
	}

})();

adminModule.addToTable();