<?php require_once("includes/header.php"); ?>

<div class="container">

	<main class="my-5">
		<section id="hero" class="py-5" style="background-color: #1a1a1f">

			<div class="container">

				<div class="d-flex flex-column flex-column-reverse flex-md-row">
					<div>
						<h1 class="fs-1 mb-3 fw-bold">EXPLORE YOUR WORLD.</h1>
						<p class="fs-5">
							Hi! I’m Deepak — adventure travel vlogger, professional vlogger, and Devops. Join me as I share useful travel tips & experiences with you from around the world!
						</p>

						<div class="m-2">
							<a class="btn btn-danger btn-lg mt-3" href="billing.php">Subscribe</a>
							<a class="btn btn-outline-danger btn-lg mt-3 mx-2" href="#">Watch Later</a>
						</div>


					</div>

					<div class="m-2">
						<div>
							<img class="img-fluid rounded mb-4 mb-md-0" src="img/profile2.jpg" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section>

	</main>



	<div class="videoSection">
		<div class="subs" style="overflow-x: auto;">




			<?php
			$subscriptions = $userLoggedInObj->getSubscriptions();

			if (User::isLoggedIn() && sizeof($subscriptions) > 0) {
				foreach ($subscriptions as $sub) {
					$subUsername = $sub->getUsername();
					$profilePic = $sub->getProfilePic();
					echo 	"<div class='listOfSubs'>
									<a href='profile?username=$subUsername'><img src='$profilePic'></a>
									<span class='caption'>$subUsername</span>
								</div>";
				}
			}
			?>

		</div>
		<?php
		$subscriptionsProvider = new SubscriptionsProvider($con, $userLoggedInObj);
		$subscriptionsVideos = $subscriptionsProvider->getVideos();

		$videoGrid = new VideoGrid($con, $userLoggedInObj->getUsername());

		if (User::isLoggedIn() && sizeof($subscriptionsVideos) > 0) {
			echo $videoGrid->create($subscriptionsVideos, "Subscriptions", false);
		}

		echo $videoGrid->create(null, "Home", false);
		?>





	</div>
</div>


<?php require_once("includes/footer.php"); ?>



<!-- 
<div class=" my-5">
	<div class="row d-flex justify-content-center">
		<div class="col-12">
			<div id="carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel" data-slide-to="0" class="active bg-secondary"></li>
					<li data-target="#carousel" data-slide-to="1" class="bg-secondary"></li>
					<li data-target="#carousel" data-slide-to="2" class="bg-secondary"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
							<div class="col-12 col-md-6 col-xl-4 mb-4">
								<div class="card mr-3">
									<img src="https://themesberg.s3.us-east-2.amazonaws.com/public/posts/bootstrap-themes-summer-sale.jpg" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">35% discount for premium Bootstrap Themes, Templates, UI Kits</h5>
										<p class="card-text">We’re getting nearer to the end of summer and because we know that this period can make a serious dent in your pocket..</p>
										<a href="#" class="btn btn-primary">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-xl-4 mb-4">
								<div class="card mr-3">
									<img src="https://themesberg.s3.us-east-2.amazonaws.com/public/posts/gpt-3-tailwind-css-code-generator.jpg" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">We built an OpenAI powered Tailwind CSS code generator using GPT-3</h5>
										<p class="card-text">A couple of days ago we got access to the OpenAI’s Beta API platform and I had the occasion to play around with it...</p>
										<a href="#" class="btn btn-primary">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-xl-4 mb-4">
								<div class="card mr-3">
									<img src="https://themesberg.s3.us-east-2.amazonaws.com/public/posts/bootstrap-5-tutorial/bootstrap-5-tutorial.jpg" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">Bootstrap 5 tutorial: learn how to get started without jQuery</h5>
										<p class="card-text">We’re getting nearer to the end of summer and because we know that this period can make a serious dent in your pocket..</p>
										<a href="#" class="btn btn-primary">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-xl-4 mb-4">
								<div class="card mr-3">
									<img src="https://themesberg.s3.us-east-2.amazonaws.com/public/posts/angular-10/angular-10-officially-released-dropping-ie-9-10.jpg" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">Angular 10 officially released deprecating support for IE 9 and 10</h5>
										<p class="card-text">If you’ve been using Angular for your web projects I’m glad to let you know that following this major update to version...</p>
										<a href="#" class="btn btn-primary">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-12 col-md-6 col-xl-4 mb-4">
								<div class="card mr-3">
									<img src="https://themesberg.s3.us-east-2.amazonaws.com/public/posts/bootstrap-themes-summer-sale.jpg" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">35% discount for premium Bootstrap Themes, Templates, UI Kits</h5>
										<p class="card-text">We’re getting nearer to the end of summer and because we know that this period can make a serious dent in your pocket..</p>
										<a href="#" class="btn btn-primary">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-xl-4 mb-4">
								<div class="card mr-3">
									<img src="https://themesberg.s3.us-east-2.amazonaws.com/public/posts/gpt-3-tailwind-css-code-generator.jpg" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">We built an OpenAI powered Tailwind CSS code generator using GPT-3</h5>
										<p class="card-text">A couple of days ago we got access to the OpenAI’s Beta API platform and I had the occasion to play around with it...</p>
										<a href="#" class="btn btn-primary">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-xl-4 mb-4">
								<div class="card mr-3">
									<img src="https://themesberg.s3.us-east-2.amazonaws.com/public/posts/bootstrap-5-tutorial/bootstrap-5-tutorial.jpg" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">Bootstrap 5 tutorial: learn how to get started without jQuery</h5>
										<p class="card-text">We’re getting nearer to the end of summer and because we know that this period can make a serious dent in your pocket..</p>
										<a href="#" class="btn btn-primary">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-xl-4 mb-4">
								<div class="card mr-3">
									<img src="https://themesberg.s3.us-east-2.amazonaws.com/public/posts/angular-10/angular-10-officially-released-dropping-ie-9-10.jpg" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">Angular 10 officially released deprecating support for IE 9 and 10</h5>
										<p class="card-text">If you’ve been using Angular for your web projects I’m glad to let you know that following this major update to version...</p>
										<a href="#" class="btn btn-primary">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-12 col-md-6 col-xl-4 mb-4">
								<div class="card mr-3">
									<img src="https://themesberg.s3.us-east-2.amazonaws.com/public/posts/bootstrap-themes-summer-sale.jpg" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">35% discount for premium Bootstrap Themes, Templates, UI Kits</h5>
										<p class="card-text">We’re getting nearer to the end of summer and because we know that this period can make a serious dent in your pocket..</p>
										<a href="#" class="btn btn-primary">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-xl-4 mb-4">
								<div class="card mr-3">
									<img src="https://themesberg.s3.us-east-2.amazonaws.com/public/posts/gpt-3-tailwind-css-code-generator.jpg" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">We built an OpenAI powered Tailwind CSS code generator using GPT-3</h5>
										<p class="card-text">A couple of days ago we got access to the OpenAI’s Beta API platform and I had the occasion to play around with it...</p>
										<a href="#" class="btn btn-primary">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-xl-4 mb-4">
								<div class="card mr-3">
									<img src="https://themesberg.s3.us-east-2.amazonaws.com/public/posts/bootstrap-5-tutorial/bootstrap-5-tutorial.jpg" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">Bootstrap 5 tutorial: learn how to get started without jQuery</h5>
										<p class="card-text">We’re getting nearer to the end of summer and because we know that this period can make a serious dent in your pocket..</p>
										<a href="#" class="btn btn-primary">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-xl-4 mb-4">
								<div class="card mr-3">
									<img src="https://themesberg.s3.us-east-2.amazonaws.com/public/posts/angular-10/angular-10-officially-released-dropping-ie-9-10.jpg" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">Angular 10 officially released deprecating support for IE 9 and 10</h5>
										<p class="card-text">If you’ve been using Angular for your web projects I’m glad to let you know that following this major update to version...</p>
										<a href="#" class="btn btn-primary">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->