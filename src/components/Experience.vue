<script setup>
import { differenceInMonths } from 'date-fns';
const calculateMonthDifference = (startDate, endDate) => {
  const start = new Date(startDate);
  const end = new Date(endDate);
  return differenceInMonths(end, start);
}
</script>
<template>
  <div class="experience">
    <div>
      <p>Sept 2022 - Today • {{ calculateMonthDifference('2022-09-01', new Date()) }} months</p>
      <h3>Junior fullstack developer</h3>
      <p>Apprenticeship</p>
      <p><span>University Institute of Technology • Troyes</span></p>
      <ul>
        <li>Portfolio creation tool development</li>
        <li>Quality and accessibility redesign of the intranet</li>
      </ul>
    </div>
    <div>
      <p>Dec. 2017 - Jul. 2018 • {{ calculateMonthDifference('2017-12-01', '2018-07-01') }} months</p>
      <h3>Customer Advisor</h3>
      <p>Fixed term contract</p>
      <p><span>3Media - EDF</span></p>
      <ul>
        <li>Assistance to the customer in his procedures</li>
        <li>Advice on energy consumption</li>
      </ul>
    </div>
    <div>
      <p>Feb. 2017 - Mar. 2017 • {{ calculateMonthDifference('2017-02-01', '2017-03-31') }} month</p>
      <h3>Commercial assistant</h3>
      <p>Internship</p>
      <p><span>CAPI France - Alexandre Antoine</span></p>
      <ul>
        <li>Preparation and distribution of the annual prospecting campaign</li>
      </ul>
    </div>
    <div>
      <p>May 2016 - June 2016 • {{ calculateMonthDifference('2016-05-01', '2016-06-30') }} month</p>
      <h3>Commercial assistant</h3>
      <p>Internship</p>
      <p><span>Sonepar Connect</span></p>
      <ul>
        <li>Production of a departmental prospecting file</li>
        <li>Organization of an event to promote a product</li>
      </ul>
    </div>
    <div>
      <p>May 2015 - June 2015 | Jan. 2015 - Feb. 2015 • {{ calculateMonthDifference('2015-05-01', '2015-07-30') }} months</p>
      <h3>Saleswoman</h3>
      <p>Internship</p>
      <p><span>Adidas Outlet Store</span></p>
      <ul>
        <li>Customer advice</li>
        <li>Storage and shelving</li>
      </ul>
    </div>
  </div>
</template>

<style scoped>
.experience div {
  margin: 2rem 0;
}

.experience h3 {
  color: var(--color-focus);
}

.experience p {
  font-size: .8rem;
  opacity: .8;
}

.experience p span {
  font-weight: 600;
  /*color: var(--color-focus);*/
}

ul {
  font-size: .8rem;
  padding-left: 1rem;
}
</style>
