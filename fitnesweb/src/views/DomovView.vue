<template>
<<<<<<< HEAD
  <v-app id="/reg">
    
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <v-col cols="12" sm="8" md="8">
            
              <v-window v-model="step" align="center" justify="">
                <v-window-item :value="1">
                    <v-col cols="12" md="8">
                      <v-card>
                        
                      </v-card>
                      
                    </v-col>
                    
                </v-window-item>
                
              </v-window>
            
          </v-col>
        </v-row>
      </v-container>
    
  </v-app>
=======
  
<v-card flat>
  <v-img
  contain
  center
  lazy-src="https://picsum.photos/id/11/10/6"
  max-height="300"
  max-width="500"
  src="https://picsum.photos/id/11/500/300"
></v-img>
    <v-card-text>
      <v-container
        fluid
        class="pa-0"
      >
        <v-row>
          
          <v-col
            cols="12"
            sm="3"
          >
            <v-btn
              icon
              color="pink"
            >
              <v-icon>mdi-heart</v-icon>
            </v-btn>
          </v-col>

          <v-col
            cols="12"
            sm="3"
          >
            <v-btn
              icon
              color="indigo"
            >
              <v-icon>mdi-chat</v-icon>
            </v-btn>
          </v-col>

          <v-col
            cols="12"
            sm="3"
          >
            <v-btn
              icon
              color="green"
            >
              <v-icon>mdi-share-variant</v-icon>
            </v-btn>
          </v-col>

          <v-col
            cols="12"
            sm="3"
          >
            <v-btn
              icon
              color="deep-orange"
            >
              <v-icon>mdi-bookmark</v-icon>
            </v-btn>
          </v-col>
        </v-row>

        
      </v-container>
    </v-card-text>
  </v-card>
  
>>>>>>> b2f8e233d37015321620b9f9714e880dc720f3c0
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
<script>
  export default {
    data: () => ({
      items: ['Zenski', 'Moski'],
    }),
  }
</script>