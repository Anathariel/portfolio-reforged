<?php include 'header.php' ?>

<main id="aboutMe">
    <section>
        <div class="bio-container">
            <div class="bio-control-container">
                <form action="#" class="bio-length-control">
                    <fieldset class="bio-fieldset">
                        <legend class="bio-legend">Adjust bio length :</legend>
                        <div class="bio-length-options">
                            <div class="bio-option">
                                <input class="bio-input" type="radio" id="shortest-bio" name="bio-length" value="shortest" cursorshover="true">
                                <label for="length-shortest" class="bio-label">
                                    <span class="bio-label-text">shortest</span>
                                </label>
                            </div>
                            <div class="bio-option">
                                <input class="bio-input" type="radio" id="shorter-bio" name="bio-length" value="shorter" cursorshover="true">
                                <label for="length-shorter" class="bio-label">
                                    <span class="bio-label-text hidden">.</span>
                                </label>
                            </div>
                            <div class="bio-option">
                                <input class="bio-input" type="radio" id="long-bio" name="bio-length" value="long" checked cursorshover="true">
                                <label for="length-long" class="bio-label">
                                    <span class="bio-label-text hidden">.</span>
                                </label>
                            </div>
                            <div class="bio-option">
                                <input class="bio-input" type="radio" id="longest-bio" name="bio-length" value="longest" cursorshover="true">
                                <label for="length-longest" class="bio-label">
                                    <span class="bio-label-text">longest</span>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <template id="bios">
                #document-fragment
                <!-- ----------- shortest --------------->
                <p data-length="shortest">
                    Ange is doing her very best and is ready to work hard on solving your
                    problems.</p>
                <!-- ----------- shorter --------------->
                <p data-length="shorter">
                    <!-- ---CODING INTRO---->
                    Ange, or Angéline, I'm a French full stack developer located near Lyon. I've
                    always been curious with the web and decided to finally try myself in this job; so far,
                    I've been loving it ! <br>
                    <!-- ---HOBBIES---->
                    When my head isn't into coding, I enjoy gaming and raiding, writing, reading and of course music to
                    accompagny these.
                    As a teammate, I wish not only to progress but help those around me.
                </p>
                <!-- ----------- long --------------->
                <p data-length="long">
                    <!-- ---CODING INTRO---->
                    Ange, or Angéline, I'm a French full stack developer located near Lyon. I've
                    always been curious with the web, I remember playing around HTML when I was 12, so 12 years later I
                    took a leap of faith and went into professionally learning the job; so far, I've been loving it !
                    <br>
                    <!-- ---HOBBIES---->
                    When my head isn't into coding, I enjoy gaming and raiding, writing, reading and of course music to
                    accompagny these. <br>
                    As a teammate, I wish not only to progress but help those around me as I love to see the path and
                    progress made throughout our hard earned achievement !
                </p>
                <!-- ----------- longest --------------->
                <p data-length="longest">
                    <!-- ---CODING INTRO---->
                    Ange, or Angéline, I'm a French full stack developer located near Lyon. I've
                    always been curious with the web, I remember playing around HTML when I was 12 years old. So 12
                    years later I took a leap of faith and went into seriously learning the job; so far, I've been
                    loving it ! <br>
                    <!-- ---HOBBIES---->
                    When my head isn't into coding, I enjoy gaming and raiding alongside friends as well as writing or
                    reading, mostly fantasy and of course I indulge in all these with music on. <br>
                    <!-- ---SOFT SKILLS---->
                    As a teammate, I wish not only to progress but help those around me as I love to see the path and
                    progress made throughout our hard earned achievement !
                    I enjoy both interacting with people around me as I love to retract in my bubble with good music and
                    immerse myself fully into my work.
                </p>
            </template>
            <p class="bio"></p>
        </div>
        <figure>
            <img src="./asset/media/aboutme/portrait.png" alt="Portrait Image">
            <figcaption>
                <a href="mailto: angeline.gillot@outlook.com" target="_blank">
                    <img src="./asset/media/icons/mail.svg" alt="Contact me through email" title="Contact me through email">
                </a>
                <a href="https://www.linkedin.com/in/ang%C3%A9line-gillot/" target="_blank">
                    <img src="./asset/media/icons/linkedin.svg" alt="LinkedIn logo" title="Follow my career on LinkedIn">
                </a>
                <a href="https://github.com/Anathariel" target="_blank">
                    <img src="./asset/media/icons/github.svg" alt="GitHub logo" title="Follow my Projects on GitHub">
                </a>
            </figcaption>
        </figure>
    </section>

    <section id="skills">
        <div id="skillsRecap">
            <form action="#" class="skills-control">
                <fieldset class="skills-fieldset">
                    <legend class="skills-legend white lotr insetShadow">Full Stack Skillset</legend>
                    <div class="skills-options">
                        <div class="skill-option">
                            <input class="skill-input" type="radio" id="front" name="skills-option" value="front" checked cursorshover="true">
                            <label for="skill-front" class="skills-label">
                                <span class="skills-label-text lotr insetShadow white">Front-end</span>
                            </label>
                        </div>
                        <div class="skill-option">
                            <input class="skill-input" type="radio" id="back" name="skills-option" value="back" cursorshover="true">
                            <label for="skill-back" class="skills-label">
                                <span class="skills-label-text lotr insetShadow white">Back-end</span>
                            </label>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

        <div id="toolsRecap">
            <h2>Tools I'm familiar with</h2>
            <p>
                ✧ Figma ✧ Git / GitHub ✧ VS Code ✧ Notion ✧ Trello
            </p>
        </div>
        <div id="skillsdetails">
            <div>
            <div class="skillsR">
                <template id="skillsR">
                    #document-fragment
                    <p data-name="front"> html ✧ css / scss ✧ js ✧ bootstrap</p>
                    <p data-name="back"> php ✧ sql ✧ mysql ✧ python ✧ symphony </p>
                </template>
                <p class="skillsRecap"></p>
            </div>
                <p id="softSkillsBio">
                    As a full-stack developper I've been able to work on all front of web-designing and feel confident
                    on both front, but I love learning new things and exchange with others about their opinions on a
                    shared project to level up my own abilities in coding ! 
                    In solo or group project, I like to keep things organised may it be about making to-do list or
                    creating schedules of my own tasks and even down to the organisation of my code. I want my work to
                    be clear and efficient, for myself and for others, I always thrive to adapt in the best way
                    possible.</p>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php' ?>