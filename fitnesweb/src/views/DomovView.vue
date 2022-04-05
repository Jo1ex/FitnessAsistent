<template>
  
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