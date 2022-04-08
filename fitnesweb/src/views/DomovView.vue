<template>
  <v-app id="/reg">  
    <v-container class="fill-height" fluid>
                
      <v-card
         class="mx-auto"
         color="#ECECEC"
         light
         max-width="1200"
         width="1200"
        >
        <v-card-title>
          <v-list-item-avatar color="grey darken-3">
            <v-icon dark>mdi-account</v-icon> 
            </v-list-item-avatar>

            <v-list-item-content>
              <v-list-item-title>Jolex</v-list-item-title>
            </v-list-item-content>
          
        </v-card-title>

        <v-card-text class="text-h9 font-weight-bold">
          "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
        </v-card-text>
        
        <v-img
          src="https://www.lg.com/eastafrica/images/TV/features/TV-UHD-70-50-UM73-02-4K-Resolution-Desktop.jpg"
          max-height="900"
          max-width="1200"
        ></v-img>

        <v-card-actions>
          <v-list-item class="grow">
            

            <v-row
              align="center"
              justify="start"
            >
              <v-icon class="mr-1">
                mdi-heart
              </v-icon>
              <span class="subheading mr-2">561</span>
              
              <span class="mr-2">·</span>
              <v-icon class="mr-1">
                mdi-chat
              </v-icon>
              <span class="subheading mr-2">65</span>
              
              <span class="mr-1">·</span>
              <v-icon class="mr-1">
                mdi-link-variant
              </v-icon>
              <span class="subheading mr-15">93</span>
              <v-icon class="mr-1" justify="end">
                mdi-bookmark
              </v-icon>
            </v-row>
          </v-list-item>
        </v-card-actions>

        <v-card-title>
          <v-list-item-avatar color="grey darken-3">
            <v-icon dark>mdi-account</v-icon> 
            </v-list-item-avatar>

            <v-list-item-content>
              <v-list-item-title>Tokiyolo</v-list-item-title>
            </v-list-item-content>
          
        </v-card-title>

        <v-card-text class="text-h9 font-weight-bold">
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
              <v-icon class="mr-1">
                mdi-heart
              </v-icon>
              <span class="subheading mr-2">561</span>
              
              <span class="mr-2">·</span>
              <v-icon class="mr-1">
                mdi-chat
              </v-icon>
              <span class="subheading mr-2">65</span>
              
              <span class="mr-1">·</span>
              <v-icon class="mr-1">
                mdi-link-variant
              </v-icon>
              <span class="subheading">93</span>
              
            </v-row>
          </v-list-item>
        </v-card-actions>
        
        <v-card-actions>
        <v-card-title>
            <v-list-item-avatar color="grey darken-3">
              <v-icon dark>mdi-account</v-icon> 
            </v-list-item-avatar>

            <v-list-item-content>
              <v-list-item-title>Tokiyolo</v-list-item-title>
            </v-list-item-content> 
        </v-card-title>
        </v-card-actions>

        <v-card-text class="text-h9 font-weight-bold">
          "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
        </v-card-text>
        <v-img
          src="https://images.unsplash.com/photo-1555117746-a7c449e5d0ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80"
          max-height="900"
          max-width="1200"
        ></v-img>

        <v-card-actions>
          <v-list-item class="grow">
            

            <v-row
              align="center"
              justify="start"
            >
              <v-icon class="mr-1">
                mdi-heart
              </v-icon>
              <span class="subheading mr-2">561</span>
              
              <span class="mr-2">·</span>
              <v-icon class="mr-1">
                mdi-chat
              </v-icon>
              <span class="subheading mr-2">65</span>
              
              <span class="mr-1">·</span>
              <v-icon class="mr-1">
                mdi-link-variant
              </v-icon>
              <span class="subheading">93</span>
              
            </v-row>
          </v-list-item>
        </v-card-actions>
      </v-card>
                    
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
