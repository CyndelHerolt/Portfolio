<script setup>
</script>

<template>
  <main>
    <div class="presentation">
      <h2>Hi there <i class="fa-solid fa-hand-peace"></i></h2>
      <h3>Some information about me</h3>
      <p>"Discovering web development two years ago, I became passionate about the <span>web's mechanisms</span>. Since then, I learned basic languages like html, css or javascript, but now I specialize in <span>Symfony</span> and web <span>accessibility</span> and <span>quality</span> issues. In September 2022, I started an apprenticeship in the IT department of my university, for which I am developing a portfolio creation tool."</p>
      <div class="skills">
        <i class="fa-brands fa-html5 fa-2x"></i>
        <i class="fa-brands fa-bootstrap fa-2x"></i>
        <i class="fa-brands fa-css3-alt fa-2x"></i>
        <i class="fa-brands fa-sass fa-2x"></i>
        <i class="fa-brands fa-js-square fa-2x"></i>
        <i class="fa-brands fa-vuejs fa-2x"></i>
        <i class="fa-brands fa-php fa-2x"></i>
        <i class="fa-brands fa-symfony fa-2x"></i>
        <i class="fa-brands fa-ubuntu fa-2x"></i>
      </div>
    </div>
  </main>
</template>

<style scoped>
main {
  width: 60%;
  display: flex;
  place-items: center;
}

.presentation {
  padding-left: calc(var(--section-gap) / 2);
}

h3 {
  margin: 1rem 0;
}

p {
  opacity: .8;
}

p span {
  color: var(--color-focus);
  font-weight: 600;
  line-height: 1.5;
}

i {
  color: var(--color-focus);
}

.skills {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 1rem;
}

.skills i {
  color: var(--color-text);
}

@media (max-width: 1000px) {

  main {
    width: 100%;
    padding: 3rem 1rem;
  }

  .presentation p {
    text-align: justify;
  }

  main::before {
    display: none;
  }

  .presentation {
    padding: 0;
  }
}

</style>
