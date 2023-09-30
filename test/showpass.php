<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		.pass {
			position: relative;
		}
		.icon-pass {
			position: absolute;
			right: 10px;
			top: 50%;
			transform: translateY(-50%);
			cursor: pointer;
		}
	</style>
</head>
<body>

<div class="container my-5">

	<form action="">

		<div class="row">

			<div class="col-md-6 offset-md-3">
				<div class="form-floating pass">
					<input type="checkbox" class="icon-pass" id="icon-pass">
					<input type="password" class="form-control" id="pass" placeholder="Password">
					<label for="pass">Password</label>
				</div>
			</div>

		</div>

	</form>

</div>


<script>

	const inputPass = document.getElementById('pass');
	const iconPass = document.getElementById('icon-pass');

	iconPass.addEventListener('click', () => {
		if (inputPass.getAttribute('type') === 'password') {
			inputPass.setAttribute('type', 'text');
		} else {
			inputPass.setAttribute('type', 'password');
		}
	});

</script>

</body>
</html>