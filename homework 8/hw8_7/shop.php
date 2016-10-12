<?php
session_start();
if ( ! isset( $_SESSION[ 'color' ] ) ){
	die( 'We don\'t have colorless goods :)');
}
$color = $_SESSION[ 'color' ];
?>
<style>
	div{
		background-color: <?php echo $color; ?>;
		width: 100px;
		height: 100px;
		margin-right: 20px;
		color: white;
		text-align: center;
		vertical-align: middle;
		line-height: 100px;
		display: inline-block;
		cursor: pointer;
	}
</style>
<h1>Welcome to our awesome shop!</h1>
<div >$20</div>
<div style="border-radius:50px;">$30</div>
<div style="border-radius:20px;">$50</div>
<p><a href="interview.php">back to choosing color...</a></p>
