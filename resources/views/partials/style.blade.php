<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        background-color: #1D2225;
    }
    .logo-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    #hello {
        color: gold;
        margin: 20px;
        font-size: 3rem;
    }
    header {
        display: flex;
        justify-content: center;
        margin: 20px
    }
    header ul {
        display: flex;
        /* justify-content: center; */
    }
    header ul li {
        list-style: none;
        margin: 0 10px
    }
    header ul li a {
        text-decoration: none;
        color: white;
        background-color: #EF3B2D;
        padding: 5px;
        border-radius: 10px;
        text-transform: uppercase;
        font-weight: bold;
        transition: all .3s;
    }
    a:hover {
        text-decoration: underline;
        color: #EF3B2D;
        background-color: white;
    }
    #contacts {
        display: flex;
        align-items: center;
        flex-direction: column;
    }
    #contacts h2 {
        margin: 20px 0;
        font-size: 2rem;
    }
    .contact-list ul {
        flex-direction: column;
    }
    .contact-list ul li {
        margin: 10px 0;
        font-size: 1.3rem;
        color: white;
    }
</style>
