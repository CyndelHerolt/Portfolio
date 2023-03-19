<script setup>

</script>
<template>
  <div class="skills">
    <h2>Hard Skills</h2>
    <div class="hard-skills">
      <div>
        <h3>HTML</h3>
        <div class="progress-bar">
          <div class="progress-bar-fill-html"></div>
        </div>
      </div>
      <div>
        <h3>CSS</h3>
        <div class="progress-bar">
          <div class="progress-bar-fill-css"></div>
        </div>
      </div>
      <div>
        <h3>PHP</h3>
        <div class="progress-bar">
          <div class="progress-bar-fill-php"></div>
        </div>
      </div>
      <div>
        <h3>Symfony</h3>
        <div class="progress-bar">
          <div class="progress-bar-fill-sf"></div>
        </div>
      </div>
      <div>
        <h3>MySQL</h3>
        <div class="progress-bar">
          <div class="progress-bar-fill-sql"></div>
        </div>
      </div>
      <div>
        <h3>Bootstrap</h3>
        <div class="progress-bar">
          <div class="progress-bar-fill-btp"></div>
        </div>
      </div>
      <div>
        <h3>JS</h3>
        <div class="progress-bar">
          <div class="progress-bar-fill-js"></div>
        </div>
      </div>
      <div>
        <h3>SaSS</h3>
        <div class="progress-bar">
          <div class="progress-bar-fill-sass"></div>
        </div>
      </div>
      <div>
        <h3>VueJs</h3>
        <div class="progress-bar">
          <div class="progress-bar-fill-vue"></div>
        </div>
      </div>
    </div>
    <h2>Soft Skills</h2>
    <div class="soft-skills">
      <h3>Qualities</h3>
      <div class="qualities">
        <div>
          <i class="fa-solid fa-fire fa-xl"></i>
          <h4>100% Involved</h4>
        </div>
        <div>
          <i class="fa-solid fa-magnifying-glass fa-xl"></i>
          <h4>Desire to learn</h4>
        </div>
        <div>
          <i class="fa-solid fa-eye fa-xl"></i>
          <h4>Curiosity</h4>
        </div>
        <div>
          <i class="fa-solid fa-hand-holding-hand fa-xl"></i>
          <h4>Altruism</h4>
        </div>
        <div>
          <i class="fa-solid fa-sliders fa-xl"></i>
          <h4>Flexibility</h4>
        </div>
        <div>
          <i class="fa-solid fa-face-smile fa-xl"></i>
          <h4>Acceptance of criticism</h4>
        </div>
      </div>
    <h3>Flaws</h3>
      <div class="qualities">
        <div>
          <i class="fa-solid fa-sitemap fa-xl"></i>
          <h4>Organization</h4>
        </div>
        <div>
          <i class="fa-solid fa-microphone fa-xl"></i>
          <h4>Public speeches</h4>
        </div>
        <div>
          <i class="fa-solid fa-users fa-xl"></i>
          <h4>Team Work</h4>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>

h2 {
  margin-top: 2rem;
  border-bottom: solid 1px var(--color-text);
  /*width: fit-content;*/
}

.hard-skills {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}

.hard-skills div {
  margin: 2rem 2.5rem 0 0;
}

.hard-skills h3 {
  /*color: var(--color-focus);*/
  font-size: .8rem;
}

.progress-bar {
  width: 150px;
  height: 10px;
  background-color: var(--color-border);
  margin: 10px 0 !important;
}

.progress-bar-fill-html {
  width: 90%;
  height: 100%;
  background-color: var(--color-focus);
  margin: 0 !important;
}

.progress-bar-fill-css {
  width: 80%;
  height: 100%;
  background-color: var(--color-focus);
  margin: 0 !important;
}

.progress-bar-fill-js {
  width: 60%;
  height: 100%;
  background-color: var(--color-focus);
  margin: 0 !important;
}

.progress-bar-fill-php {
  width: 70%;
  height: 100%;
  background-color: var(--color-focus);
  margin: 0 !important;
}

.progress-bar-fill-sf {
  width: 70%;
  height: 100%;
  background-color: var(--color-focus);
  margin: 0 !important;
}

.progress-bar-fill-sql {
  width: 70%;
  height: 100%;
  background-color: var(--color-focus);
  margin: 0 !important;
}

.progress-bar-fill-btp {
  width: 70%;
  height: 100%;
  background-color: var(--color-focus);
  margin: 0 !important;
}

.progress-bar-fill-sass {
  width: 60%;
  height: 100%;
  background-color: var(--color-focus);
  margin: 0 !important;
}

.progress-bar-fill-vue {
  width: 40%;
  height: 100%;
  background-color: var(--color-focus);
  margin: 0 !important;
}

.soft-skills {
  margin: 2rem 0;
}

.soft-skills h3 {
  font-weight: 600;
}

.qualities {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  /*border-bottom: solid 1px var(--color-text);*/
}

.qualities div {
  width: 30%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
  margin: 2rem 0;
}

.qualities i {
  padding: 20px;
}

@media (max-width: 1000px) {

  .hard-skills div {
    margin: 2rem 0 0 0;
  }

  .progress-bar  {
    width: 7rem;
  }

  .qualities div {
    width: 45%;
    text-align: center;
  }
}
</style>
