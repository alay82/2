* {
	box-sizing: border-box;
}
body {
	margin: 0;
}
.wrapper {
	max-width: 1280px;
	background: #33ff66;
	margin: 0 auto;
	
}

.fixed {
	position: fixed;
}

.site-banner {
	margin: 0;
	padding: 10px;
	background-color: #660066;
	text-align: center;
	color: white;
	height: 50px;
	
	
}

.main {
	padding: 1.5%;
	float: left;
	width: 71%;
	
	
}
.main table {
border: 1px solid #000;
background-color: #ffffcc;

}
.something, .something td {
border: 1px solid #000
}
.something {
border-collapse: collapse;
}

ul {
list-style: square;
}

ul ul {
list-style: circle;
font-weight: bold;
}
	
.sidebar{
	padding:1.5%;
	width: 27%;
	float: left;
	}
.site-footer{
	clear:both;
	margin: 0;
	padding: 10px;
	background-color: #660066;
	text-align: center;
	color: white;
	
	}
		
	
img {
	max-width: 100%;
	height: auto;
}

@media (max-width: 767px) {
	
	body {
		font-size: 80%;
	}
 
    .main, .sidebar {
        width: auto;
        float: none;
    }
	
	.wrapper, .main {
		border: none;
	}
}


 


