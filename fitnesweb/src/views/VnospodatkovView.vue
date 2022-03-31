<template>
  <v-app id="/reg">
    
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <v-col cols="12" sm="8" md="8">
            
              <v-window v-model="step" align="center" justify="">
                <v-window-item :value="1">
                    <v-col cols="12" md="8">
                      <v-card-text class="mt-12">
                        <h4
                          color=#00A99D class="text-center display-2 teal--text text--accent-3"
                        >Gremo dokoncati tvoj racun!</h4>
                        
                        <h4 class="text-center mt-4">S vpisovanjem teh podatkov nam boš pomagal izbrati najboljše vaje za tebe. </h4>
                        
                        
                          <div class="text-center mt-9">
                            
                             <v-menu
                                transition="slide-y-transition"
                                bottom
                              >
                                <template v-slot:activator="{ on, attrs }">
                                  <v-btn
                                    class="white"
                                    color="white"
                                    light
                                    v-bind="attrs"
                                    v-on="on"
                                  >
                                  Izberi spol
                                  </v-btn>
                                </template>
                                <v-list>
                                  <v-list-item
                                    v-for="(item, i) in items"
                                    :key="i"
                                  >
                                    <v-list-item-title>{{ item.title }}</v-list-item-title>
                                  </v-list-item>
                                </v-list>
                              </v-menu>
                            </div>
                          <v-form>
                          <v-text-field
                            label="Datum rojstva*"
                            name="datum rojstva"
                            prepend-icon="mdi-calendar-month"
                            type="text"
                            color="teal accent-2"
                          />
                          <v-text-field
                            label="Teza*"
                            name="Teza"
                            prepend-icon="mdi-database"
                            type="text"
                            color="teal accent-2"
                          />

                          
                          <v-text-field
                            label="Visina*"
                            name="Visina"
                            prepend-icon="mdi-ruler"
                            type="text"
                            color="teal accent-2"
                          />

                          
                        </v-form>
                      
                        
                        <v-btn color="#00A99D" elevation="5" outlined x-large bold>Potrdi podatke</v-btn>
                      </v-card-text>
                      
                    </v-col>
                    
                </v-window-item>
                
              </v-window>
            
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
<script>
  export default {
    data: () => ({
      items: [
        { title: 'Zenski' },
        { title: 'Moski' },
      ],
    }),
  }
</script>