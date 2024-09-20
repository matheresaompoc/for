<!-- resources/views/navbar.blade.php -->

<style>

html {
  scroll-behavior: smooth;
}

    .navbar{
        background: rgb(30, 30, 30);
    height: 5rem;
    width: 100vw;
    max-width: 75rem;
    margin: 0 auto;
    padding: 1rem 2rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: sticky;
    top: 0;
    z-index: 3;
    border-radius: 2rem;
    }

    .menu {
    display: flex;
 
    }

    .menulist {
        display: inline-block;
        margin: 1rem;
        cursor: pointer;

    }

    .menulist:hover {
        color: orange;
        padding-bottom: 0.5rem;
        border-bottom: 3px solid orange;
        
    }

    .logo{
        object-fit: cover;
        height: 3rem;
        width: 4rem;
    }

    .contact{
        height: 1rem;
        width: 1rem;
        object-fit: cover;
        margin: 5px;
    }

    .menubtn{
        background: white;
        color: black;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 1rem;
        border-radius: 2rem;
        height: 3rem;
        width: 8rem;
     
    }

    .navtext{
        color: white;
    }

    .navtextbut{
        color: black;
    }

    .menulist a.active {
  /* add your active styles here */
  color: orange;
  padding-bottom: 0.5rem;
  border-bottom: 3px solid orange;
}


</style>

<nav class="navbar">
    <img src="{{ asset('logo3.png') }}" alt="Logo" class="logo">
    <div class="menu">
        <div class="menulist">
            <a class="navtext" href="#intro">Home</a>
        </div>
        <div class="menulist">
            <a class="navtext" href="#skill">About</a>
        </div>
        <div class="menulist">
            <a class="navtext" href="#work">Portfolio</a>
        </div>
    </div>
    <button class="menubtn">
        <img class="contact" src="{{ asset('contactpic.png') }}" alt="Contact">
        <a class="navtextbut" href="#contact">Contact me</a>
    </button>
</nav>



<!--<script>
const anchors = document.querySelectorAll('.menulist a');

anchors.forEach((anchor) => {
  anchor.addEventListener('click', (e) => {
    e.preventDefault();
    const target = document.querySelector(anchor.getAttribute('href'));
    target.scrollIntoView({
      behavior: 'smooth',
      block: 'start',
    });
  });
});
</script> -->



<!--activeClass="active" to="intro" offset={-50} duration={500}-->