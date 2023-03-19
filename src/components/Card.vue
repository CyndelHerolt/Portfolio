<script setup>
</script>

<template>
  <div class="greetings">
    <h1 class="name">Cyndel Herolt</h1>
    <h3>Junior full stack developer focused on web quality and accessibility</h3>
    <ul>
      <li><i class="fa-solid fa-briefcase"></i> URCA - IUT de Troyes</li>
      <li><i class="fa-solid fa-location-dot"></i> Troyes, France</li>
      <li><i class="fa-solid fa-at"></i> cyndelherolt@gmail.com</li>
    </ul>
    <ul class="contact">
      <li><a href="https://github.com/CyndelHerolt" target="_blank"><i class="fa-brands fa-github fa-xl"></i></a></li>
      <li><a href="https://www.linkedin.com/in/cyndel-herolt/" target="_blank"><i class="fa-brands fa-linkedin fa-xl"></i></a></li>
    </ul>
  </div>
</template>

<style scoped>
h1 {
  font-weight: 500;
  font-size: 2.6rem;
  top: -10px;
}

h3 {
  font-size: .9rem;
}

ul {
  margin: 1rem 0;
  list-style: none;
  padding: 0;
}

ul li i {
  color: var(--color-focus);
}

i {
  width: 20px;
  text-align: center;
}

.contact {
  width: fit-content;
  display: flex;
  justify-content: space-between;
  list-style: none;
  margin: 2rem 0;
}

.contact li {
  display: inline-block;
  padding: 0 1rem;
  border-left: 1px solid var(--color-border);
  color: var(--color-text);
}

.contact li:first-of-type {
  border: 0;
  padding-left: 0;
}

.contact li a:hover {
  background-color: transparent;
}

.contact li i {
  color: var(--color-text);
}
.contact li a:hover i {
  color: var(--color-focus);
  transition: ease-in-out 0.4s;
}

@media (max-width: 1000px) {

  .contact {
    padding: 2rem;
    margin: 0 auto;
    border-bottom: solid 1px var(--color-border);
  }
}

</style>
