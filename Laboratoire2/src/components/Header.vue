<script>
import { RouterLink, RouterView } from 'vue-router'

export default{
  name:'Header',
}
</script>

<template>
    <header>
    <div class="wrapper">
      <nav>
        <RouterLink to="/">Inventaire</RouterLink>
        <RouterLink to="/Ajout">Ajout</RouterLink>
        <RouterLink to="/Modification">Modification</RouterLink>
        <RouterLink to="/Produit">Produit</RouterLink>
      </nav>
    </div>
  </header>
</template>

<style scoped>
nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}
.wrapper{
    width: 50%;
}
</style>