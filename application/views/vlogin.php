<div class="row" ><!-- Daleman 1 -->
    <div class="span4"></div>
   		<div class="span5">
			<form action="<?php echo site_url(); ?>administrator/login_form" method="POST">
                 <fieldset>
                     <legend>Administrator Login</legend>
                        <label>Username</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Masukan User" name="username" autofocus>
                            <button class="btn-clear" tabindex="-1"></button>
                        </div>
                        <label>Password</label>
                        <div class="input-control password" data-role="input-control">
                            <input type="password" placeholder="Masukan password" name="password">
                            <button class="btn-reveal" tabindex="-1"></button>
                        </div>
                        <input type="submit" value="Login">
                  </fieldset>
            </form>

        </div>				 
    <div class="span4"></div>				 
</div>