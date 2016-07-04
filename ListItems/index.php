<?php include_once "common/header.php"; ?>

<div id="main">

	<noscript>This site just doesn't work, period, without JavaScript</noscript>

	<!-- IF LOGGED IN -->

	<ul id="list">
   <li class="colorRed">
        Walk the dog
    </li>

    <!-- more list items -->

</ul>
	<form action="" id="add-new"> 

		<div>
			<input type="text" id="new-list-item-text" name="new-list-item-text" />
			<input type="submit" id="add-new-submit" value="Add" class="button" />

		</div>

	</form>
	<div id="share-area">
		<p>Public list URL: <a href="#">URL GOES HERE</a> 
			<small>(Nobody but YOU will be able to edit this list)</small></p>
		</div>

		<!-- IF LOGGED OUT -->

		<ul id="list">
			<li class="colorRed">
				<span>Walk the dog</span>
			</li>
			
			<li class="colorBlue">
				<span>Pick up dry cleaning</span>
			</li>
			
			<li class="colorGreen">
				<span>Milk</span>
			</li>
		</ul>

		<!-- Alternate content here -->
<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.jeditable.mini.js"></script>
<script type="text/javascript" src="js/lists.js"></script>
<script type="text/javascript">
    initialize();
    //bindAllTabs("#list li span");
</script>
	</div>

	<?php include_once "common/sidebar.php"; ?>

	<?php include_once "common/footer.php"; ?>