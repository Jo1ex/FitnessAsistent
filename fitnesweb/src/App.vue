<template> 
  <div>
      
    <v-toolbar dense
    color="#2C6763"
    dark>
      <v-app-bar-nav-icon></v-app-bar-nav-icon>

      <v-toolbar-title>FITNES ASISTENT</v-toolbar-title>

      <v-spacer></v-spacer>

      <v-btn icon>
        <v-icon>mdi-magnify</v-icon>
      </v-btn>
        
      <router-link to="/domov">
          <v-icon >mdi-home</v-icon> 
      </router-link>
      
      <router-link to="/uporabnik">
        <v-icon>mdi-account</v-icon>
      </router-link>
    </v-toolbar>
    <router-view />
  </div>
</template>


<style lang="scss">

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
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


