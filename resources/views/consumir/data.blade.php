<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Posts</title>
</head>
<body>
	<span></span>

	<script>
		(function () {
			'use strict';
			if ( localStorage.getItem('token') ) {
				fetch('http://localhost:8000/api/permissions', {
					method: 'GET',
					headers: { 'Authorization': 'Bearer ' + localStorage.getItem('token') }
				})
				.then(response => {
					return response.json()
				})
				.then(data => {
                    console.log(data)
					// let li = '';
					// data.forEach( (post, index) => {
					// 	li += '<li>' + post + '</li>';
					// })
					document.querySelector('span').innerHTML = data;
				})
			}
		})();
	</script>
</body>
</html>