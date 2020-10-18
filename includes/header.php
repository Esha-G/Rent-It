<nav>
    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>


    <ul class="nav-links">
        <li><p style="font-size:44px;"><b><span style="color:#CD0046;">RENT</span>&nbsp; IT</b></p></li>
        <li><a href="#" > HOME </a> </li>
        <li><a href="./login.php" > LOGIN </a> </li>
        <li><a href="#" > ABOUT </a> </li>
        <li><a href="#" > CONTACT </a> </li>
        <li><a href="#" ><button class="button nav-btn" style="background-color:#CD0046;">RENT</button></a></li>
        <li><a href="#" ><button class="button nav-btn" style="background-color:#6F085B;">BUY</button></a></li>
    </ul>
</nav>

<hr>
<script>

const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("open");
});

</script>




</body>
</html>