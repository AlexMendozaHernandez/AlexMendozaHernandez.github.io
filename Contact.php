<!DOCTYPE html>
<html>
<head>
	<title>Alex Mendoza-Hernandez</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		form {
			max-width: 600px;
			margin: auto;
		}
		input[type=text], input[type=email], textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			resize: vertical;
			margin-bottom: 16px;
			font-size: 16px;
		}
		label {
			font-size: 18px;
			font-weight: bold;
		}
		textarea {
			height: 150px;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 18px;
			margin-bottom: 16px;
			width: 100%;
		}
		input[type=submit]:hover {
			background-color: #45a049;
		}

		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
      background-color: #e3e1e1;
		}

		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}

		h1 {
			margin: 0;
		}

		nav {
			background-color: #f2f2f2;
			display: flex;
			justify-content: space-between;
			padding: 10px;
		}

		nav a {
			color: #333;
			text-decoration: none;
			padding: 10px;
			font-weight: bold;
		}

		nav a:hover {
			background-color: #333;
			color: #fff;
		}

		section {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin: 20px;
		}

		section h2 {
			margin-top: 0;
		}

		section p {
			text-align: center;
			max-width: 600px;
		}

		footer {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}

		footer p {
			margin: 0;
		}
	</style>
</head>

<body>
	<header>
		<h1>Contact Me</h1>
		<p>How can I help you?</p>
	</header>
	<nav>
		<a href="index.html">Home</a>
    <a href="Blog.html">Blog</a>
		<a href="Portfolio.html">Portfolio</a>
	</nav>
    
<section>
  <h2>Contact Me</h2>
  <form action="Submit.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit">Send</button>
  </form>
</section>

  <footer>
		<p>Copyright &copy; 2023 Alex Mendoza-Hernandez.</p>
	</footer>
</body>
</html>