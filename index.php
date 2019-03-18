<?php

require("config.php");

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="general.css" rel="stylesheet" id="general-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="jquery.js"></script>

<!------ Include the above in your HEAD tag ---------->

<img width="100%" src="<?php echo $bannerfile; ?>">


<ul>
  <li id="list">Highscore liste</li>
  <li id="logtime">Registrer tid</li>
</ul> 

<div class="col-md-4 col-md-offset-4" id="login">
						<section id="inner-wrapper" class="login">
							<article>
								<form>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"> </i></span>
											<input id="name" type="text" class="form-control" placeholder="Navn">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
											<input id="email" type="email" class="form-control" placeholder="Email Adresse">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-company"> </i></span>
											<input id="company" type="text" class="form-control" placeholder="Firma">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-time"> </i></span>
											<input id="lap" type="text" class="form-control" placeholder="MM:SS:UU">
										</div>
									</div>
                                                                        <div class="form-group">
                                                                                <div class="input-group">
                                                                                        <span class="input-group-addon"><i class="fa fa-agree"> </i></span>
                                                                                        <div class="input-text"><?php echo $eulatext1;?></div><input id="eula1" type="checkbox" class="form-control" placeholder="eula1">
                                                                                </div>
                                                                        </div>
									<div class="form-group">
                                                                                <div class="input-group">
                                                                                        <span class="input-group-addon"><i class="fa fa-agree"> </i></span>
                                                                                        <div class="input-text"><?php echo $eulatext2;?></div><input id="eula2" type="checkbox" class="form-control" placeholder="eula2">
                                                                                </div>
                                                                        </div>


									  <button id="submit" type="submit" class="btn btn-success btn-block">Send</button>
								</form>
							</article>
						</section>
</div>

<div class="col-md-4 col-md-offset-4" id="highscorelist">
<section id="inner-wrapper" class="login">

	<table id="highscoretable">
		  <tr>
		    <th>Navn</th>
		    <th>Firma</th>
		    <th>Bedste tid</th>
		  </tr>		
	</table>

</section>


</div>
