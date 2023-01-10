<?php if(!isset($_SESSION['hideC1'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Crypto-100-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideC1'])){ 
	if($_SESSION['hideC1']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideC1", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 100 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideF1'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Forensics-100-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideF1'])){ 
	if($_SESSION['hideF1']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideF1", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 100 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideL1'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Linux-100-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideL1'])){ 
	if($_SESSION['hideL1']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideL1", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 100 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideO1'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="OSINT-100-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideO1'])){ 
	if($_SESSION['hideO1']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideO1", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 100 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideW1'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Web-100-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideW1'])){ 
	if($_SESSION['hideW1']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideW1", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 100 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideM1'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Misc-100-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideM1'])){ 
	if($_SESSION['hideM1']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideM1", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 100 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideC2'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Crypto-200-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideC2'])){ 
	if($_SESSION['hideC2']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideC2", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 200 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideF2'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Forensics-200-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideF2'])){ 
	if($_SESSION['hideF2']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideF2", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 200 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideL2'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Linux-200-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideL2'])){ 
	if($_SESSION['hideL2']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideL2", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 200 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideO2'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="OSINT-200-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideO2'])){ 
	if($_SESSION['hideO2']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideO2", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 200 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideW2'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Web-200-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideW2'])){ 
	if($_SESSION['hideW2']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideW2", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 200 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideM2'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Misc-200-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideM2'])){ 
	if($_SESSION['hideM2']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideM2", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 200 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideC3'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Crypto-300-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideC3'])){ 
	if($_SESSION['hideC3']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideC3", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 300 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideF3'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Forensics-300-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideF3'])){ 
	if($_SESSION['hideF3']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideF3", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 300 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideL3'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Linux-300-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideL3'])){ 
	if($_SESSION['hideL3']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideL3", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 300 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideO3'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="OSINT-300-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideO3'])){ 
	if($_SESSION['hideO3']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideO3", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 300 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideW3'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Web-300-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideW3'])){ 
	if($_SESSION['hideW3']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideW3", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 300 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideM3'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Misc-300-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideM3'])){ 
	if($_SESSION['hideM3']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideM3", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 300 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideC4'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Crypto-400-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideC4'])){ 
	if($_SESSION['hideC4']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideC4", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 400 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideF4'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Forensics-400-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideF4'])){ 
	if($_SESSION['hideF4']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideF4", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 400 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideL4'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Linux-400-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideL4'])){ 
	if($_SESSION['hideL4']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideL4", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 400 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideO4'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="OSINT-400-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideO4'])){ 
	if($_SESSION['hideO4']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideO4", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 400 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideW4'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Web-400-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideW4'])){ 
	if($_SESSION['hideW4']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideW4", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 400 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideM4'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Misc-400-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideM4'])){ 
	if($_SESSION['hideM4']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideM4", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 400 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideC5'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Crypto-500-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideC5'])){ 
	if($_SESSION['hideC5']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideC5", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 500 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideF5'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Forensics-500-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideF5'])){ 
	if($_SESSION['hideF5']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideF5", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 500 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideL5'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Linux-500-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideL5'])){ 
	if($_SESSION['hideL5']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideL5", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 500 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideO5'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="OSINT-500-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideO5'])){ 
	if($_SESSION['hideO5']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideO5", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 500 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideW5'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Web-500-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideW5'])){ 
	if($_SESSION['hideW5']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideW5", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 500 Points Gained!</p>";
	}
}
?>

<!--Sep-->

<?php if(!isset($_SESSION['hideM5'])){?>
	<form action="validate.php" method="post">
		 <input type="text", name="Misc-500-flag", title="flag-input" placeholder="PING{flag}">
		<input type="submit" name="submit" value="Submit Flag">
	</form>
<?php }?>

<?php if(isset($_SESSION['hideM5'])){ 
	if($_SESSION['hideM5']==False){?>
		<form action="validate.php" method="post">
			<input type="text", name="hideM5", title="flag-input" placeholder="PING{flag}">
			<input type="submit" name="submit" value="Submit Flag">
			 <p>Try again</p>
		</form>
	<?php }
	else{
		echo "<p> Correct! 500 Points Gained!</p>";
	}
}
?>

<!--Sep-->

