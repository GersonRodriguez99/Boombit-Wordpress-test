<section class="footer-newsletter">
<div class="container">
<div class="row">
<form  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="col-sm-12">
	<div class="single">
		<h2>Subscribe to our Newsletter</h2>
	<div class="input-group">
    <input type="email" name="email-sub" class="form-control" placeholder="Email" id="email-sub" maxlength="150" aria-describedby="emailHelp" required>
         <span class="input-group-btn">
         <button class="btn btn-theme text-light" type="submit" name="subscribe" >Subscribe</button>
         </span>
         <div  class="form-text"><?php echo $errors['email-sub'] ?? '' ?></div>
          </div>
	</div>
</form><!-- end-form -->
</div>
</div>
</section>