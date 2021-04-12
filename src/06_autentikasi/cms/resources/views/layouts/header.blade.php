<header>
    <div class="topnav">
        <a class="{{Request::path() === 'home' ? 'active' : ''}}" href="/home">Home</a>
        <a class="{{Request::path() === 'productmain' ? 'active' : ''}}" href="/productmain">Product</a>
        <a class="{{Request::path() === 'news' ? 'active' : ''}}" href="/news">News</a>
        <a class="{{Request::path() === 'programmain' ? 'active' : ''}}" href="/programmain">Program</a>
        <a class="{{Request::path() === 'about-us' ? 'active' : ''}}" href="/about-us">About</a>
        <a class="{{Request::path() === 'contact-us' ? 'active' : ''}}" href="/contact-us">Contact</a>
      </div>
</header>

<style>
    /* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>