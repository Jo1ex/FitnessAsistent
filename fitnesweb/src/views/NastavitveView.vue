<template>
  <v-app id="/reg">
      <v-toolbar 
    dense
    color="#009999"
    dark
    >
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/listasporocil">
        <v-icon>mdi-send-outline</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/nastavitve">
        <v-icon>mdi-cog-outline</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/urnikvadbe">
        <v-icon>mdi-plus-box-outline</v-icon>
      </router-link>
      
      <v-spacer></v-spacer>
      
      <v-toolbar-title>NASTAVITVE</v-toolbar-title>

      <v-spacer></v-spacer>

      <router-link to="/statusaktivnosti">
        <v-icon>mdi-account-circle</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/urnikvadbe">
        <v-icon>mdi-calendar</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/urnikprehrane">
        <v-icon>mdi-format-align-justify</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </v-toolbar>
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <v-col cols="12" sm="8" md="8">
            
            <v-row>
            <v-card
              class="mx-auto"
              color="#ECECEC"
              light
              max-width="625"
              width="625"
            >
                <v-row>
                <v-card-title primary-titles class="justify-start">
                    <v-icon  light size="75" >mdi-moon-waning-crescent</v-icon> 
                  </v-card-title>
                <v-list-item-content>
                  <v-list-item-title-font-size>
                      <v-list-item-title class="text-h4 ">DARK MODE</v-list-item-title>
                  </v-list-item-title-font-size>
                </v-list-item-content>
                <v-card-title primary-titles class="justify-start">
                    <v-icon  light size="50" >mdi-toggle-switch-outline</v-icon> 
                  </v-card-title>
                </v-row>
                <v-row>
                <v-card-title primary-titles class="justify-start">
                    <v-icon  light size="75" >mdi-format-font</v-icon> 
                  </v-card-title>
                <v-list-item-content>
                  <v-list-item-title-font-size>
                      <v-list-item-title class="text-h4 " >JEZIK</v-list-item-title>
                  </v-list-item-title-font-size>
                </v-list-item-content>
                </v-row>
                <v-row>
                <v-card-title primary-titles class="justify-start">
                    <v-icon  light size="75" >mdi-headphones</v-icon> 
                  </v-card-title>
                <v-list-item-content>
                  <v-list-item-title-font-size>
                      <v-list-item-title class="text-h4 " >ZVOK</v-list-item-title>
                  </v-list-item-title-font-size>
                </v-list-item-content>
                </v-row>
                <v-row>
                <v-card-title primary-titles class="justify-start">
                    <v-icon  light size="75" >mdi-calendar-month</v-icon> 
                  </v-card-title>
                <v-list-item-content>
                  <v-list-item-title-font-size>
                      <v-list-item-title class="text-h4 " >DATUM</v-list-item-title>
                  </v-list-item-title-font-size>
                </v-list-item-content>
                </v-row>
                <v-row>
                <v-card-title primary-titles class="justify-start">
                    <v-icon  light size="75" >mdi-clock-outline</v-icon> 
                  </v-card-title>
                <v-list-item-content>
                  <v-list-item-title-font-size>
                      <v-list-item-title class="text-h4 " >URA</v-list-item-title>
                  </v-list-item-title-font-size>
                </v-list-item-content>
                </v-row>
                <v-row>
                <v-card-title primary-titles class="justify-start">
                    <v-icon  light size="75" >mdi-account-box-outline</v-icon> 
                  </v-card-title>
                <v-list-item-content>
                  <v-list-item-title-font-size>
                      <v-list-item-title class="text-h4 " >RACUN</v-list-item-title>
                  </v-list-item-title-font-size>
                </v-list-item-content>
                </v-row>
            
              </v-card>
              <v-card
              class="mx-auto"
              color="#ECECEC"
              light
              max-width="625"
              width="625"
              height="850"
              >
                <v-row class="justify-center mt-5 md-1">
                <v-card-title primary-titles >
                  <v-icon  light size="175" >mdi-account-circle</v-icon> 
                </v-card-title>
                
                </v-row>
                
              <v-list-item-content>
                <v-list-item-title-font-size>
                    <v-list-item-title class="text-h5 font-weight-bold" align="center">jolex_username</v-list-item-title>
                </v-list-item-title-font-size>
              </v-list-item-content>
              
              <v-list-item-content>
                <v-list-item-title-font-size>
                    <v-list-item-title class="title" align="center">mojemail@gmail.com</v-list-item-title>
                </v-list-item-title-font-size>
              </v-list-item-content>
              <v-card-title primary-titles class="justify-center">
                  <v-icon  light size="30" >mdi-pencil-outline</v-icon> 
                </v-card-title>
                <v-card
                shaped
                class="mx-auto ma-15"
                color="#A8A8A8"
                light
                max-width="500"
                width="500"
                
                elevation="24"
                >
                <v-row>
                  <v-card-title primary-titles class="justify-start">
                    <v-icon  light size="75" >mdi-lock</v-icon> 
                  </v-card-title>
                <v-list-item-content>
                  <v-list-item-title-font-size>
                      <v-list-item-title class="text-h4 " align="center">ZASEBNOST</v-list-item-title>
                  </v-list-item-title-font-size>
                </v-list-item-content>
                </v-row>
                <v-row>
                <v-card-title primary-titles class="justify-start">
                    <v-icon  light size="75" >mdi-notebook</v-icon> 
                  </v-card-title>
                <v-list-item-content>
                  <v-list-item-title-font-size>
                      <v-list-item-title class="text-h4 " align="center">OSTALI PODATKI</v-list-item-title>
                  </v-list-item-title-font-size>
                </v-list-item-content>
                </v-row>
                <v-row>
                <v-card-title primary-titles class="justify-start">
                    <v-icon  light size="75" >mdi-link-variant</v-icon> 
                  </v-card-title>
                <v-list-item-content>
                  <v-list-item-title-font-size>
                      <v-list-item-title class="text-h4 " align="center">POVEZANI LINKI</v-list-item-title>
                  </v-list-item-title-font-size>
                </v-list-item-content>
                </v-row>
          
              </v-card>
            
            </v-card>
          </v-row>
          

          </v-col>
        </v-row>
      </v-container>
  </v-app>
</template>

<script>
export default {
  data: () => ({
    step: 1
  }),
  props: {
    source: String
  }
};
</script>
