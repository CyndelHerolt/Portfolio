<script setup>

</script>
<template>
    <div class="skills">
        <h2>Hard Skills</h2>
        <div class="hard-skills">
            <div>
                <i class="fa-brands fa-php fa-2x"></i>
            </div>
            <div>
                <i class="fa-brands fa-symfony fa-2x"></i>
            </div>
            <div>
                <i class="fa-brands fa-js fa-2x"></i>
            </div>
            <div>
                <i class="fa-brands fa-vuejs fa-2x"></i>
            </div>
            <div>
                <i class="fa-brands fa-sass fa-2x"></i>
            </div>
            <div>
                <i class="fa-brands fa-ubuntu fa-2x"></i>
            </div>
            <div>
                <i class="fa-brands fa-unity fa-2x"></i>
            </div>
        </div>
        <h2>Soft Skills</h2>
        <div class="soft-skills">
            <h3>Qualities</h3>
            <div class="qualities">
                <div>
                    <i class="fa-solid fa-magnifying-glass fa-xl"></i>
                    <h4>Desire to learn</h4>
                </div>
                <div>
                    <i class="fa-solid fa-hand-holding-hand fa-xl"></i>
                    <h4>Altruism</h4>
                </div>
                <div>
                    <i class="fa-solid fa-sliders fa-xl"></i>
                    <h4>Flexibility</h4>
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
    margin: 2rem 0 0 0;
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

    .progress-bar {
        width: 7rem;
    }

    .qualities div {
        width: 45%;
        text-align: center;
    }
}
</style>
