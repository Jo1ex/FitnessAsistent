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
                
      <v-card
         class="mx-auto"
         color="#ECECEC"
         light
         max-width="1200"
         width="1200"
         height="1450"
         align=center
        >
        <v-card
        class="ma-3"
        elevation=5 
        color=#DEDEDE>
        
      </v-card>
      <v-card>
  <v-card-title>
          <v-list-item-avatar color="grey darken-3">
            <v-icon dark>mdi-account</v-icon> 
            </v-list-item-avatar>

            <v-list-item-content align=start>
              <v-list-item-title>Jolex</v-list-item-title>
            </v-list-item-content>
          
        </v-card-title>

        <v-card-text class="text-h9 font-weight-bold" align=start>
          "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
        </v-card-text>
        
        <v-img
          src="https://wallpaperaccess.com/full/32822.jpg"
          max-height="900"
          max-width="1200"
        ></v-img>

        <v-card-actions>
          <v-list-item class="grow">
            

            <v-row
              align="center"
              justify="start"
            >
              <v-btn icon>
              <v-icon class="mr-1" size="35">
                mdi-heart
              </v-icon>
              </v-btn>
              <span class="subheading mr-2">561</span>
              
              <span class="mr-2">·</span>
              <router-link to="/komentarji">
                <v-icon class="mr-1" size="35">mdi-chat</v-icon>
              </router-link>
              <span class="subheading mr-2">65</span>
              
              <span class="mr-1">·</span>
              <router-link to="/deljenje">
              <v-icon class="mr-1" size="35">
                mdi-link-variant
              </v-icon>
              </router-link>
              <span class="subheading mr-15">93</span>
              <v-spacer></v-spacer>
              <v-btn icon>
              <v-icon class="mr-1" size="35">
                mdi-bookmark
              </v-icon>
              </v-btn>
            </v-row>
          </v-list-item>
        </v-card-actions>

</v-card>
      <v-card
      class="my-10 mx-13"
      width="1100"
      elevation=5 
      color=#DEDEDE
      >
        
        <v-row>
        <check-box class="mx-15"></check-box>
        <check-box class="mx-15"></check-box>
        <check-box class="mx-15"></check-box>
        <check-box class="mx-15"></check-box>
        </v-row>
        <v-row>
        <check-box class="mx-15"></check-box>
        <check-box class="mx-15"></check-box>
        <check-box class="mx-15"></check-box>
        <check-box class="mx-15"></check-box>
        </v-row>
        <v-row>
        <check-box class="mx-15"></check-box>
        <check-box class="mx-15"></check-box>
        <check-box class="mx-15"></check-box>
        <check-box class="mx-15"></check-box>
        </v-row>
        <v-row>
        <check-box class="mx-15"></check-box>
        <check-box class="mx-15"></check-box>
        <check-box class="mx-15"></check-box>
        <check-box class="mx-15"></check-box>
        </v-row>

      </v-card>
      <v-btn
                elevation="2"
                width=300
                height=80
                color=#2C6763
                dark
                align=center
              >DELI</v-btn>
      </v-card>
                    
    </v-container>
  </v-app>
</template>

<script>
import CheckBox from '../components/CheckBox.vue';
export default {
  components: { CheckBox},
  data: () => ({
    step: 1
  }),
  props: {
    source: String
  }
};
</script>

