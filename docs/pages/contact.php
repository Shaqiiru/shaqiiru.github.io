<html>
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../recources/css/stylecontact.css">
</head>
<body>
<div>
    <nav class="nav1">
        <a href="../index.html">Home</a>
        <a href="contact.php">Contact</a>
        <a href="projects.php">Projects</a>
    </nav>
</div>
    <div class="hidehamburg">
        <div class="menu-toggle">
            <button class='hamburger-button'>&#9776;</button>
        </div> 
    </div> 
<div class="popup">
    <nav class='nav2'>
        <a class="Home" href="../index.html">Home</a>
        <a class="Projects" href="projects.php">Projects</a>
        <a class="Contact" href="contact.php">Contact</a>
    </nav>
    <div class="hidex">
        <button class='closemenub'>X</button> 
    </div>
</div>
<h1>Contact</h1>
<div class="formcontainer">
    <div class="formf">
        <form>
            <input type="text" id="name" name="name" placeholder="Name..." required>
            
            <input type="email" id="email" name="email" placeholder="E-mail..." required>
            
            <textarea id="message" name="message" placeholder="Message..." required></textarea>
        </form>
    </div>
    <div class="formb">
        <button type="submit">Submit</button>
    </div>
</div>
</body>
</html>
<script>
    // JavaScript to toggle the navigation menu
    window.onload =  function () {
        const button = document.querySelector('.hamburger-button');
    const nav = document.querySelector('.nav');
    const popup = document.querySelector('.popup');
    const closeBtn = document.querySelector('.closemenub');

    button.addEventListener('click', function () {
        popup.classList.add('active');
        nav.classList.add('active');
    });

    closeBtn.addEventListener('click', function () {
        popup.classList.remove('active');
        nav.classList.remove('active');
    });

    // Close the menu when clicking outside
    document.addEventListener('click', function (event) {
        if (nav.classList.contains('active') && !popup.contains(event.target) && event.target !== button) {
            popup.classList.remove('active');
            nav.classList.remove('active');
        }
    });
};
</script>