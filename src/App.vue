<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Card from './components/Card.vue'

</script>

<template>
  <header>
    <div class="wrapper">
      <nav>
        <RouterLink to="/">Home</RouterLink>
        <RouterLink to="/resume">Resume</RouterLink>
        <RouterLink to="/work">Projects</RouterLink>
      </nav>
      <Card/>
    </div>
  </header>
<div class="separator"></div>
  <RouterView />
</template>

<style scoped>

header {
  line-height: 1.5;
  max-height: 100vh;
  width: 40%;
}

.separator::after {
  content: "";
  display: block;
  width: 3px;
  height: 100%;
  margin: 0 auto;
  background-color: var(--color-border);
  color: var(--color-border);
}

nav {
  width: 100%;
  font-size: 12px;
  text-align: center;

}

nav a.router-link-exact-active {
  color: var(--color-focus);
}

nav a.router-link-exact-active:hover {
  background-color: transparent;
}

nav a {
  display: inline-block;
  padding: 0 1rem;
  border-left: 1px solid var(--color-border);
  color: var(--color-text);
}

nav a:first-of-type {
  border: 0;
}

@media (max-width: 1000px) {

  header {
    width: 100%;
  }

  header .wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  nav {
    width: 100%;
    text-align: center;
    margin: 0 0 25px 0;
    padding: 1rem 0;
  }
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
    height: 100vh;
  }

  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
    position: fixed;
    margin: auto 0;
    width: 25%;
  }

  nav {
    text-align: left;
    margin-left: -1rem;
    font-size: 1rem;
    padding: 1rem 0;
  }
}
</style>
