<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<html>
<head>
	<title>Discover</title>
</head>
<body class="super-container">
	<div class = "container">
		<div class = "navbar">

			<div class = "search"> 
				<div class = "search__1">
					<span class="search_icon"></span>
					<input type="search" id = "search__box" placeholder="Search movies">
				</div>

			</div>

			<h1 class = "navbar__title">Main</h1>

			<ul class = "main">

				<li class = "navbar__text main-play l-navbar__item"><a class="main__link" href = "#">Playing</a></li>
				<li class = "navbar__text main-discover l-navbar__item"><a class="main__link" href = "#">Discover</a></li>
				<li class = "navbar__text main-activity l-navbar__item"><a class="main__link" href = "#">Activity</a></li>
				<li class = "navbar__text main-topChart l-navbar__item"><a class="main__link" href = "#">Top Charts</a></li>
				<li class = "navbar__text main-newRelease l-navbar__item"><a class="main__link" href = "#">New Releases</a></li>

			</ul>

			<h1 class = "navbar__title">Your Movie Circles</h1>

			<ul class = "circles">
				<li class = "navbar__text circles__must l-navbar__item"><a class="main__link" href = "#">This I Must See</a></li>
				<li class = "navbar__text circles__best l-navbar__item"><a class="main__link" href = "#">The Best</a></li>
			</ul>


			<h1 class = "navbar__title">Collections</h1>

			<ul class = "collections">
				
				<li class = "navbar__text collections__one l-navbar__item"><a class="main__link" href = "#">Me and Bob</a></li>
				<li class = "navbar__text collections__two l-navbar__item"><a class="main__link" href = "#">Travel Movies</a></li>
			</ul>

		</div>

		<div class = "middle-content">

		<!-- Header   -->
			<div class="header">
				<h1>Discover</h1>
				
				<ul class= "l-header sortLinks">
					<li class=" sortLinks__release">Release Date</li>
					<li class=" sortLinks__divider"> | </li>
					<li class=" sortLinks_popularity">Popularity</li>
				</ul>

				<div class="l-header">
					<img class = "header__refresh" src="refresh.png">
					<img class = "header__stop" src="stop.png">
				</div>
			</div>

			

	<!-- Rows of Movies   -->
			<div class="movie-content">

				<div class="movie l-movie">
					<img class = "movie__image" src="The_Wolverine.jpeg">
					<h2 class = "movie__title">The Wolverine</h2>
					<p class = "move__genre">Action, Adventure</p>
					<p class = "movie__time">126 min</p>
				</div>

				<div class="movie l-movie">
					<img class = "movie__image" src="Independence_Day.jpeg">
					<h2 class = "movie__title">Independence Day</h2>
					<p class = "move__genre">Action</p>
					<p class = "movie__time">120 min</p>
				</div>

				<div class = "movie l-movie">
					<img class = "movie__image" src="The_Wolverine.jpeg">
					<h2 class = "movie__title">The Wolverine</h2>
					<p class = "move__genre">Action, Adventure</p>
					<p class = "movie__time">126 min</p>
				</div>

				<div class="movie l-movie">
					<img class = "movie__image" src="Independence_Day.jpeg">
					<h2 class = "movie__title">Independence Day</h2>
					<p class = "move__genre">Action</p>
					<p class = "movie__time">120 min</p>
				</div>

				<div class="movie l-movie">
					<img class = "movie__image" src="Independence_Day.jpeg">
					<h2 class = "movie__title">Independence Day</h2>
					<p class = "move__genre">Action</p>
					<p class = "movie__time">120 min</p>
				</div>

				<div class="movie l-movie">
					<img class = "movie__image" src="The_Wolverine.jpeg">
					<h2 class = "movie__title">The Wolverine</h2>
					<p class = "move__genre">Action, Adventure</p>
					<p class = "movie__time">126 min</p>
				</div>

				<div class="movie l-movie">
					<img class = "movie__image" src="Independence_Day.jpeg">
					<h2 class = "movie__title">Independence Day</h2>
					<p class = "move__genre">Action</p>
					<p class = "movie__time">120 min</p>
				</div>

				<div class = "movie l-movie">
					<img class = "movie__image" src="The_Wolverine.jpeg">
					<h2 class = "movie__title">The Wolverine</h2>
					<p class = "move__genre">Action, Adventure</p>
					<p class = "movie__time">126 min</p>
				</div>

				<div class="movie l-movie">
					<img class = "movie__image" src="Independence_Day.jpeg">
					<h2 class = "movie__title">Independence Day</h2>
					<p class = "move__genre">Action</p>
					<p class = "movie__time">120 min</p>
				</div>

				<div class="movie l-movie">
					<img class = "movie__image" src="Independence_Day.jpeg">
					<h2 class = "movie__title">Independence Day</h2>
					<p class = "move__genre">Action</p>
					<p class = "movie__time">120 min</p>
				</div>
			</div>
		</div>
	<!-- Start of chat bar  -->

		<div class="rightBar">

			<div class = "chat">

				<div>

				<h2 class = "chat__user navbar__text">Nels Findley</h2>

				</div>

				<div class = "chat__status">

					<h2 class = "l-navbar__item chat__title">Online</h2>

					<ul class="chat__list">
						<li class = "navbar__text chat__socialOne l-navbar__item"><img src="picture_One.png"> Victor Erixon</li>
							<p class = "l-chat__watching">The Great Gatsby</p>
						<li class="navbar__text chat__socialTwo l-navbar__item">Gustav Butlex</li>
							<p class = "l-chat__watching">Wolverine</p>
					</ul>
				
					<h2 class = "l-navbar__item chat__title">Offline</h2>

					<ul class="chat__list">
						<li class="navbar__text chat__offline l-navbar__item"> Bill S Kenney</li>
							<p class = "navbar__text l-chat__watching">Jobs</p>
						<li class="navbar__text chat__offline l-navbar__item">Charlie Waite</li>
							<p class = "l-chat__watching">Pacific Rim</p>
					</ul>
				</div>

			</div>
		</div>
	</div>
</body>
</html>