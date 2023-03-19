<script setup>
import {ref, onMounted} from "vue";

const currentComponent = ref(null);
const activeTab = ref('Education');

const loadComponent = async (componentName) => {
  const component = await import(`../components/${componentName}.vue`);
  currentComponent.value = component.default;
  activeTab.value = componentName;
};

onMounted(() => {
  loadComponent('Education');
  currentComponent.value = 'Education';
});
</script>

<template>
  <main>
    <div class="about">
      <h2>Take a look at my resume</h2>
      <nav class="onglets">
        <a @click="loadComponent('Education')" :class="{ active: activeTab === 'Education' }">Education</a>
        <a @click="loadComponent('Experience')" :class="{ active: activeTab === 'Experience' }">Experience</a>
        <a @click="loadComponent('Skills')" :class="{ active: activeTab === 'Skills' }">Skills</a>
      </nav>
      <component :is="currentComponent" v-if="currentComponent"></component>
    </div>
  </main>
</template>

<style>
main {
  width: 60%;
  display: flex;
  place-items: center;
  margin: 10rem 0 5rem 0;
}

.active {
  color: var(--color-focus)!important;
}

i {
  color: var(--color-focus);
}

.about {
  padding-left: calc(var(--section-gap) / 2);
}

.onglets {
  width: 100%;
  font-size: 12px;
}

.onglets a:hover {
  background-color: transparent;
  color: var(--color-focus);
  cursor: pointer;
}

.onglets a.router-link-exact-active {
  color: var(--color-focus);
}

.onglets a.router-link-exact-active:hover {
  background-color: transparent;
}

.onglets a {
  display: inline-block;
  padding: 0 1rem;
  border-left: 1px solid var(--color-border);
  color: var(--color-text);
}

.onglets a:first-of-type {
  border: 0;
  padding-left: 0;
}

@media (max-width: 1000px) {
  main {
    width: 100%;
    padding: 3rem 1rem;
    margin: 0;
  }

  .about {
    padding: 0;
  }
}

</style>
