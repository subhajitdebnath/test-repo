<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="test.php" method="post" onSubmit="return validateForm();">
		Name: <input type="text" name="name" id="name"><br><br>
		Email: <input type="email" name="email" id="email"><br><br>
		Age: <input type="number" name="age" id="age"><br><br>
		Skills: 
		C <input type="checkbox" name="sk[]" class="input-skill" value="C">
		C++ <input type="checkbox" name="sk[]" class="input-skill" value="C++">
		Java <input type="checkbox" name="sk[]" class="input-skill" value="Java"><br><br>
		<input type="submit" value="Register">
	</form>

	<script>
		function validateForm() {

			// validating name
			var name = document.getElementById('name').value;
			console.log(name);
			if (!name) {
				alert('Name is required');
				return false;
			}

			// validating email
			var email = document.getElementById('email').value;
			console.log(email);
			if (!email) {
				alert('Email is required');
				return false;
			}

			// validating age
			var age = document.getElementById('age').value;
			console.log(age);

			if (age < 18) {
				alert('Age must be minimum 18');
				return false;
			}

			// validating skills
			var skills = document.getElementsByClassName('input-skill');
			// console.log(skills);

			skillCount = 0;
			for (var i = 0; i < skills.length; i++) {
				console.log(skills[i].value, skills[i].checked);

				if (skills[i].checked) {
					skillCount++;
				}
			}

			if (skillCount === 0) {
				alert('At lease 1 skill is required');
				return false;
			}




			// return false;
		}
	</script>
</body>
</html>