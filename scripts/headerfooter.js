window.addEventListener('DOMContentLoaded', ()=>{
    const header = document.querySelector('header')
    header.innerHTML = `
        <h1>Clerick Barrion's Celestial Barracuda &#376; WEB250</h1>
        <nav>
            <ul>
                <li><a href="./">Home</a></li>
                <li><a href="introduction.html">Introduction</a></li>
                <li><a href="contract.html">Contract</a></li>
            </ul>
        </nav>
    `
    const footer = document.querySelector('footer')
    footer.innerHTML = `
        <ul>
            <li><a href="https://github.com/cbarrio2-CPCC">Github</a></li>
            <li><a href="https://cbarrio2-cpcc.github.io">Github.io</a></li>
            <li><a href="https://cbarrio2-cpcc.github.io/web250">WEB250.io</a></li>
            <li><a href="https://www.freecodecamp.org/clerick">freecodecamp</a></li>
            <li><a href="https://www.codecademy.com/profiles/cbarrion">Codecademy</a></li>
            <li><a href="https://jsfiddle.net/user/clerickbarrion">JSFiddle</a></li>
            <li><a href="https://www.linkedin.com/in/clerickbarrion">LinkedIn</a></li>
        </ul>
        <br>
        <p>Designed by &copy;Barrion CudaCorp</p>
        <a href="http://validator.w3.org/check?uri=${window.location.href}" style = "text-decoration: none">
            <img src="images/validation_button_html-blue.png" alt="Validate HTML" />
        </a>
        <a href="http://jigsaw.w3.org/css-validator/validator?uri=${window.location.href}" style = "text-decoration: none">
            <img src="images/validation_button_css-blue.png" alt="Validate CSS" />
        </a>
    `
})