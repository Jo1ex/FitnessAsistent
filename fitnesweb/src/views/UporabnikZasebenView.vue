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
      
      <v-text-field
            class="mt-6"
            placeholder="Search:"
            solo
            rounded
            dense
            light
            justify=center
            align=center
          >
          </v-text-field>

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
            
            
            <v-card
              class="mx-auto"
              color="#ECECEC"
              light
              max-width="1200"
              width="1200"
            >
                <v-card-title primary-titles class="justify-center">
                  <v-icon  light size="175" >mdi-account-circle</v-icon> 
                </v-card-title>
              <v-list-item-content>
                <v-list-item-title-font-size>
                    <v-list-item-title class="text-h4 font-weight-bold" align="center">JOLEX</v-list-item-title>
                </v-list-item-title-font-size>
              </v-list-item-content>

              <v-card-text class="subheading" align="center">
                "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well.
                Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
              </v-card-text>
              <v-row justify="center" class="fill-height ma-4 mr-3" >
                <v-btn width="150" color="#2C6763" dark>SPOROCILO</v-btn>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <v-btn width="150" color="#2C6763" dark>DODAJ</v-btn>
              </v-row>
              <v-card-title primary-titles class="justify-center ma-2">
                  <v-icon  light size="250" >mdi-lock</v-icon> 
                </v-card-title>
              <v-list-item-content>
                <v-list-item-title-font-size>
                    <v-list-item-title class="text-h5 font-weight-bold ma-4" align="center">TA PROFIL JE ZASEBEN</v-list-item-title>
                </v-list-item-title-font-size>
              </v-list-item-content>
              <v-list-item-content>
                <v-list-item-title-font-size>
                    <v-list-item-title class="body-1 ma-10" align="center">CE ZELITE VIDETI VSEBINO TEGA PROFILA MORETE POSLATI ZAHTEVO TER BITI SPREJETI OD STRANI UPORABNIKA</v-list-item-title>
                </v-list-item-title-font-size>
              </v-list-item-content>


          </v-card>



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
