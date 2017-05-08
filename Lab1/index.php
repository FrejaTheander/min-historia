<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Laboration 1</title>
		<link rel="stylesheet" href="assets/css/main.css">
		<script src="assets/js/main.js"></script>
	</head>

	<body>
		<div id="container">

			<div id="header">

				<h1>Post Your Quote</h1>
				<p>
					And it shall be judged!
				</p>

			</div> <!-- Header -->

			<div id="content">

				<!-- <img src="assets/img/ladyJustice.jpg" alt="A statue of Lady Justice" ID="ladyJustice"> -->

				<div id="commentForm">
					<form method="POST" action="process-data.php">
						<!-- Kommentarsfält-->
						<div id="quoteField">
							<label for="quoteBox" id="quoteLabel">Quote</label>
							<textarea placeholder="Write your quote..." id="quoteBox"></textarea>
						</div>
						<!-- Namnfält -->
						<div class="nameAndEmail">
							<label for="nameBox">Name</label>
							<input type="text" placeholder="Name.." id="nameBox">
						</div>
						<!-- e-postadressfält-->
						<div id="nameAndEmail">
							<label for="e-mailBox">E-mail</label>
							<input type="text" placeholder="E-mail.." id="emailBox">
						</div>
						<!-- Postbutton -->
						<input type="submit" value="Post">
					</form>
				</div> <!-- Comment Form -->


				<p>
					<em>“The moral is the chosen, not the forced; the understood, not the obeyed. The moral is the rational, and reason accepts no commandments.”</em> -J.Galt
				</p>

			</div> <!-- Content -->

			<div id="footer">
				<p id="copyright">
					Martin Stenberg &copy; <?php echo date('Y');?>
				</p>
			</div> <!-- footer -->

		</div><!-- Container -->
	</body>

</html>
