<?php include 'header.php' ?>

<main id="projects">
    <div id="projectsList">
        <form action="#" class="project-list-control">
            <fieldset class="project-fieldset">
                <legend class="project-legend">My Projects</legend>
                <div class="project-list-elements">
                    <!-- ----------- Tatouage --------------->
                    <div class="project-element">
                        <input type="radio" class="project-input" id="inkfection-project" name="project" value="inkfection" checked cursorshover="true">
                        <label for="project-inkfection" class="project-label">
                            <span class="project-label-text">Inkfection</span>
                        </label>
                    </div>
                    <!-- ----------- Bouquine --------------->
                    <div class="project-element">
                        <input type="radio" class="project-input" id="bouquine-project" name="project" value="bouquine" cursorshover="true">
                        <label for="project-bouquine" class="project-label">
                            <span class="project-label-text">Bouquine</span>
                        </label>
                    </div>
                    <!-- ----------- Loca'R --------------->
                    <div class="project-element">
                        <input type="radio" class="project-input" id="locar-project" name="project" value="locar" cursorshover="true">
                        <label for="project-locar" class="project-label">
                            <span class="project-label-text">Loca'R</span>
                        </label>
                    </div>
                    <!-- ----------- Team 180 --------------->
                    <div class="project-element">
                        <input type="radio" class="project-input" id="team180-project" name="project" value="team180" cursorshover="true">
                        <label for="project-team180" class="project-label">
                            <span class="project-label-text">Team180</span>
                        </label>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <!-- ----------- TEMPLATE PROJECTS --------------->
    <template id="project-items">
        #document-fragment
        <div data-project-name="inkfection">
            <h2>Inkfection</h2>
            <p> Inkfection was my first full HTML/CSS website project consisting of maquetting and
                coding a responsive onepage website for a tattoo salon.
            </p>
            <p>Solo project - HTML/CSS only</p>
            <div>
                <a href="https://github.com/Anathariel/Projet-Tatouage"><img src="./asset/media/icons/github.svg" alt="Link to repository"></a>
            </div>

            <figure>
                <img class="project-img" src="./asset/media/projects/inkfection-home.png" alt="Inkfection, tattoo website project - Main">
                <img class="project-img" src="./asset/media/projects/inkfection-stats.png" alt="Inkfection, tattoo website project - Stats">
            </figure>
        </div>
        <div data-project-name="bouquine">
            <h2>Bouquine</h2>
            <p>Bouquine is the name of my first group project, working with two front-developers,
                One lead-developer and me in back-end. It consisted of a PHP project for a library service with
                renting system. I managed the database and most of the CRUD system of this project. Also includes an
                admin side.
            </p>
            <p>Group Project - PHP - HTML - SCSS & JS
            </p>
            <div>
                <a href="https://github.com/DayZmooN/bouquine"><img src="./asset/media/icons/github.svg" alt="Link to repository"></a>
            </div>
            <figure>
                <img class="project-img" src="./asset/media/projects/bouquine-home.png" alt="Bouquine, library website collaborative project - Main">
                <img class="project-img" src="./asset/media/projects/bouquine-book.png" alt="Bouquine, library website collaborative project - Book reservation">
            </figure>
        </div>
        <div data-project-name="locar">
            <h2>Loca'R</h2>
            <p>Loca'R is the first MVC structured project for a airbnb type website. We were given Twig & Altorouter as guidelines to use for this one. No symfony, full PHP.
            </p>
            <p>Group Project - PHP & Altorouter / Twig - SCSS & JS</p>
            <div>
                <a href="https://github.com/Anathariel/Project-Rbnb" target="_blank"><img src="./asset/media/icons/github.svg" alt="Link to repository"></a>
            </div>
            <figure>
                <img class="project-img" src="./asset/media/projects/locar-home" alt="Loca'R, airbnb website project - Main">
                <img class="project-img" src="./asset/media/projects/locar-dashboard" alt="Loca'R, airbnb website project - Dashboard">
            </figure>
        </div>
        <div data-project-name="team180">
            <h2>Team 180</h2>
            <p> A simple custom Wordpress Template made for a blog about our class. It regroups a part for blog articles and one to present me and my collegues.
            </p>
            <p>Solo Project - HTML & SCSS + JS</p>
            <div>
                <a href="https://github.com/Anathariel/Team180"><img src="./asset/media/icons/github.svg" alt="Link to repository"></a>
            </div>
            <figure>
                <img class="project-img" src="./asset/media/projects/team180-home" alt="Team 180 - Wordpress Template - Main">
                <img class="project-img" src="./asset/media/projects/team180-blog" alt="Team 180 - Wordpress Template - Blog">
            </figure>
        </div>
    </template>
    <!-- ----------- INSERTION RADIO VALUE JS --------------->
    <div id="projects-checked">

    </div>
</main>

<?php include 'footer.php' ?>