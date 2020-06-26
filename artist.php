<html>
<head>
<style type="text/css">

.dropbtn {
    background-color: black;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
	position:absolute;
}

.dropdown {
    position: relative;
    display: inline-block;
	text-align:center;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
</head>
<body>



<h2>Choose Artist</h2>

 <div class="dropdown">
 <p align="center">
 <button class="dropbtn"> Dropdown </button> </p>
  <div class="dropdown-content">
    <a href="arijit.php">Arijit Singh</a>
	 <a href="shirley.php">Shirley Setia</a>
    
    
  </div>
  
</div>
</body>
</html>