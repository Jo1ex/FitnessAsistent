<template>
  
  <div>
    
      <v-app-bar
        elevation="4"
        color='#2C6763'
        >
        
          <v-row align="left" light>
            <h1>FITNESASISTENT</h1>
          </v-row>
          <v-row align="right" justify="center">
            <router-link to="/domov">DOMOV</router-link>
            <router-link to="/uporabnik">UPORABNIK</router-link>
          </v-row>
          
        
        
      </v-app-bar>
    
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
      color: #42b983;
    }
  }
}

</style>
