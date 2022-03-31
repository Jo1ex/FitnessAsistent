<template>
  
  <div>
      <v-app-bar
        elevation="4"
        color='#2C6763'
        >
          <v-img
          max-height="300"
          max-width="238"
          src="C:\Users\Jolex\Pictures\Screenshots\Screenshot 2022-02-25 084057.PNG"
        ></v-img>
        
          <v-row align="left">
            <h1 color=white>FITNESASISTENT</h1>
          </v-row>
          <v-row align="right" justify="center">
            <router-link to="/domov">DOMOV</router-link>
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

