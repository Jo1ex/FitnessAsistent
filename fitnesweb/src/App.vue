<template> 
  <div>
      
    <v-toolbar dense
    color="#2C6763"
    dark>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <v-toolbar-title>FITNES ASISTENT</v-toolbar-title>

      <v-spacer></v-spacer>
  
      <router-link to="/">
          <v-icon >mdi-home</v-icon> 
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/uporabnik">
        <v-icon>mdi-account</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </v-toolbar>
    <router-view />
  </div>
</template>


<style lang="scss">

#app {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: right;
  background: #2C6763;
  color: white;

  
}
.container{
  background-image: url('../slike/slika.png');
  background-size: cover;
}
nav {
  padding: 25px;
  

  a {
    font-weight: bold;
    color: white;

    &.router-link-exact-active {
      color: white;
    }
  }
}
</style>


