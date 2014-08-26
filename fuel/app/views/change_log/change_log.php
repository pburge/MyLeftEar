<?

?>

<div class='row'>
	<div class='small-12 columns'>
		<p>
			This is the change log and additional notes page. This is just here for development purposes and to show a log of (almost) all changes.

			Before MyLeftEar goes live, this section will probably be a private admin-only area or simply not implemented at all mainly due to everything being on GitHub. Not sure just yet.
		</p>
		<hr>
		<br>
		<div>
			<strong>Change Log and Notes - 8/20</strong>
			<br><br>
			
			<p>So much has been done, yet so few changes can be seen. Let's just start off the top:</p>

			&bull; First off, the backend, in terms of progress, is about 80% complete. There's still a lot left that needs to be done.
			<br><br>
			
			&bull; The shopping cart, artist page, user profile, commissioned works page, product types page(s), patron login, and location page all need to be designed and configured.
			<br><br>
			
			&bull; Users can register, login, and log out succesfully. As stated above, patron log in still needs to be configured. There needs to be a Terms of Service in place as well. I'm sure we'll figure that out in time. 
			<br><br>
			
			&bull; The blog now reads from the database without any issues, but it's still not 100% done. The categories still need to be configured properly so it filters out any posts that don't <i>belong</i> to the selected category. I definitely feel a lot more can be done with it though.
			<br><br>
			
			&bull; A few things regarding the front page: I've changed the featured works so they're now pictures "advertising" the work. Clicking it will take the user to the page where they can purchase it. A similar route was taken with the "other arts" underneath the slideshow.
			<br><br>
			
<!-- 			
			&bull;
			<br><br>
			
			&bull;
			<br><br> -->

		</div>
		<hr>
		<div>
			<strong>Change Log and Notes - 8/7</strong>
			<br><br>
			
			&bull; Since most of the front end is complete, I will start porting code over to FuelPHP. The fun stuff begins!
			<br><br>	

			&bull; Blog is designed and fully mobile. I plan on tweaking it a little as time progesses, but for now, I think it looks fine.
			<br><br>

			&bull; Added register, login, and patron sign in forms. The register form is not mobile ready (it breaks completely). I just wanted to get those forms out of the way as fast as possible to make time to work on how the blog will look. I know the footer doesn't stick to the bottom and hangs mid-page. I'll work on that some time this weekend.
			<br><br>

			&bull; Database schema will be written and set up tomorrow. I'll be working on getting the register and both logins working soon after. The blog functionality will be done this weekend no doubt as we can register and login. Of course you'll have admin rights, Leo, so you'll be able to make test blog posts. I'll let you know when it's up and running.
			<br><br>

			&bull; Not sure if it's even worth mentioning, but I optimized the card flippy things on the front page. I'm also going to be working on fixing that carousel's width. I don't feel there's enough information going to the user telling them what exactly those are there for.
			<br><br>

			&bull; The location service thing will be worked on soon after the blog is fully functional. I can't say how long it'll be until it's up and running, but for now I'll set a link to the page to work on it later.
			<br><br>
		</div>
		<hr>
		<div>
			<strong>Change Log and Notes - 8/4</strong>
			<br><br>

			&bull; 100% fixed the all views smaller than desktop.
			<br><br>

			&bull; Front page thumbnails need to be sized at around 470x521 (WxH). The width of the current pieces are at 417, but that was because I didn't want to overdo the resizing. I know, these dimensions are very exact, but they seem to work best and size best with mobile views.
			<br><br>
			
			&bull; I'm adding a "Register" option to the user options below the logo. According to my tests, I've shown that users are more likely to sign up if given the option to register, rather than just assume they can't. Besides, it makes organizing and differentiating between consumer and artist that much easier. I can elaborate more on this if needed.
			<br><br>

			&bull; Finally replaced those ultra lame carousel placeholders with actual art pieces. Granted I had to resize them to fit a little better, so they're a *tiny* bit stretched. I feel the suggested dimensions should be 800x400. We can increase the width up to 1000px in width. Anything more would be overkill and anything less would look awkward. Mobile keeps these featured pieces and throws them into 3 sections, each with their own description (if necessary). I'll work more on that carousel though. It seems to be lacking something, but I can't quite put my finger on it just yet.
			<br><br>

			&bull; <del>Oh yeah, remember that 3x1 idea that was mentioned last week? Well here's my take on it. You can view it <a href="#">here.</a> </del>
			<br><br>

			&bull; A few tweaks here and there, but nothing really worth mentioning.
			<br><br>
		</div>
		<hr>
		<div>
			<strong>Change Log and Notes - 7/31</strong>

			<br><br>
			
			&bull; Everything is now PHP which means the nav, content area (this part) and footer are separate templates that can be modified on the fly.
			<br><br>
			
			&bull; When clicking the sub-nav (the black bar), it will show what page is active. mobile view works better with this (check the product types menu on your phone). desktop does not like it.

			<br><br>
			
			&bull; Mobile view is terribly spaced. This is where the resolution of images being consistent with each other will come into play. If you view this on your phone or tablet, you will see why.

			<br><br>
			
			&bull; Added Facebook, Twitter, Instagram, and Pinterest icons at the footer. Currently, only the FB goes somewhere. Just let me know where the others point to and I will update accordingly.

			<br><br>
			
			&bull; I haven't figured out what colours to use with the footer just yet, but I'll figure that out some time this week.

			<br><br>

			&bull; Of course, the most obvious change would be the addition of the images on the front page. I'll work on adding more on that carousel so it's not so bare. I'll try that 3x1 layout and see how that goes. 

			<br><br>

			&bull; Lastly, any resolution smaller than...about 1200 pixels wide won't look good at all. I haven't coded that just yet, but I will get on that later on this afternoon/evening.
		</div>
	</div>
</div>