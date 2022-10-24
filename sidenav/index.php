<nav class="navbar bg-dark fixed-top">
  <div class="container-fluid">
    
    <button class="navbar-toggler border-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
     <span class="text-light"><img src="..\assets/images/librarian.png" alt="Navigator" style="height:4vh;"> Menu</span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M0 13C0 6.373 5.373 1 12 1s12 5.373 12 12v8.657a.75.75 0 01-1.5 0V13c0-5.799-4.701-10.5-10.5-10.5S1.5 7.201 1.5 13v8.657a.75.75 0 01-1.5 0V13z"></path><path d="M8 19.75a.75.75 0 01.75-.75h6.5a.75.75 0 010 1.5h-6.5a.75.75 0 01-.75-.75z"></path><path fill-rule="evenodd" d="M5.25 9.5a1.75 1.75 0 00-1.75 1.75v3.5c0 .966.784 1.75 1.75 1.75h13.5a1.75 1.75 0 001.75-1.75v-3.5a1.75 1.75 0 00-1.75-1.75H5.25zm.22 1.47a.75.75 0 011.06 0L9 13.44l2.47-2.47a.75.75 0 011.06 0L15 13.44l2.47-2.47a.75.75 0 111.06 1.06l-3 3a.75.75 0 01-1.06 0L12 12.56l-2.47 2.47a.75.75 0 01-1.06 0l-3-3a.75.75 0 010-1.06z"></path></svg> My navigator</h5>
        <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill-rule="evenodd" d="M3 3.25c0-.966.784-1.75 1.75-1.75h5.5a.75.75 0 010 1.5h-5.5a.25.25 0 00-.25.25v17.5c0 .138.112.25.25.25h5.5a.75.75 0 010 1.5h-5.5A1.75 1.75 0 013 20.75V3.25zm16.006 9.5l-3.3 3.484a.75.75 0 001.088 1.032l4.5-4.75a.75.75 0 000-1.032l-4.5-4.75a.75.75 0 00-1.088 1.032l3.3 3.484H10.75a.75.75 0 000 1.5h8.256z"></path></svg></button>
      </div>
      
      <div class="offcanvas-body bg-secondary">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

        <li class="nav-item">
            <a class="nav-link" href="..\dashboard/"><img src="..\assets/images/dashboard.png" class="navIcon" alt=""> Dashboard</a>
          </li>

        <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			<img src="..\assets/images/book-lists.png" alt="" class="navIcon"> 
              Books
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="..\books/index.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M2 4a1 1 0 100-2 1 1 0 000 2zm3.75-1.5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zM3 8a1 1 0 11-2 0 1 1 0 012 0zm-1 6a1 1 0 100-2 1 1 0 000 2z"></path></svg>
                List</a></li>
              <li><a class="dropdown-item" href="..\books/form.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M13.25 2.5H2.75a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V2.75a.25.25 0 00-.25-.25zM2.75 1h10.5c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0113.25 15H2.75A1.75 1.75 0 011 13.25V2.75C1 1.784 1.784 1 2.75 1zM8 4a.75.75 0 01.75.75v2.5h2.5a.75.75 0 010 1.5h-2.5v2.5a.75.75 0 01-1.5 0v-2.5h-2.5a.75.75 0 010-1.5h2.5v-2.5A.75.75 0 018 4z"></path></svg>
                Add</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			<img src="..\assets/images/borrower.png" alt="" class="navIcon"> 
              Borrower
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="..\borrower/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M2 4a1 1 0 100-2 1 1 0 000 2zm3.75-1.5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zM3 8a1 1 0 11-2 0 1 1 0 012 0zm-1 6a1 1 0 100-2 1 1 0 000 2z"></path></svg>
                List</a></li>
              <li><a class="dropdown-item" href="..\borrower/form.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M13.25 2.5H2.75a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V2.75a.25.25 0 00-.25-.25zM2.75 1h10.5c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0113.25 15H2.75A1.75 1.75 0 011 13.25V2.75C1 1.784 1.784 1 2.75 1zM8 4a.75.75 0 01.75.75v2.5h2.5a.75.75 0 010 1.5h-2.5v2.5a.75.75 0 01-1.5 0v-2.5h-2.5a.75.75 0 010-1.5h2.5v-2.5A.75.75 0 018 4z"></path></svg>
                Add</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			<img src="..\assets/images/borrowed.png" alt="" class="navIcon"> 
              Borrowed books
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M2 4a1 1 0 100-2 1 1 0 000 2zm3.75-1.5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zm0 5a.75.75 0 000 1.5h8.5a.75.75 0 000-1.5h-8.5zM3 8a1 1 0 11-2 0 1 1 0 012 0zm-1 6a1 1 0 100-2 1 1 0 000 2z"></path></svg>
                List</a></li>
              <li><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M13.25 2.5H2.75a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h10.5a.25.25 0 00.25-.25V2.75a.25.25 0 00-.25-.25zM2.75 1h10.5c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0113.25 15H2.75A1.75 1.75 0 011 13.25V2.75C1 1.784 1.784 1 2.75 1zM8 4a.75.75 0 01.75.75v2.5h2.5a.75.75 0 010 1.5h-2.5v2.5a.75.75 0 01-1.5 0v-2.5h-2.5a.75.75 0 010-1.5h2.5v-2.5A.75.75 0 018 4z"></path></svg>
                Add</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			<img src="..\assets/images/returns.png" alt="" class="navIcon"> 
              Returns
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M6 .75A.75.75 0 016.75 0h2.5a.75.75 0 010 1.5h-2.5A.75.75 0 016 .75zm5 0a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75v1.5a.75.75 0 01-1.5 0V1.5h-.75A.75.75 0 0111 .75zM4.992.662a.75.75 0 01-.636.848c-.436.063-.783.41-.846.846a.75.75 0 01-1.485-.212A2.501 2.501 0 014.144.025a.75.75 0 01.848.637zM2.75 4a.75.75 0 01.75.75v1.5a.75.75 0 01-1.5 0v-1.5A.75.75 0 012.75 4zm10.5 0a.75.75 0 01.75.75v1.5a.75.75 0 01-1.5 0v-1.5a.75.75 0 01.75-.75zM2.75 8a.75.75 0 01.75.75v.268A1.72 1.72 0 013.75 9h.5a.75.75 0 010 1.5h-.5a.25.25 0 00-.25.25v.75c0 .28.114.532.3.714a.75.75 0 01-1.05 1.072A2.495 2.495 0 012 11.5V8.75A.75.75 0 012.75 8zm10.5 0a.75.75 0 01.75.75v4.5a.75.75 0 01-.75.75h-2.5a.75.75 0 010-1.5h1.75v-2h-.75a.75.75 0 010-1.5h.75v-.25a.75.75 0 01.75-.75zM6 9.75A.75.75 0 016.75 9h2.5a.75.75 0 010 1.5h-2.5A.75.75 0 016 9.75zm-1 2.5v3.25a.25.25 0 00.4.2l1.45-1.087a.25.25 0 01.3 0L8.6 15.7a.25.25 0 00.4-.2v-3.25a.25.25 0 00-.25-.25h-3.5a.25.25 0 00-.25.25z"></path></svg>
                Reports</a></li>
              
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			<img src="..\assets/images/settings.png" alt="" class="navIcon"> 
              Settings
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">My account</a></li>
              <li><a class="dropdown-item" href="#">Change password</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <form action="..\auth/index.php" method="post">
                  <button class="dropdown-item" name="logout">Logout</button>
                </form>
                </li>
            </ul>
          </li>
        </ul>

		<div class="footer2">
		<div class="">
		<p><img src="..\assets/images/info.png" alt="" style="height: 4vh;"> <a href="">AboutUs</a></p>
		</div>
		</div>

      </div>
    </div>
	<h1 class="botnav text-light" style="font-family: Jazz LET, fantasy;">UNIVERSITY OF SCIENCE AND TECHNOLOGY OF SOUTHERN PHILIPPINES</h1>
  </div>
</nav>
<div class="spacedown">

      </div>
<style>
.text-light{
  font-size: 25px;
}
.h1, h1 {
    font-size: 2.5rem;
    text-align: center;
}
  body {
    margin: 0;
    font-size: 15px;
    display: flex;
    flex: 1;
    min-height: 100vh;
    align-items: center;
  }
	.nav-link{
    text-align: left;
	font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-weight: bold ;
	color: white;
}

.dropdown-item{
	font-size:large;
}
.navIcon{
	height: 4vh;
}
.footer2 {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 99%;
    background-color: light;
	text-align: right;
    font-size: 12px;
  }
.footer2 a{
	text-decoration: none;
	color: white;
}
.dropdown-toggle::after{
  float: right;
  margin-top: 5%;
}
.spacedown{
  margin-bottom: 10%;
}
</style>