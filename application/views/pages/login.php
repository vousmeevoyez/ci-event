		<?php
		if (isset($this->session->userdata['logged_in'])) {
			header("location: http://localhost/ci-hifest/participant/check");
		}
		?>
		<?php 
            echo form_open('participant/login'); 
        ?>
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2 class="major" style="text-align: center;">Login</h2>
								<?php echo validation_errors('<p style="color:red;">','</p>'); ?>
								<div class="field">
									<label for="email">Email</label>
									<input type="email" name="username" id="email" placeholder="Alamat email" />
								</div>
								<div class="field">
									<label for="email">Password</label>
									<input type="Password" name="password" placeholder="*******" />
								</div>

								<ul class="actions">
									<li><input type="submit" value="LOGIN" /></li>
								</ul>
								<?php echo form_close();?> 	
							</div>
						</header>
					</section>