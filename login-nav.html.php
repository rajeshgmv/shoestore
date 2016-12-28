<?php
    $stmt = $pdo->prepare("SELECT * FROM customer WHERE id = :id");
    $stmt->execute([':id' => $_SESSION['user_id']]);
    $results = $stmt->fetch(PDO::FETCH_OBJ);

    $_SESSION['first_name'] = $results->first_name;
    $_SESSION['last_name'] = $results->last_name;
?>

<nav class="navbar navbar-default navbar-inverse" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Shoe Stop!</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
				<li><a href="index.php#shopnow">Shop Now</a></li>
                <li><a href="category.html.php?category=Deals">Deals</a></li>
                <li><a href="category.html.php?category=trending">Trending</a></li>
				
            </ul>

            <ul class="nav navbar-nav navbar-right">
			<li><p class="navbar-text"><?php

include_once 'findvip.php'; ?></p></li> 
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle text-capitalize" data-toggle="dropdown"><b><?php echo $_SESSION['first_name'].' '.$_SESSION['last_name']?></b> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
						<li><a href="ShoppingCart.html.php">Cart (<?php include 'countcart.php'; ?>)</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="OrderHistory.html.php">Order History</a></li>
						<li role="separator" class="divider"></li>
                        <li><a href="edit-profile.html.php">Edit Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="logout.php">Logout</a></li>
						
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>